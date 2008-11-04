<?php

if($_SESSION["admin"] == "admin"){
$loggedin = yes;
#if($_SESSION["username"] !== "admin"){ echo "Under Construction"; exit;}
}
if(!$loggedin){exit;}
//$ver = "0.2.0";
$xmlfile = file_get_contents('http://' . $updserver . '/update_routines.php?ver='.$ver); 
file_put_contents("file.xml", $xmlfile);
$doc = new DOMDocument();
    $doc->load("file.xml");
       
         $files = $doc->getElementsByTagName( "file" );
	   foreach( $files as $file )
	     {
	       $names = $file->getElementsByTagName( "name" );
	         $name = $names->item(0)->nodeValue;
		   
		     $workingpaths = $file->getElementsByTagName( "workingpath" );
		       $workingpath = $workingpaths->item(0)->nodeValue;
		         
			   $usedbys = $file->getElementsByTagName( "usedby" );
			     $usedby = $usedbys->item(0)->nodeValue;
			       $filepath = $syspath . $workingpath . $name;
			         $file = file_get_contents('http://' . $updserver . '/' . $ver . '/updates/' . $name);
				   file_put_contents($fspath . $filepath, $file);
				     echo "$name - $workingpath - $usedby<br>";
				       }
				       ?>
				       <br><br>
				       File Listed Above were successfully updated
