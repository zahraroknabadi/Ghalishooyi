<?php
require_once 'connection.php';
$conn = Connect();
session_start();

$is_loggedin = false;

if(isset($_SESSION['id']) && isset($_SESSION['mymobilenumber']) ){

	$sql = "SELECT * FROM orders WHERE id='".$_SESSION['id']."' AND u_mobilenumber='".$_SESSION['mymobilenumber']."' LIMIT 1";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		$is_loggedin = true;
		$curentuser = $result->fetch_assoc();
		$result=null;
	}
	$conn->close();

}


if($is_loggedin){
	if(basename($_SERVER['PHP_SELF'])=='followingOrder.php'){
		header('Location: TrackOrder.php');
	}
	// Else Do nothing 
}
else if(!$is_loggedin && basename($_SERVER['PHP_SELF']) != 'followingOrder.php'){
	
	header('Location: followingOrder.php');

}

?>