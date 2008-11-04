<?php

session_start();
if(!$_SESSION["admin"]){exit;}
include "../../../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$id = $_POST["id"];

$pass = md5($_POST["pass"]);
mysql_query("UPDATE `users` SET passwd='".$pass."' WHERE id='".$id."' ") or die("sql");
header("Location: ../index.php?scm=userman");
?>