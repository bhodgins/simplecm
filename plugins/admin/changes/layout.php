<?php
session_start();
if(!$_SESSION["admin"]){exit;}
include "../settings.php";
$preleft = $_POST["leftmod"];
$left = stripslashes($preleft);
$preright = $_POST["rightmod"];
$right = stripslashes($preright);
$pretheme = $_POST["deftheme"];
$theme = stripslashes($pretheme);
$fileleft = $fspath . "/include/modules_left";
file_put_contents($fileleft, $left);
$fileright = $fspath . "/include/modules_right";
file_put_contents($fileright, $right);
$filetheme = $fspath . "/include/default_theme";
file_put_contents($filetheme, $theme);
?>
<meta http-equiv="REFRESH" content="1;url=../?scm=layout">

