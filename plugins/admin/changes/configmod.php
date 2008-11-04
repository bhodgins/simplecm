<?php
session_start();
if(!$_SESSION["admin"]){exit;}
include "../settings.php";
$custmod = $_POST["custmod"];
$data2 = $_POST["data"];
$data = stripslashes($data2);
$file = $fspath . "/modules/".$custmod."/config.php";
file_put_contents($file, $data);
?>
<meta http-equiv="REFRESH" content="1;url=../?scm=configmod&custmod=<?php echo $custmod;?>">
