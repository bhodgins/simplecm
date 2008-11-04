<?php
include "../../include/config-global.php";
mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
mysql_select_db($DB_DBNAME);
$email = $_POST["email"];
$name = $_POST["name"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$mr = mysql_query("SELECT * FROM contact") or die("No Contact Table");
$contact_id = mysql_num_rows($mr);
$sql = "INSERT INTO contact SET email='".$email."', name='".$name."', subject='".$subject."', message='".$message."', contact_id='".$contact_id."' ";
mysql_query($sql) or die("filty mexicans");\
header("Location: ../../?section=news");
