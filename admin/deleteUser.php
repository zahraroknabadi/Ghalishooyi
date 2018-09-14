<?php
include 'config.php';
$conn = dbConnect();
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
?>