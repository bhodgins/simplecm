Module List<br><?php
$query = mysql_query("select * from admin_mod");
while ($row = mysql_fetch_array($query, MYSQL_NUM)) {
    print(" <a href='?scm=".$row[5]."'>".$row[0]."</a>  ".$row[1]." <br>");  
}