<?php
if(!$_POST["news_id"]){
$newsid="1";}else{$newsid = $_POST["news_id"];}

$query = mysql_query("select * from news where news_id='".$newsid."' ");
while ($row = mysql_fetch_assoc($query)) {
$data = $row["Content"];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<script language="JavaScript" type="text/javascript" src="../cbrte/html2xhtml.js"></script>
	<script language="JavaScript" type="text/javascript" src="../cbrte/richtext_compressed.js"></script>
</head>
<body>


<!-- START Demo Code -->
<a href="?scm=newsmodcreate" >Post a News Article</a>
<h3>News Module</h3><br>
<form action="<?php echo $path; ?>index.php?scm=newsmod" method="post"><select name="news_id"><option value="1" <?php if($newsid == "1"){echo "SELECTED";} ?>>1</option><option value="2" <?php if($newsid == "2"){echo "SELECTED";} ?>>2</option><option value="3" <?php if($newsid == "3"){echo "SELECTED";} ?>>3</option><option value="4" <?php if($newsid == "4"){echo "SELECTED";} ?>>4</option><option value="5" <?php if($newsid == "5"){echo "SELECTED";} ?>>5</option><option value="6" <?php if($newsid == "6"){echo "SELECTED";} ?>>6</option><option value="7" <?php if($newsid == "7"){echo "SELECTED";} ?>>7</option><option value="8" <?php if($newsid == "8"){echo "SELECTED";} ?>>8</option><option value="9" <?php if($newsid == "9"){echo "SELECTED";} ?>>9</option><option value="10" <?php if($newsid == "10"){echo "SELECTED";} ?>>10</option></select><input type="submit" /></form><a href="changes/newsmoddelete.php?news_id=<?php echo $newsid; ?>">Delete this news article</a><br>
Edit the selected story<br>
<form name="RTEDemo" action="/plugins/admin/changes/newsmod.php" method="post" onsubmit="return submitForm();">
<input type="hidden" name="news_id" value="<?php echo $newsid; ?>" />
<script language="JavaScript" type="text/javascript">
<!--
function submitForm() {
	//make sure hidden and iframe values are in sync for all rtes before submitting form
	updateRTEs();
	
	return true;
}

//Usage: initRTE(imagesPath, includesPath, cssFile, genXHTML, encHTML)
initRTE("../cbrte/images/", "../cbrte/", "", true);
//-->
</script>
<noscript><p><b>Javascript must be enabled to use this form.</b></p></noscript>

<script language="JavaScript" type="text/javascript">
<!--
//build new richTextEditor
var rte1 = new richTextEditor('rte1');
<?php
//format content for preloading

	$content = rteSafe($data);

?>
rte1.html = '<?=$content;?>';
//rte1.toggleSrc = false;
rte1.build();
//-->
</script>
<p><input type="submit" name="submit" value="Submit" /></p>
</form>
<?php
function rteSafe($strText) {
	//returns safe code for preloading in the RTE
	$tmpString = $strText;
	
	//convert all types of single quotes
	$tmpString = str_replace(chr(145), chr(39), $tmpString);
	$tmpString = str_replace(chr(146), chr(39), $tmpString);
	$tmpString = str_replace("'", "&#39;", $tmpString);
	
	//convert all types of double quotes
	$tmpString = str_replace(chr(147), chr(34), $tmpString);
	$tmpString = str_replace(chr(148), chr(34), $tmpString);
//	$tmpString = str_replace("\"", "\"", $tmpString);
	
	//replace carriage returns & line feeds
	$tmpString = str_replace(chr(10), " ", $tmpString);
	$tmpString = str_replace(chr(13), " ", $tmpString);
	
	return $tmpString;
}
?>
<!-- END Demo Code -->

</body>
</html>
