<?php
$log = "true";
if($log == "true"){
//perform logging functions

$user = $_SESSION["username"];

$scm = $_GET["scm"];

$ip = $_SERVER["REMOTE_ADDR"];

$useragent = $_SERVER["HTTP_USER_AGENT"];

$date = date('Ymd_h:i:s');

mysql_query("INSERT INTO `admin_log`(`scm`, `user`, `useragent`, `date`, `ip` ) VALUES('".$scm."', '".$user."', '".$useragent."', '".$date."', '".$ip."')");
}