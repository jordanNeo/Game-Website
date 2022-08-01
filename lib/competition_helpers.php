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