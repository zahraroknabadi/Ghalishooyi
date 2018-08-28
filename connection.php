<?php
	
	function Connect()
	{
	 $dbhost = "localhost";
	 $dbuser = "root";
	 $dbpass = "";
	 $dbname = "ghalisho_r";
	 
	 // Create connection
	 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
	 $conn->set_charset("utf8");
	 
	 
	 
	 return $conn;
	 
	}
	require "functions.php";	
	//require_once(dirname(_FILE_). '/functions.php');
?>
