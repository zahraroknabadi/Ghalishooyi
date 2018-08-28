<?php
session_start();
if(isset($_session ["myusername"])){
header("location:login.php");//main_login.php

}else{
	header('Location: index.php');//homeg.php
}
?>

<html>
<body>
خوش آمدید.
</body>
</html> 