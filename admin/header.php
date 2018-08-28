<?php
	require_once "config.php";
	require "session.php";
	
	//include 'header.php';

?>
<!DOCTYPE html>
<html>
	<head>
	  <title>پنل کاربری قالیشویی رکن </title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="style.css" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="script.js" type="text/javascript"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse " style="height:84px; background-color: #23282e !important; border: #23282e; line-height:75px; !important;">
			<div class="wrapper">
				<img src="images/user.png" style="padding: 10px 10px 10px 10px;">
				<span style="font-family:IRANSans; color:#FFF;"><?php echo $_SESSION["myusername"]. '!خوش آمدید'?></span>
				<a href="logout.php"><span  class="glyphicon glyphicon-off" style="color:#05abad; margin-right: 20px;"></span></a>
			</div>
		</nav>
		
		


	