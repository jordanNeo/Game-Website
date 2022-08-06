<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>1-Machine Online Arcade</h1>
<a href="<?php echo get_url('snake.php'); ?>" class="gamelink">Snake</a>
<div class="description"><p>Welcome to the best online arcade! Due to shortages of time and work ethic we only have one very fun game available. <br>
Snake! In this online adventure you will live as a snake, moving around the map to collect food to survive! <br>
Be careful though, you are surrounded by an electric fence that will kill you if you touch it...
</p></div>
<?php

    /*if (is_logged_in(true)) {
    //echo "Welcome home, " . get_username();
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
    }*/
    ?>

    <?php
    //this is day which is the default
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "week";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "month";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "lifetime";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>