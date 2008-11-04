<?php
include "include/config-global.php";
include "content/header.php";
//echo "<div id='body'>";
//start left
if (file_exists("include/modules_left"))
	{
		$ml_buffer = fopen("include/modules_left", "r");
		
		echo "<div id='left'>";
		
		$ListCount = 0;
				
		while ($Module_Name = trim(fgets($ml_buffer)))
		{
		
			echo "";
			if (!file_exists("modules/$Module_Name/module.php"))
			{
				echo "modules/$Module_Name/module.php is missing!";
			}
			
			else
			{

                                echo "<div id='mod'>"; 
				include("modules/$Module_Name/config.php");
				echo "<b>" . $Display_Title . "</b></div><br><div id='mod'>";
				include("modules/$Module_Name/module.php");
				echo "</div><br><br>";
			}
			
			$ListCount++;
		} 		

		fclose($ml_buffer);
		
	}
	
	else
	{
		echo "Warning: include/Modules_left is missing!";
	}
echo "</div>";
// end left 
// start body
 echo "<div id='main'>";
if (!isset($_GET["section"]))
		{
			// Load default page for center module.
			if (file_exists("modules/$Default_Module/module.php"))
			{
				include("modules/$Default_Module/module.php");
			}
}else{
                      $Module_Name = $_GET["section"];
			if (file_exists("modules/$Module_Name/module.php"))
			{
				include("modules/$Module_Name/module.php");
			}else{
                                 echo "Module Not Found";
                       }
}
		
	echo "</div>";		
//end body
//start right
echo '<div id="right">';
		if (file_exists("include/modules_right"))
	{
		$mr_buffer = fopen("include/modules_right", "r");
		
		
		$ListCount = 0;
				
		while ($Module_Name = trim(fgets($mr_buffer)))
		{
		
			echo "<div id='mod'>";
			if (!file_exists("modules/$Module_Name/module.php"))
			{
				echo "modules/$Module_Name/module.php is missing!";
			}
			
			else
			{
				include("modules/$Module_Name/config.php");
				echo "<b>" . $Display_Title . "</b></div><br><div id='mod'>";
				include("modules/$Module_Name/module.php");
				echo "</div><br><br>";
			}
			
			$ListCount++;
		} 		

		fclose($mr_buffer);
		
	}
	
	else
	{
		echo "Warning: include/Modules_right is missing!";
	}


echo "</div>";  //end main div

include "content/footer.php";
?>