<?php
//TODO 1: require db.php
require_once(__DIR__ . "/db.php");
//This is going to be a helper for redirecting to our base project path since it's nested in another folder
//This MUST match the folder name exactly
$BASE_PATH = '/Project';
//TODO 4: Flash Message Helpers
require(__DIR__ . "/flash_messages.php");

//require safer_echo.php
require(__DIR__ . "/safer_echo.php");
//TODO 2: filter helpers
require(__DIR__ . "/sanitizer.php");

//TODO 3: User helpers
require(__DIR__ . "/user_helpers.php");

//TODO 3: User helpers
require(__DIR__ . "/save_data.php");

//Score Helpers
require(__DIR__ . "/score_helpers.php");

//credit reset
require(__DIR__ . "/credits_helpers.php");

//competitions
require(__DIR__ . "/competition_helpers.php");

//paginate
require(__DIR__ . "/paginate.php");




//duplicate email/username
require(__DIR__ . "/duplicate_user_details.php");
//reset session
require(__DIR__ . "/reset_session.php");

//redirect for buffer issues
require(__DIR__ . "/redirect.php");

require(__DIR__ . "/get_url.php");
?>