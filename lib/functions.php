<?php
//TODO 1: require db.php
require_once(__DIR__ . "/db.php");
//This is going to be a helper for redirecting to our base project path since it's nested in another folder
//This MUST match the folder name exactly
$BASE_PATH = '/Project';
<<<<<<< HEAD
=======
//we moved the flash require higher so following functions have access to it
>>>>>>> d5d4f5e55934c0e984b6f049317e7d8b11a472cc
//TODO 4: Flash Message Helpers
require(__DIR__ . "/flash_messages.php");

//require safer_echo.php
require(__DIR__ . "/safer_echo.php");
//TODO 2: filter helpers
require(__DIR__ . "/sanitizer.php");

//TODO 3: User helpers
require(__DIR__ . "/user_helpers.php");


//duplicate email/username
require(__DIR__ . "/duplicate_user_details.php");
//reset session
require(__DIR__ . "/reset_session.php");
<<<<<<< HEAD

require(__DIR__ . "/get_url.php");
=======
>>>>>>> d5d4f5e55934c0e984b6f049317e7d8b11a472cc
?>