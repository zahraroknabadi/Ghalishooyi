<?php

require_once 'config.php';

$conn = dbConnect();


$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($conn, $myusername);
$mypassword = mysqli_real_escape_string($conn, $mypassword);

$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($conn, $sql);

$count=mysqli_num_rows($result);

if($count==1){

session_start();
$_SESSION["myusername"]=$myusername;
$_SESSION["mypassword"]=$mypassword;
header('Location: index.php');
}
else {
echo "<p style='font-family:B Yekan; color:#05abad; text-align: right;;'>.رمز ورود یا نام کاربری را اشتباه وارد کرده اید</p>";
}

?>