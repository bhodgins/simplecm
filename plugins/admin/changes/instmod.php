<?php
session_start();
if(!$_SESSION["admin"]){exit;}
include "../../../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$modname = $_POST["modname"];
$option = $_POST["option"];
mysql_query("INSERT INTO `admin_mod` SET modname='".$modname."', optionfile='".$option."' ") or die(mysql_error());
header("Location: ../index.php?scm=lstmod");
?>