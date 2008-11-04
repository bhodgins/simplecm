<?php

	/* Global Configuration file */
	
	/* website name */
	$SITE_TITLE = "SimpleCM Default Setup";
	
	/* Custom Title String, Comment out to use website name */
	// $CUSTOM_TITLESTRING = "Testing";
	
	/* Default stylesheet / Theme */
	$Default_Theme = file_get_contents("include/default_theme");
	
	/* Enable / Disable Database Access, Comment out to disable.
	$DB_ACCESS = 1 // Enabled as default
	
	/* Database Hostname/Address */
	$DB_HOST = "localhost";	

	/* Database type */
	$DB_TYPE = "MySQL4";

	/* Database Username */
	$DB_USERNAME = "simplecm";
	
	/* Database password */
	$DB_PASSWD = "simplecm";

	/* Database to use */
	$DB_DBNAME = "simplecm";
	
	/*  Database Table defaults */
	$DB_TABL_NEWS = "news"; // News table
	$DB_TABL_USER = "users"; // User table
	$DB_TABL_UPDMIRRORS = "ftp_updmirrors"; // Ftp Uodate Mirror table		
	
	/*Default module to display / Homepage module */
	$Default_Module = file_get_contents("include/default_module");
	/*path configuration */
	$fspath = "/var/www";
	$webpath = "/";

?>
