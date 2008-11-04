Add a user
<form method="Post" action="<?php echo $path; ?>changes/adduserman.php" >
First:<input type="text" name="first"><br>
Last:<input type="text" name="last"><br>
Username:<input type="text" name="username"><br>
location:<input type="text" name="location"><br>
timezone:<input type="text" name="timezone"><br>
email:<input type="text" name="email"><br>
pass:<input type="password" name="pass"><br>
again:<input type="password" name="gutterball"><br>
Permissions:<select name="permissions"><option value="admin">admin</option><option value="user">user</option><option value="guest">guest</option><option value="moderator">moderator</option></select><br>
<input type="submit" name="Submit" value="Submit" >
