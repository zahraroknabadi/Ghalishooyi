<?php


function dbConnect(){
	
	$dbhost = "localhost";
	$dbuser = "root";//ghalisho_r
	$dbpass = "";//qKzIAneL7
	$dbname = "ghalisho_r";

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	$conn->set_charset("utf8");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	return $conn;
}			
	require "functions.php";	


?>