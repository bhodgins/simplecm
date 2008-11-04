<?php

session_start();
if(!$_SESSION["admin"]){exit;}
include "../../../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$title =$_POST["title"];
mysql_query("UPDATE admin SET title='".$title."'");
header("Location: ../?scm=settings");
?>
