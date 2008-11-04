<?php
session_start();
if(!$_SESSION["admin"]){exit;}
include "../../../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$data = $_POST["rte1"];
$ni = $_POST["news_id"];
mysql_query("UPDATE `news` SET Content='".$data."' WHERE news_id='".$ni."'");
header("Location: ../index.php?scm=newsmod");
?>