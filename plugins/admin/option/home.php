Welcome to the SimpleCM Admin Interface!!!!<br>
<br>
<br><br>
<?php
$motdsql = mysql_query("select * from admin_motd");
$id = mysql_num_rows($motdsql);
$id--;
$motdid = rand(0, $id);
$motdquery = mysql_query("select * from admin_motd");
echo mysql_result($motdquery, $motdid,0);
?>
<meta http-equiv="REFRESH" content="300">
