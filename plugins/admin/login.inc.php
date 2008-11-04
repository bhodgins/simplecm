<?php
echo "You are not logged in, Please Login to continue<br>";
echo "<form action=login.php method=post >";
echo "User:<input type='text' name='username' /><br>";
echo 'Pass:<input type="password" name="passwd" /><br>';
if($_GET["scm"]){
$scm = $_GET["scm"];
echo '<input type="hidden" name="scm" value="'.$scm.'" />';
}
echo '<input type="submit" name="Submit" value="Submit" /><br>';
#echo '<br>WARNING: any suspicious login activity will be logged and sent to the admin';
echo "</form>";
?>