<?php
$sql = mysql_query("SELECT title FROM admin");
$title = mysql_result($sql, 0);
?>
Settings<br>
<br>
<a href="?scm=log">Log</a><br>
<a href="?scm=updates">Updates</a><br>
<a href="?scm=motd">Message Of The Day</a><br><br>
Naming:
<form action="<?php echo $path;?>changes/settings.php" method="post" >
Title:<input type="text" name="title" value="<?php echo $title; ?>"/><br>
<input type="Submit" />
</form><br><br>
Styles:<br>
fontsize<br>
font type<br>
font color<br>
background color<br>
div color<br>
border<br>