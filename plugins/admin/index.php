<?php
if(!file_exists("settings.php")){echo "Your admin interface is not configured correctly"; exit;}
# extends pluginSystem
session_start();
if($_SESSION["admin"] == "admin"){
$loggedin = yes;
#if($_SESSION["username"] !== "admin"){ echo "Under Construction"; exit;}
}

include "settings.php";
include $config;
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
include "log.php";
$sql = mysql_query("select * from admin");?>
<title><?php echo mysql_result($sql, 0,5);?></title>
<div id="waiver">Developed by the Georgix team as part of the SimpleCM Project :: SCMAI <?php echo $ver; ?></div>
<link rel="stylesheet" type="text/css" href="admin.css" />
<div id="top">
<h1 align=center>SimpleCM Admin Interface</h1><p align=center>
<?php 
echo mysql_result($sql, 0,5);
?>&nbsp; &nbsp;<?php if($_GET["scm"] == "logout"){
echo '<a href="?scm=login">Login</a></p>';
}elseif($loggedin){
echo '<a href="?scm=logout">Logout</a></p>';
}else{
echo '<a href="?scm=login">Login</a></p>';
}?></div>
<div id="left">
<?php 
if($loggedin){
include "stamenu.php";
}elseif($_GET["scm"] == "logout"){echo "You are currently Logged Out";
}else{
echo "<p>You are not allowed to navigate until you log in</p>";
}
?>
</div>
<div id="data">
<?php
if(!$loggedin){include "login.inc.php"; exit;}
$scm = $_GET["scm"];
if(file_exists("option/".$scm.".php")){

include "option/".$scm.".php";

}elseif($scm == "login"){

include "option/home.php";

}else{
echo "The option ".$scm." does not exist<br> redirecting to home page<br><meta http-equiv='REFRESH' content='4;url=index.php?scm=home'>";
}
?>
</div>
