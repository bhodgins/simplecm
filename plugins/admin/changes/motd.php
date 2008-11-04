<?php
session_start();
if(!$_SESSION["admin"]){exit;}
include "../../../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$motd = $_POST["motd"];
$id = $_POST["id"];
mysql_query("INSERT INTO `admin_motd` SET motd='".$motd."', id='".$id."' ") or die(mysql_error());
header("Location: ../index.php?scm=motd");
?>