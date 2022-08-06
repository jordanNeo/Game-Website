<?php
require_once(__DIR__ . "/../../../lib/functions.php");
error_log("save_score received data: " . var_export($_REQUEST, true));

//handle the potentially incoming post request
$score = (int)se($_POST, "score", 0, false);
$user_id = get_user_id();

//if data is valid pass it to save_score

if ($score > 0 ) {
    save_score($score);
    
}
//This demo will be setup to demonstrate a front end game
//vs one where the logic is mostly done on the back end
function save_score($score)
{
    $response = ["status" => 400, "message" => "Unhandled error"];
    http_response_code(400);
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
    if (is_logged_in()) {

        //todo save
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Scores(score, user_id) VALUES (:s, :uid)");
        try {
            $stmt->execute([":s" => $score, ":uid" => get_user_id()]);
            $response["status"] = 200;
            $response["message"] = "Your score has been saved";
            http_response_code(200);
        } catch (PDOException $e) {
            error_log("Error saving score: " . var_export($e, true));
            $response["message"] = "Error saving score details";
        }
        $credits = 30;
        $reason = "Hey you tried";
        if ($score > 5) {$credits = 2; $reason = "Score over 5";}
        if ($score > 10) {$credits = 3; $reason = "Score over 10";}
        give_credits(get_user_id(), $credits, $reason);
    } else {
        $response["message"] = "You must be logged in to save your score";
        http_response_code(403);
    }
        echo json_encode($response);
        die();
}

