<?php
if (file_exists("include/modules_left"))
	{
		$ml_buffer = fopen("include/ActivePlugins", "r");
		
	
		$ListCount = 0;
				
		while ($Plugin_Name = trim(fgets($ml_buffer)))
		{

			include "plugins/".$Plugin_Name.".php";
			
			$ListCount++;
		} 		

		fclose($ml_buffer);
		
	}
?>