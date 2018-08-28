<?php

if(!isset($_REQUEST['action'])){
	die('Action not found');
}
include 'config.php';

$action=$_REQUEST['action'];

switch($action){
		
	case 'deleteUser':
		$conn = dbConnect();
		
		if(!isset($_GET['id']))
			die('Id not found');
		$id = $_GET['id'];		

		$sql = "DELETE from users WHERE id='$id' AND id NOT IN(1)";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0 ){
		$result = array('result' => true , 'message'=>'این یارو حذف شد ! ');
		echo json_encode($result);
		}else{
		$result = array('result' => false);
		echo json_encode($result);
		}
		break;
		
		
		
		
	case 'deleteMessage':
		$conn = dbConnect();
		
		if(!isset($_GET['id']))
			die('Id not found');
		$id = $_GET['id'];
		
		$sql = "DELETE from contact WHERE id='$id'";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0 ){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		}
		break;
		
		
		
		case 'deleteOrder':
		$conn = dbConnect();
		
		if(!isset($_GET['id']))
			die('Id not found');
		$id = $_GET['id'];
		
		$sql = "DELETE from orders WHERE id='$id'";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0 ){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		}
		break;
		
		
		
		case 'deleteWash':
		$conn = dbConnect();
		
		if(!isset($_GET['id']))
			die('Id not found');
		$id = $_GET['id'];
		
		$sql = "DELETE from wash_type WHERE washid='$id'";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0 ){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		}
		break;
		
		
		
		case 'deleteCarpet':
		$conn = dbConnect();
		
		if(!isset($_GET['id']))
			die('Id not found');
		$id = $_GET['id'];
		
		$sql = "DELETE from carpet_type WHERE carpetid='$id'";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0 ){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		}
		break;
		
		
		
		case 'deleteService':
		$conn = dbConnect();
		
		if(!isset($_GET['id']))
			die('Id not found');
		$id = $_GET['id'];
		
		$sql = "DELETE from type WHERE id='$id'";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0 ){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		}
		break;
		
		
		
		case 'submitUser':
		$conn = dbConnect();
		
		$username    = $conn->real_escape_string($_POST['username']);
		$password    = $conn->real_escape_string($_POST['password']);
		$sql   = "INSERT into users (username,password) VALUES('" . $username . "','" . $password . "')";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0 ){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		} 
		break;
		
		
		
		case 'submitWash':
		$conn = dbConnect();
		
		$washkind    = $conn->real_escape_string($_POST['washkind']);
		$sql   = "INSERT into wash_type (washkind) VALUES('" . $washkind . "')";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0 ){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		} 
		break;
		
		
		
		case 'submitCarpet':
		$conn = dbConnect();
		
		$carpetkind    = $conn->real_escape_string($_POST['carpetkind']);
		$sql   = "INSERT into carpet_type (carpetkind) VALUES('" . $carpetkind . "')";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0 ){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		}  
		break;
		
		
		case 'submitType':
		$conn = dbConnect();
		
		$carpetid    = $conn->real_escape_string($_POST['shamsi']);
		$washid    = $conn->real_escape_string($_POST['u_washid']);
		$price    = $conn->real_escape_string($_POST['price']);
		$sql   = "INSERT into type (u_carpetid,u_washid,price) VALUES('" . $carpetid . "','" . $washid . "','" . $price . "')";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		}  
		break;
		
		

		case 'submitOrder':
		$conn = dbConnect();
		
		$mobilenumber    = $conn->real_escape_string($_POST['u_mobilenumber']);
		$phonenumber   = $conn->real_escape_string($_POST['u_phonenumber']);
		$lastname    = $conn->real_escape_string($_POST['u_lastname']);
		$firstname    = $conn->real_escape_string($_POST['u_firstname']);
		$address   =  $conn->real_escape_string($_POST['u_address']);
		$email    = $conn->real_escape_string($_POST['u_email']);
		$metter    = $conn->real_escape_string($_POST['u_metter']);
		$carpetid    = $conn->real_escape_string($_POST['u_carpetid']);
		$washid    = $conn->real_escape_string($_POST['u_washid']);
		$sql   = "INSERT into orders (u_mobilenumber,u_phonenumber,u_lastname,u_firstname,u_address,u_email,u_metter,u_carpetid,u_washid,u_statusid) VALUES('" . $mobilenumber . "','" . $phonenumber . "','" . $lastname . "','" . $firstname . "','" . $address . "','" . $email . "','" . $metter . "','" . $carpetid . "','" . $washid . "','" . 1 . "')";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		}  
		break;
		
		

		case 'submitStatus':
		$conn = dbConnect();
		
		$statusid    = $conn->real_escape_string($_POST['u_statusid']);
		$id = $_POST['id'];
		$sql   = "UPDATE orders SET u_statusid = '$statusid' where id = '$id'";
		$result= $conn->query($sql);
		$count=mysqli_affected_rows($conn);
		if ($result === true && $count>0){
			$result = array('result' => true);
			echo json_encode($result);
		}else{
			$result = array('result' => false);
			echo json_encode($result);
		}  
		break;
		
		
		
	default:
		echo json_encode(array('msg'=>'Action not supported'));
}









