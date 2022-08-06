<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
//IMPORTANT: this is required for the execute to set the limit variables properly
//otherwise it'll convert the values to a string and the query will fail since LIMIT expects only numerical values and doesn't cast
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//END IMPORTANT
//handle join

$per_page = 10;
$user_id = get_user_id();
$params = [];

paginate("SELECT count(1) as total FROM User_Competitions WHERE user_id = $user_id");
//handle page load

$query = "SELECT Competitions.id, `name`, min_participants, current_participants, current_reward, expires, created_by, min_score, join_fee, IF(competition_id is null, 0, 1) as joined, IF(expires > current_timestamp(), 0, 1) as expired, CONCAT(first_place_per,'% - ', second_place_per, '% - ', third_place_per, '%') as place FROM Competitions
JOIN (SELECT * FROM User_Competitions WHERE user_id = :uid) as uc ON uc.competition_id = Competitions.id ORDER BY expires desc";
    $page = se($_GET, "page", 1, false); //default to page 1 (human readable number)
    $per_page = 10; //how many items to show per page (hint, this could also be something the user can change via a dropdown or similar)
    $offset = ($page - 1) * $per_page;
    $query .= " LIMIT :offset, :count";
    $params[":uid"] = $user_id;
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;

    $stmt = $db->prepare($query);
    //we'll want to convert this to use bindValue so ensure they're integers so lets map our array
    foreach ($params as $key => $value) {
        $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $type);
    }
    $params = null;


$results = [];
try {
    $stmt->execute($params);
    $r = $stmt->fetchAll();
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("There was a problem fetching competitions, please try again later", "danger");
    error_log("List competitions error: " . var_export($e, true));
}
?>
<div class="container-fluid">
    <h1>My Competitions</h1>
    <table class="table">
        <thead>
            <th>Title</th>
            <th>Participants</th>
            <th>Reward</th>
            <th>Min Score</th>
            <th>Expires</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php if (count($results) > 0) : ?>
                <?php foreach ($results as $row) : ?>
                    <tr>
                        <td><?php se($row, "name"); ?></td>
                        <td><?php se($row, "current_participants"); ?>/<?php se($row, "min_participants"); ?></td>
                        <td><?php se($row, "current_reward"); ?><br>Payout: <?php se($row, "place", "-"); ?></td>
                        <td><?php se($row, "min_score"); ?></td>
                        <?php if (se($row, "expired", 0, false)) : ?>
                            <td>Expired</td>
                        <?php else : ?>
                            <td><?php se($row, "expires", "-"); ?></td>
                        <?php endif; ?>
                        <td>
                            <a class="btn btn-secondary" href="view_competition.php?id=<?php se($row, 'id'); ?>">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="100%">No active competitions</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
</div>
<?php 
require(__DIR__."/../../partials/flash.php");
?>