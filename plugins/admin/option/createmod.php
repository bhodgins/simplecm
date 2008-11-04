<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<script language="JavaScript" type="text/javascript" src="../cbrte/html2xhtml.js"></script>
	<script language="JavaScript" type="text/javascript" src="../cbrte/richtext_compressed.js"></script>
</head>
<body>
Create Module<br>
the first cbrte is for admin.php<br>
the second cbrte is for module.php<br>
<br>
<form name="RTEDemo" action="<?php echo $path; ?>" method="post" onsubmit="return submitForm();">
Module Name:<input type="text" name="modname" value="" />
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
//build new richTextEditor
var rte2 = new richTextEditor('rte2');
<?php
//format content for preloading

	$content = rteSafe($data);

?>
rte2.html = '<?=$content;?>';
//rte1.toggleSrc = false;
rte2.build();
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
this doesnt work due to the fact that the module format is going to change and the module creator will need to be revisited at a later date.