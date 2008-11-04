<?php

session_start();
if(!$_SESSION["admin"]){exit;}
include "../../../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$nr = mysql_query("SELECT * FROM users");
$num = mysql_num_rows($nr);
$id = $num;
$pass = md5($_POST["pass"]);
mysql_query("INSERT INTO `users` SET first='".$_POST[first]."', username='".$_POST[username]."', last='".$_POST[last]."', permissions='".$_POST[permissions]."', passwd='".$pass."', email='".$_POST[email]."', location='".$_POST[location]."', timezone='".$_POST[timezone]."', id='".$id."' ") or die("sql");
header("Location: ../index.php?scm=userman");
?>