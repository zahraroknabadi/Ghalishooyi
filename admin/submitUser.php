
<?php
include 'config.php';
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

?>




	

