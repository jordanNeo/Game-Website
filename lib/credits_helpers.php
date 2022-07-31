<?php
function refresh_user_credits()
{
    if (is_logged_in()) {
        $query = "UPDATE Users set credits = (SELECT IFNULL(SUM(diff), 0) from CreditHistory WHERE user_id = :src) where id = :src";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":src" => get_user_id()]);
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
        }
    }
}


function give_credits($user, $credits, $reason)
{
    //error_log($user ,0);

    //error_log(get_user_id() ,0);
    if ($credits != 0) {
        $query = "INSERT INTO CreditHistory (user_id, diff, reason) 
            VALUES (:usr, :diff, :r)";

        $params[":usr"] = $user;
        $params[":diff"] = $credits;
        $params[":r"] = $reason;
        

        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            //Only refresh the balance of the user if the logged in user's account is part of the transfer
            //this is needed so future features don't waste time/resources or potentially cause an error when a calculation
            //occurs without a logged in user
            if ($user == get_user_id()) {
                refresh_user_credits();
            }
            return true;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error giving credits", "danger");
        }
    }
    return false;
}