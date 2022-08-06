<?php

/** Gets the top 10 scores for valid durations (day, week, month, lifetime) */
function get_top_10($duration = "day")
{
    $d = "day";
    //be very careful passing in a variable directly to SQL, I ensure it's a specific value from the in_array() above
    //Note: This is residual from using Option 1 and INTERVAL to generate the date offsets
    //but it's still good to keep here
    if (in_array($duration, ["day", "week", "month", "lifetime"])) {
        //variable is safe
        $d = $duration;
    }
    $db = getDB();
    $query = "SELECT user_id,username, score, Scores.created from Scores join Users on Scores.user_id = Users.id";
    if ($d === "day") {

        $query .= " WHERE Scores.created >= addtime(CURDATE(), '00:00:00') AND Scores.created <= addtime(CURDATE(), '23:59:59')";
    } else if ($d === "week") {
        //https://stackoverflow.com/a/42540446
        $query .= " WHERE 
        Scores.created >= addtime(date_add(curdate(), interval  -WEEKDAY(curdate()) day), '00:00:00')
        AND
        Scores.created <= addtime(date_add(date_add(curdate(), interval  -WEEKDAY(curdate())-1 day), interval 7 day), '23:59:59')";
    } else if ($d === "month") {
        //https://www.mysqltutorial.org/mysql-last_day/
        $query .= " WHERE 
        Scores.created >=  addtime(dATE_SUB(curdate(),INTERVAL DAYOFMONTH(curdate())-1 DAY), '00:00:00')
        AND
        Scores.created <= addtime(LAST_DAY(CURDATE()), '23:59:59')";
    }
    //remember to prefix any ambiguous columns (Users and Scores both have created, modified, and id columns)
    error_log("get top 10 query: $query");
    $stmt = $db->prepare($query);
    $results = [];
    try {
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log("Error fetching scores for $d: " . var_export($e->errorInfo, true));
        flash("Error fetching top 10 list", "danger");
    }
    return $results;
}

function get_best_score($user_id)
{
    $query = "SELECT score from Scores WHERE user_id = :id ORDER BY score desc LIMIT 1";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $user_id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return (int)se($r, "score", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching best score for user $user_id: " . var_export($e->errorInfo, true));
        flash("Error looking up best score", "danger");
    }
    return 0;
}


function get_latest_scores($user_id, $limit = 10)
{
    $params = [];
    //I'm capping my limit to 1-50
    if ($limit < 1 || $limit > 50) {
        $limit = 10;
    }
    $query = "SELECT score, created from Scores where user_id = :id ORDER BY created desc ";
    $page = se($_GET, "page", 1, false); //default to page 1 (human readable number)
    $per_page = 10; //how many items to show per page (hint, this could also be something the user can change via a dropdown or similar)
    $offset = ($page - 1) * $per_page;
    $query .= " LIMIT :offset, :count";
    $params[":id"] = $user_id;
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;

    //newest of the same score is ranked higher
    $db = getDB();
    //IMPORTANT: this is required for the execute to set the limit variables properly
    //otherwise it'll convert the values to a string and the query will fail since LIMIT expects only numerical values and doesn't cast
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //END IMPORTANT

    $stmt = $db->prepare($query); //dynamically generated query
    //we'll want to convert this to use bindValue so ensure they're integers so lets map our array
    foreach ($params as $key => $value) {
        $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $type);
    }
    $params = null;
    try {
        $stmt->execute($params);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            return $r;
        }
    } catch (PDOException $e) {
        error_log("Error getting latest $limit scores for user $user_id: " . var_export($e->errorInfo, true));
        flash("Error getting latest scores", "danger");
    }
    return [];
}