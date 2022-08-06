<?php
require_once(__DIR__ . "/../../../partials/nav.php");
is_logged_in(true);
$db = getDB();
//handle join
if (isset($_POST["join"])) {
    $user_id = get_user_id();
    $comp_id = se($_POST, "comp_id", 0, false);
    $cost = se($_POST, "join_fee", 0, false);
    join_competition($comp_id, $user_id, $cost);
}

$id = se($_GET, "id", -1, false);
if ($id < 1) {
    flash("Invalid competition", "danger");
    redirect("list_competitions.php");
}
if (isset($_POST["name"]) && !empty($_POST["name"])){
    $query = "UPDATE Competitions set `name` = :nme, current_reward = :current_reward, min_score = :min_score, min_participants = :min_participants, join_fee = :join_fee, expires = :expires, first_place_per = :frst, second_place_per = :scnd, third_place_per = :thrd ";
    $name = se($_POST, "name", null, false);
    $current_reward = se($_POST, "current_reward", null, false);
    $min_score = se($_POST, "min_score", null, false);
    $min_participants = se($_POST, "min_participants", null, false);
    $join_fee = se($_POST, "join_fee", null, false);
    $expires = se($_POST, "expires", null, false);
    $first_place_per = se($_POST, "first_place_per", null, false);
    $second_place_per = se($_POST, "second_place_per", null, false);
    $third_place_per = se($_POST, "third_place_per", null, false);
    $params = [":nme" => $name, ":current_reward" => $current_reward, ":min_score" => $min_score, ":min_participants" => $min_participants,":join_fee" => $join_fee,":expires" => $expires,":frst" => $first_place_per,":scnd" => $second_place_per,":thrd" => $third_place_per];


    $query .= "WHERE id = $id";
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        flash("Competition Saved", "success");
    } catch (Exception $e) {
            //TODO come up with a nice error message
            flash("Invalid field criteria for update", 'danger');
    }
}
//handle page load
$stmt = $db->prepare("SELECT Competitions.id , `name`, min_participants, current_participants, current_reward, expires, created_by, min_score, join_fee, IF(competition_id is null, 0, 1) as joined,paid_out as paid,  CONCAT(first_place_per,'% - ', second_place_per, '% - ', third_place_per, '%') as place FROM Competitions
LEFT JOIN (SELECT * FROM User_Competitions where User_Competitions.user_id = :uid) as t on t.competition_id = Competitions.id WHERE Competitions.id = :cid");
$row = [];
$comp = "";
try {
    $stmt->execute([":uid" => get_user_id(), ":cid" => $id]);
    $r = $stmt->fetch();
    if ($r) {
        $row = $r;
        $comp = se($r, "name", "N/A", false);
    }
} catch (PDOException $e) {
    flash("There was a problem fetching competitions, please try again later", "danger");
    error_log("List competitions error: " . var_export($e, true));
}
//$scores = get_top_scores_for_comp($id);
?>
<div class="container-fluid">
    <h1>View Competition: <?php se($comp); ?></h1>
    <table class="table text-light">
        <thead>
            <th>Title</th>
            <th>Participants</th>
            <th>Reward</th>
            <th>Min Score</th>
            <th>Expires</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php if (count($row) > 0) : ?>
                <td><?php se($row, "name"); ?></td>
                <td><?php se($row, "current_participants"); ?>/<?php se($row, "min_participants"); ?></td>
                <td><?php se($row, "current_reward"); ?><br>Payout: <?php se($row, "place", "-"); ?></td>
                <td><?php se($row, "min_score"); ?></td>
                <td><?php se($row, "expires", "-"); ?></td>
                <td>
                    <?php if (se($row, "joined", 0, false)) : ?>
                        <button class="btn btn-primary disabled" onclick="event.preventDefault()" disabled>Already Joined</button>
                    <?php else : ?>
                        <form method="POST">
                            <input type="hidden" name="comp_id" value="<?php se($row, 'id'); ?>" />
                            <input type="hidden" name="cost" value="<?php se($row, 'join_cost', 0); ?>" />
                            <input type="submit" name="join" class="btn btn-primary" value="Join (Cost: <?php se($row, "join_cost", 0) ?>)" />
                        </form>
                    <?php endif; ?>
                </td>
            <?php else : ?>
                <tr>
                    <td colspan="100%">No active competitions</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php
    //$scores is defined above
    $title = $comp . " Top Scores";
    $comp_id = $id;
    $duration = "competition";
    include(__DIR__ . "/../../../partials/scores_table.php");
    ?>
    <?php 

    if(has_role("Admin") && se($row, "paid", 0, false)  ==0) : ?>
        <div class="container-fluid">
    <h1>Update Competition</h1>
    <form  onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label for="Name" class="form-label">Title</label>
            <input id="name" name="name" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="reward" class="form-label">Current Reward</label>
            <input id="reward" type="number" name="current_reward" class="form-control" placeholder=">= 1" min="1" />
        </div>
        <div class="mb-3">
            <label for="ms" class="form-label">Min. Score</label>
            <input id="ms" name="min_score" type="number" class="form-control" placeholder=">= 1" min="1" />
        </div>
        <div class="mb-3">
            <label for="mp" class="form-label">Min. Participants</label>
            <input id="mp" name="min_participants" type="number" class="form-control" placeholder=">= 3" min="3" />
        </div>
        <div class="mb-3">
            <label for="jf" class="form-label">Join Cost</label>
            <input id="jf" name="join_fee" type="number" class="form-control" placeholder=">= 0" min="0" />
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Expiration (Datetime)</label>
            <input id="expires" name="expires" type="text" class="form-control" placeholder="0000-00-00 00:00:00"/>
        </div>
        <div class="mb-3">
            <label for="fp" class="form-label">1st Place Payout</label>
            <input type="number" id="fp" name="first_place_per" class="form-control">
            <label for="sp" class="form-label">2nd Place Payout</label>
            <input type="number" id="sp" name="second_place_per" class="form-control">
            <label for="tp" class="form-label">3rd Place Payout</label>
            <input type="number" id="tp" name="third_place_per" class="form-control">

        </div>
        <div class="mb-3">
            <input type="submit" value="Update Competition" class="btn btn-primary" />
        </div>
    </form>
    <script>
        function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        let isValid = true;
        const first = form.fp.value;
        const second = form.sp.value;
        const third = form.tp.value;
        if (parseInt(first) + parseInt(second)+parseInt(third) !=100) {
            flash("Competition payout must equal 100", "warning");
            isValid = false;
        }
        return isValid;
    }
    </script>
</div>
    
    <?php endif; ?>
</div>
<?php
require(__DIR__ . "/../../../partials/flash.php");
?>
