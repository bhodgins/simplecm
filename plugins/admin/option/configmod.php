<?php
if($_POST["custmod"]){
$custmod = $_POST['custmod'];
}elseif($_GET['custmod']){
$custmod = $_GET["custmod"];
}
?>
		<form method="post" action="?scm=configmod" >
<input type="text" name="custmod" value="<?php echo $custmod;?>" />
<input type="Submit" value="Choose Custom Module" />
</form>
<br>
<?php 
if(!$custmod){ 
echo "No Custom Module Selected"; 
exit;
}elseif(!file_exists("../../modules/".$custmod."/config.php")){
echo "Module Does Not Exist";
exit;
}
$file = $fspath . "/modules/" . $custmod . "/config.php";
$data = file_get_contents($file);
?>
Editing Custom Modules Configuration <?php echo $_POST['custmod'];?><br><br>
<form name="RTEDemo" action="changes/configmod.php" method="post" >
<textarea cols="65" rows="20" name="data"><?php echo $data;?></textarea>
<input type="hidden" name="custmod" value="<?php echo $custmod; ?>" />
					<p><input type="submit" name="submit" value="Submit Changes" /></p>
					</form>

