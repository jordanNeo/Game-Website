<?php

function update_participants($comp_id)
{
    $db = getDB();
    $stmt = $db->prepare("UPDATE Competitions set current_participants = (SELECT IFNULL(COUNT(1),0) FROM User_Competitions WHERE competition_id = :cid), 
    current_reward = IF(join_fee > 0, current_reward + CEILING(join_fee * 0.5), current_reward) WHERE id = :cid");
    try {
        $stmt->execute([":cid" => $comp_id]);
        return true;
    } catch (PDOException $e) {
        error_log("Update competition participant error: " . var_export($e, true));
    }
    return false;
}

function add_to_competition($comp_id, $user_id)
{
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO User_Competitions (user_id, competition_id) VALUES (:uid, :cid)");
    try {
        $stmt->execute([":uid" => $user_id, ":cid" => $comp_id]);
        update_participants($comp_id);
        return true;
    } catch (PDOException $e) {
        error_log("Join Competition error: " . var_export($e, true));
    }
    return false;
}

function join_competition($comp_id, $user_id, $cost)
{

    $balance = get_credits(get_user_id());
    if ($comp_id > 0) {
        if ($balance >= $cost) {
            $db = getDB();
            $stmt = $db->prepare("SELECT `name`, join_fee from Competitions where id = :id");
            try {
                $stmt->execute([":id" => $comp_id]);
                $r = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($r) {
                    $cost = (int)se($r, "join_fee", 0, false);
                    $name = se($r, "name", "", false);
                    if ($balance >= $cost) {
                        $cost = $cost * -1;
                        if ($cost == 0) {
                            if (add_to_competition($comp_id, $user_id)) {
                                update_participants($comp_id);
                                flash("Successfully joined $name", "success");
                                error_log("you pay",0);
                            }
                        }
                        else if (give_credits(get_user_id() ,$cost, "join-comp")) {
                            if (add_to_competition($comp_id, $user_id)) {
                                flash("Successfully joined $name", "success");
                                error_log("you pay",0);
                            }
                        } else {
                            error_log("no pay",0);
                            flash("Failed to pay for competition", "danger");
                        }
                    } else {
                        flash("You can't afford to join this competition", "warning");
                        error_log("no pay",0);
                    }
                }
            } catch (PDOException $e) {
                error_log("Comp lookup error " . var_export($e, true));
                flash("There was an error looking up the competition", "danger");
            }
        }
    }
}
function get_top_scores_for_comp($comp_id, $limit = 10)
{
    $db = getDB();

    $stmt = $db->prepare("SELECT * FROM (SELECT a.username as username, s.score,s.created, s.user_id, DENSE_RANK() OVER (PARTITION BY s.user_id ORDER BY s.score desc) as `rank` FROM Scores s
    JOIN User_Competitions uc on uc.user_id = s.user_id
    JOIN Competitions c on uc.competition_id = c.id
    JOIN Users a on a.id = s.user_id
    WHERE c.id = :cid AND s.created BETWEEN uc.created AND c.expires
    )as t where `rank` = 1 ORDER BY score desc LIMIT :limit ");
    $scores = [];
    try {
        $stmt->bindValue(":cid", $comp_id, PDO::PARAM_INT);
        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $scores = $r;
        }
    } catch (PDOException $e) {
        flash("There was a problem fetching scores, please try again later", "danger");
        error_log("List competition scores error: " . var_export($e, true));
    }
    return $scores;
}


//jal88 7/31/2022
function calc_winners()
{
    $db = getDB();
    error_log("Starting winner calc");
    $calced_comps = [];
    // selecting expired valid comps and win percentages
    $stmt = $db->prepare("select c.id,c.`name`, first_place_per, second_place_per, third_place_per, current_reward 
    from Competitions c 
    where expires <= CURRENT_TIMESTAMP() AND did_calc = 0 AND current_participants >= min_participants LIMIT 10");
    try {
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $rc = $stmt->rowCount();
            error_log("Validating $rc comps");
            foreach ($r as $row) {
                //assign percentages to vars
                $fp = floatval(se($row, "first_place_per", 0, false) / 100);
                $sp = floatval(se($row, "second_place_per", 0, false) / 100);
                $tp = floatval(se($row, "third_place_per", 0, false) / 100);
                $reward = (int)se($row, "current_reward", 0, false);
                $name = se($row, "name", "-", false);
                //calc rewards
                $fpr = ceil($reward * $fp);
                $spr = ceil($reward * $sp);
                $tpr = ceil($reward * $tp);
                $comp_id = se($row, "id", -1, false);

                try {
                    //retrieving top three scores
                    $r = get_top_scores_for_comp($comp_id, 3);
                    if ($r) {

                        $atleastOne = false;
                        foreach ($r as $index => $row) {
                            //looping through top scorers array and award credits to winners
                            $aid = se($row, "user_id", -1, false);
                            $score = se($row, "score", 0, false);
                            $user_id = se($row, "user_id", -1, false);
                            if ($index == 0) {
                                if (give_credits($aid, $fpr, "won-comp")) {
                                    $atleastOne = true;
                                }
                                error_log("User $user_id First place in $name with score of $score");
                            } else if ($index == 1) {
                                if (give_credits($aid, $spr, "won-comp")) {
                                    $atleastOne = true;
                                }
                                error_log("User $user_id Second place in $name with score of $score");
                            } else if ($index == 2) {
                                if (give_credits($aid, $tpr, "won-comp")) {
                                    $atleastOne = true;
                                }
                                error_log("User $user_id Third place in $name with score of $score");
                            }
                        }
                        if ($atleastOne) {
                            array_push($calced_comps, $comp_id);
                            //updating calculated competitions
                        }
                    } else {
                        error_log("No eligible scores");
                    }
                } catch (PDOException $e) {
                    error_log("Getting winners error: " . var_export($e, true));
                }
            }
        } else {
            error_log("No competitions ready");
        }
    } catch (PDOException $e) {
        error_log("Getting Expired Comps error: " . var_export($e, true));
    }
    //closing calced comps
    if (count($calced_comps) > 0) {
        $query = "UPDATE Competitions set did_calc = 1, paid_out = 1 WHERE id in ";
        $query .= "(" . str_repeat("?,", count($calced_comps) - 1) . "?)";
        error_log("Close query: $query");
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($calced_comps);
            $updated = $stmt->rowCount();
            error_log("Marked $updated comps complete and calced");
        } catch (PDOException $e) {
            error_log("Closing valid comps error: " . var_export($e, true));
        }
    } else {
        error_log("No competitions to calc");
    }
    //close invalid comps
    $stmt = $db->prepare("UPDATE Competitions set did_calc = 1 WHERE expires <= CURRENT_TIMESTAMP() AND current_participants < min_participants AND did_calc = 0");
    try {
        $stmt->execute();
        $rows = $stmt->rowCount();
        error_log("Closed $rows invalid competitions");
    } catch (PDOException $e) {
        error_log("Closing invalid comps error: " . var_export($e, true));
    }
    error_log("Done calc winners");
}