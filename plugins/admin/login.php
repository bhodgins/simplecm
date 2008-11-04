<?php
$user = $_POST["username"];
$pass = $_POST["passwd"];
include "../../include/config-global.php";
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
if(md5($pass) == $mysqlpass && $user == $mysqluser && $level == "admin" ){
session_start();
$_SESSION["admin"] = "admin";
$_SESSION["username"] = $mysqluser;
if($_POST["scm"]){
$scm = $_POST["scm"];
header("Location:index.php?scm=".$scm."");}else{header("Location:index.php?scm=home");}
}elseif(md5($pass) == $mysqlpass && $user == $mysqluser && $level == "user" ){
session_start();
$_SESSION["admin"] = "user";
$_SESSION["username"] = $mysqluser;
if($_POST["scm"]){
$scm = $_POST["scm"];
header("Location: /index.php");}else{header("Location: /index.php");}
}elseif(md5($pass) == $mysqlpass && $user == $mysqluser && $level == "guest" ){
session_start();
$_SESSION["admin"] = "guest";
$_SESSION["username"] = $mysqluser;
if($_POST["scm"]){
$scm = $_POST["scm"];
header("Location: /index.php");}else{header("Location: /index.php");}
}else{header("Location:index.php?scm=home");}