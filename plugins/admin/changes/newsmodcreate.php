<?php
session_start();
if(!$_SESSION["admin"]){exit;}
include "../../../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$data = $_POST["data"];
$user = $_POST["user"];
$sub = $_POST["subject"];
$ni = $_POST["news_id"];
$date = $_POST["date"];
mysql_query("INSERT INTO `news` SET Content='".$data."', news_id='".$ni."', Author='".$user."', Title='".$sub."', DateAdded='".$date."'");
header("Location: ../index.php?scm=newsmod");
?>