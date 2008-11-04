Change Password<br>
<form method="post" action="<?php echo $path; ?>changes/passuserman.php">
Password<input type="password" name="pass" ><br>
<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" >
<input type="submit">
</form>