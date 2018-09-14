<?php

require_once 'config.php';

$conn = dbConnect();


$myid=$_POST['myid'];
$mymobilenumber=$_POST['mymobilenumber'];

$myid = stripslashes($myid);
$mymobilenumber = stripslashes($mymobilenumber);
$myid = mysqli_real_escape_string($conn, $myid);
$mymobilenumber = mysqli_real_escape_string($conn, $mymobilenumber);

$sql="SELECT * FROM orders WHERE id='$myid' and u_mobilenumber='$mymobilenumber'";
$result=mysqli_query($conn, $sql);

$count=mysqli_num_rows($result);

if($count==1){

session_start();
$_SESSION["myid"]=$myid;
$_SESSION["mymobilenumber"]=$mymobilenumber;
header('Location: track.php');
}
else {
echo "<p style='font-family:B Yekan; color:#05abad; text-align: right;;'>.رمز ورود یا نام کاربری را اشتباه وارد کرده اید</p>";
}

?>