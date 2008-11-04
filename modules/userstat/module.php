<?php
if(!$_SESSION["admin"] == "chickens"){
$privledges =$_SESSION['admin']; 
echo "<p>Welcome, ".$_SESSION['username']." <br>You have ".$privledges." privledges<br>";
if($privledges == "admin"){
echo '<a href="plugins/admin/?scm=home" target="_blank">Admin Interface</a>';
}
echo "<br><br></p>";
}else{   
	echo ("
	<form action='content/login.php' method='post'>Username:<br>
	<input class='textfield' size='13' name='Username' type='text'><br><br>Password:<br>
	<input class='textfield' size='13' name='Passwd' type='password'><br<br>
	<input class='button' type='submit' value='Login!'>
	</form>
	
		");
}
?>
