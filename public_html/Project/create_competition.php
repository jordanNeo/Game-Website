<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
//save
if (isset($_POST["name"]) && !empty($_POST["name"])) {
    $cost = (int)se($_POST, "starting_reward", 0, false);
    $cost++;
    $cost += (int)se($_POST, "join_fee", 0, false);
    $name = se($_POST, "name", "N/A", false);
    $balance = get_credits(get_user_id());
    error_log($balance,0);
    if ($balance >= $cost) {
        $cost = $cost * -1;
        $db->beginTransaction();
        if (give_credits(get_user_id(),$cost, "create_comp")) {
            $_POST["created_by"] = get_user_id();
            $comp_id = save_data("Competitions", $_POST);
            if ($comp_id > 0) {
                if (add_to_competition($comp_id, get_user_id())) {
                    flash("Successfully created competition", "success");
                    $db->commit();
                } else {
                    $db->rollback();
                }
            } else {
                $db->rollback();
            }
        } else {
            flash("There was a problem deducting points", "warning");
            $db->rollback();
        }
    } else {
        flash("You can't afford this right now", "warning");
    }
}
?>

<div class="container-fluid">
    <h1>Create Competition</h1>
    <form  onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label for="Name" class="form-label">Title</label>
            <input id="name" name="name" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="reward" class="form-label">Starting Reward</label>
            <input id="reward" type="number" name="starting_reward" class="form-control" onchange="updateCost()" placeholder=">= 1" min="1" />
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
            <input id="jf" name="join_fee" type="number" class="form-control" onchange="updateCost()" placeholder=">= 0" min="0" />
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (in Days)</label>
            <input id="duration" name="duration" type="number" class="form-control" placeholder=">= 3" min="3" />
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
            <input type="submit" value="Create Competition (Cost: 2)" class="btn btn-primary" />
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

        function updateCost() {
            let starting = parseInt(document.getElementById("reward").value || 0) + 1;
            let join = parseInt(document.getElementById("jf").value || 0);
            if (join < 0) {
                join = 1;
            }
            let cost = starting + join;
            document.querySelector("[type=submit]").value = `Create Competition (Cost: ${cost})`;
        }
    </script>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>