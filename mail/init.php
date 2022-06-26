<?php
ob_start();
session_start();
error_reporting(E_ALL);
date_default_timezone_set("Asia/Kolkata");

if(!defined("BASE_PATH")) //check if constant exists, else redefine it
 define("BASE_PATH","");
 //define("BASE_PATH","../../../");

define("TABLE_NAME_SEAIR","sidd_temp");
define("AWS_DB_NAME","sidd_temp");
define("AWS_VERSION","latest");
define("AWS_REGION","ap-southeast-1");
define("AWS_ACCESS_KEY","AKIAITKOVUIUKWIHGTEQ");
define("AWS_SECRET_KEY","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");



define("DIR_DBCONFIG",BASE_PATH."protected/");
//echo "sidd";
//return;
require_once(DIR_DBCONFIG."db-config.php");
require_once(DIR_DBCONFIG."database-tables.php");

//initialize all APP configurations and functions
//require_once(BASE_PATH."inc/config.php");
//require_once(DIR_INCLUDES."functions.php");

//$_SESSION['userId']='1';
$user_id_global = "";
if(isset($_SESSION["userId"])) {
    $user_id_global = $_SESSION["userId"];
}

?>