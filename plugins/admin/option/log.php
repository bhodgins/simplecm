<?php
$query = mysql_query("select * from admin_log ORDER BY date DESC");
echo "<table>";
while ($row = mysql_fetch_array($query, MYSQL_NUM)) {
    print("<tr><td>".$row[1]."</td><td>".$row[0]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td> ".$row[2]."</td><td>");  
}