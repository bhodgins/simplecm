<?php 
$sqly = mysql_query("select * from news");
$news_id = mysql_num_rows($sqly);
$news_id++;
?>
<form method="post" action="changes/newsmodcreate.php" name="create">
Subject:<br><input name="subject"><br>
Content:<br><textarea cols="50" rows="10" name="data"></textarea><br>
<input type="hidden" name="date" value="<?php echo date('Y-m-d g:i:s'); ?>" />
<input type="hidden" name="user" value="<?php echo $_SESSION["username"]; ?>" />
<input type="hidden" name="news_id" value="<?php echo $news_id;?>" />
<input type="submit" value="post"></form>
