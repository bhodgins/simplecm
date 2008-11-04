<?php

	if (file_exists("include/ActiveThemes"))
	{
		echo ("<form action='?' method='post'>Select a theme:<br><br>
		<select class='standard' name='theme'> ");
		
		$ActiveThemeBuffer = fopen("include/ActiveThemes", "r");
		while ($ThemeLine = trim(fgets($ActiveThemeBuffer)))
		{
			if (!$ThemeLine == "")
			{
				echo ("<option class='standard' value=$ThemeLine>$ThemeLine</option>");
			}
		} 		
		fclose($ActiveThemeBuffer);

		echo ("</select><br><br>
		<input class='button' type='submit' value='Set Theme'><br><br></form>");

	}
	
	else
	{
		echo "There arent any other themes!";
	}
	

?>