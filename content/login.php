<?php
$user = $_POST["Username"];
$pass = $_POST["Passwd"];
include "../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$query = 'SELECT * FROM users WHERE username="'.$user.'"';

$res = mysql_query($query);
while($row = mysql_fetch_assoc($res)) {
$mysqlpass = $row["passwd"];
$mysqluser = $row["username"];
$level = $row["permissions"];
$id = $row["id"];
   }
if(md5($pass) == $mysqlpass && $user == $mysqluser ){
session_start();
$_SESSION["admin"] = $level;
$_SESSION["username"] = $mysqluser;
if($_POST["scm"]){
header("Location: ../index.php?");
}else{header("Location: ../index.php?");}
