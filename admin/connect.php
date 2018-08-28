<?php
	
	function Connect()
	{
	 $dbhost = "localhost";
	 $dbuser = "root";//ghalisho_r//
	 $dbpass = "";//qKzIAneL7//
	 $dbname = "ghalisho_r";
	 
	 // Create connection
	 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
	 $conn->set_charset("utf8");
	 
	 return $conn;
	 
	} 
?>