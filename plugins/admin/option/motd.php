Message Of The Day<br>
<br>Customize the motd settings
add a new motd:<br>
<form action="changes/motd.php" method="post">
<?php
$motdsql = mysql_query("select * from admin_motd");
$id = mysql_num_rows($motdsql);
$id++;
echo "<input type='hidden' name='id' value='".$id."' />";
?>
<input type="text" name="motd" /><br>
<input type="submit" />
</form>

