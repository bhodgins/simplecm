Edit a User<br><br>

<form method="Post" action="<?php echo $path; ?>changes/edituserman.php" >
<?php
$query = mysql_query("select * from users where id='".$_GET[id]."'");
while ($row = mysql_fetch_array($query, MYSQL_NUM)) {
if($row[3] == "admin"){
$adminyes = "SELECTED";
}
if($row[3] == "user"){
$useryes = "SELECTED";
}
if($row[3] == "guest"){
$guestyes = "SELECTED";
}
if($row[3] == "moderator"){
$moderatoryes = "SELECTED";
}
echo 'First:<input type="text" name="first" value="'.$row[4].'"><br>
Last:<input type="text" name="last" value="'.$row[5].'"><br>
Username:<input type="text" name="username" value="'.$row[0].'"><br>
location:<input type="text" name="location" value="'.$row[6].'"><br>
timezone:<input type="text" name="timezone" value="'.$row[7].'"><br>
email:<input type="text" name="email" value="'.$row[8].'"><br>
Permissions:<select name="permissions"><option value="admin" '.$adminyes.' >admin</option><option value="user" '.$useryes.' >user</option><option value="guest" '.$guestyes.' >guest</option><option value="moderator" '.$moderatoryes.' >moderator</option></select><br><input type="hidden" name="id" value="'.$_GET[id].'">';
}
?>

<input type="submit" name="Submit" value="Submit" >
</form>
