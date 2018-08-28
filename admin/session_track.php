<?php
require_once 'config.php';
$conn = dbConnect();
session_start();

$is_loggedin = false;

if(isset($_SESSION['myid']) && isset($_SESSION['mymobilenumber']) ){

	$sql = "SELECT * FROM users WHERE id='".$_SESSION['myid']."' AND u_mobilenumber='".$_SESSION['mymobilenumber']."' LIMIT 1";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		$is_loggedin = true;
		$curentuser = $result->fetch_assoc();
		$result=null;
	}
	$conn->close();

}


if($is_loggedin){
	if(basename($_SERVER['PHP_SELF'])=='trackingOrder.php'){
		header('Location: track.php');
	}
	// Else Do nothing 
}
else if(!$is_loggedin && basename($_SERVER['PHP_SELF']) != 'trackingOrder.php'){
	
	header('Location: trackingOrder.php');

}

?>