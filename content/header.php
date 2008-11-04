<?php

	printf ("<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>\n ");
	
	if (!isset($_SESSION["LoggedOn"]))
	{
		$Current_Theme = $Default_Theme;
		
	}	
	
?>
	
	<html>

		<head>

		<link rel="stylesheet" type="text/css" href="<?php

		// is a user prefered stylesheet set?

			if (isset($_POST["theme"]))
			{
				$Current_Theme = $_POST["theme"];
				$Current_ThemePath = "$Current_Theme";
				$_SESSION["theme"] = $Current_Theme;
			
			}

		if (isset($_SESSION["theme"]))
		{
			// It has. Use the users prefered stylesheet.	
			$Current_Theme = $_SESSION["theme"];
				$Current_ThemePath = "$Current_Theme";
				printf ("styles/$Current_Theme/" . $Current_Theme . ".css");
		}
		
		else
		{
			if (!isset($_POST["theme"]))
			{		
				// Defaults_Theme
				$Current_Theme = $Default_Theme;
				$Current_ThemePath = $Current_Theme;
				printf ("styles/$Default_Theme/" . $Default_Theme . ".css");
			}
		}
		
		 ?>" />
			<title><?php echo $SITE_TITLE; ?></title>

		</head>
				
		
		<body>
		
			
<?php
						echo "<div id='top'>";

include ("styles/$Current_Theme/logo.html");
echo "</div>";

?>