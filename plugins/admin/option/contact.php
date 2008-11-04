View all messages:<br><br>
<?php
$sql = "SELECT * FROM contact";
$query = mysql_query($sql);
while ($row = mysql_fetch_assoc($query)) {
echo "Name:";
echo $row['name'];
echo "<br>Email:";
echo $row['email'];
echo "<br>Subject:";
echo $row['subject'];
echo "<br>Message:";
echo $row['message'];
echo "<br>Message Number:";
echo $row['contact_id'];
echo "<br><br>";

		}

