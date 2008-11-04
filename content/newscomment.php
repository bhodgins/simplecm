<?php
include "../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$data = $_POST["content"];
$user = $_POST["email"];
$sub = $_POST["subject"];
$ni = $_POST["news_id"];
$date = date('Y-m-d g:i:s');
mysql_query("INSERT INTO news SET Content='".$data."', news_id='".$ni."', Author='".$user."', Title='".$sub."', DateAdded='".$date."', comment='yes', active='yes'")or die(mysql_error());
header("Location: ../index.php?section=news");
