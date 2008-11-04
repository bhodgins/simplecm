<?php

session_start();
if(!$_SESSION["admin"]){exit;}
include "../../../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
mysql_query("UPDATE `users` SET first='".$_POST[first]."', username='".$_POST[username]."', last='".$_POST[last]."', permissions='".$_POST[permissions]."', email='".$_POST[email]."', location='".$_POST[location]."', timezone='".$_POST[timezone]."' WHERE id='".$_POST[id]."'") or die("sql");
header("Location: ../index.php?scm=userman");
?>