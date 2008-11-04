<?php

	$intblock = 0;
	$BlockContent = null;
	$BlockAuthor = null;
	$BlockTitle = null;
	$BlockDate = null;
if($_GET["id"]){
$news_id = $_GET["id"];
$sql = "SELECT * FROM `news` WHERE  news_id='".$news_id."' AND active='yes'";
$res = mysql_query($sql, $db_cnct);
while ($block = mysql_fetch_assoc($res)) {
echo ("<div id='mod'>");
echo  $block["Title"];
echo "</div><br><div id='mod'>";
echo $block["Content"];
echo "<br><br>";            
if($block["comment"] == "yes"){
$who = "Commented on By: ";
}else{$who = "Posted By: ";}             
echo $who . $block['Author'] . " on " . $block['DateAdded'] . "</div><br><br>";
}
echo "<div id='mod'>Comment on this Post:";	
echo ("<form action='content/newscomment.php' method='post' >
	<br>Email:<br><input type='text' name='email' >
	<br>Subject:<br><input type='text' name='subject' >
	<br>Comment:<br><textarea name='content' ></textarea>
	<input type='hidden' name='news_id' value='$news_id' />
	<br><input type='Submit' value='Comment!'>
	</form></div>");																																	        


}else{
        $sql = "SELECT * FROM news WHERE comment='no' and active='yes' ORDER BY news_id DESC";
	        $res = mysql_query($sql, $db_cnct);

 while ($block = mysql_fetch_array($res)) {
$BlockTitle[$intblock] = $block["Title"];
 $BlockAuthor[$intblock] = $block["Author"];
$BlockContent[$intblock] = $block["Content"];
$BlockDate[$intblock] = $block["DateAdded"];
$BlockNum[$intblock] = $block["news_id"];
$intblock++; }

for ($Cycle = 0; $Cycle <= $intblock; $Cycle++)
{
 if (isset($BlockContent[$Cycle]))
{
echo ("<div id='mod'><a href='?section=news&id=$BlockNum[$Cycle]'>$BlockTitle[$Cycle]</a></div><br><div id='mod'>$BlockContent[$Cycle]<br><br>Posted by $BlockAuthor[$Cycle] on $BlockDate[$Cycle]</div><br><br>");
																			                    }
																					            }
}
?>
