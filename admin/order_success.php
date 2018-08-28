<?php
session_start();
if(isset($_session ["myusername"])){
header("location:detail.php");//main_login.php

}else{
	header('Location: sub.php');//homeg.php
}
?>

<html>
<body>
خوش آمدید.
</body>
</html> 