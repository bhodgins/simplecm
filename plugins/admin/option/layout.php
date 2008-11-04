Layout editor<br><br>
<form method="post" action="changes/layout.php" >
Left Side Modules:<br>
<textarea name="leftmod" ><?php echo file_get_contents("../../include/modules_left"); ?></textarea><br>
Right Side Modules:<br>
<textarea name="rightmod" ><?php echo file_get_contents("../../include/modules_right"); ?></textarea><br>
Select Default Theme:<br>
<input type="text" name="deftheme" value="<?php echo file_get_contents("../../include/default_theme"); ?>"/><br>
<input type="submit" value="Change Da Layout" />
</form>
