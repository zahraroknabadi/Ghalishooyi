<?php
require_once 'config.php';
$conn = dbConnect();
session_start();

$is_loggedin = false;

if(isset($_SESSION['myusername']) && isset($_SESSION['mypassword']) ){

	$sql = "SELECT * FROM users WHERE username='".$_SESSION['myusername']."' AND password='".$_SESSION['mypassword']."' LIMIT 1";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		$is_loggedin = true;
		$curentuser = $result->fetch_assoc();
		$result=null;
	}
	$conn->close();

}


if($is_loggedin){
	if(basename($_SERVER['PHP_SELF'])=='login.php'){
		header('Location: index.php');
	}
	// Else Do nothing 
}
else if(!$is_loggedin && basename($_SERVER['PHP_SELF']) != 'login.php'){
	
	header('Location: login.php');

}

?>