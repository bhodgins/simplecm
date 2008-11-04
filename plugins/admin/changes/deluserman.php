<?php

session_start();
if(!$_SESSION["admin"]){exit;}
include "../../../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$id = $_GET["id"];
mysql_query("DELETE FROM users WHERE id='".$id."'") or die("sql");
header("Location: ../index.php?scm=userman");
?>