<?php

	session_start(); // Start a new session if not already started.
	
	/* Set an Init class enviroment variable */	
	
	/* Check Configuration */
	Check_Config();
	
	/* Made it this far, include the configuration file. */
	include ("include/config-global.php");
	
	if (isset($DB_PASSWD))
	{
		$db_cnct = mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWD);
		mysql_select_db($DB_DBNAME, $db_cnct);
	}
	
	else
	{
		die("Fatal Error: Variable DB_PASSWD not defined in ./include/config-global.php!");
	}
	if(file_exists("include/ActivePlugins")){
        include "content/plugins.php";
        }
	if (!mysql_error())
	{
		/* Everything seems to be just fine, load the content template */
		include("content/layout.php");
		
		mysql_close(); // Close connection to mysql.
		exit(); // All done.
	}

        else
        {
	    echo mysql_error();
	}
	
	function Check_Config()
	{
		if (!file_exists("include/config-global.php")) {
			die("Fatal Error: Configuration file missing - ./include/config-global.php <br> Cannot proceed.");
		}
	}

?>
