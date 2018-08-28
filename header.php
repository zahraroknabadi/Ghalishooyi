<?php
	require_once "connection.php";
	//require "session.php";
	//include 'header.php';

?>
<!DOCTYPE html>
	<html>
		<head>
			<title>قالیشویی رکن آبادی</title>
			<meta charset="utf-8">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="viewport" content="width=device-width ,initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style.css" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/style.css">
			<style>;.codebazan1 {display: none; }.read-more-target {opacity: 0; max-height: 0; font-size: 0; transition: .25s ease; }.codebazan:checked ~ .read-more-wrap .read-more-target {opacity: 1; font-size: inherit; max-height: 999em; }</style>
			<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
			<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
			<script src='http://malsup.github.com/jquery.cycle.all.js'></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="script.js" type="text/javascript"></script>
			<script src="colorbox/jquery.colorbox-min.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
			<script src="http://malsup.github.com/jquery.cycle2.js"></script>
		</head>
		<body>
			<div class="header">
				<div class="wrapper">
					<a href="index.php">
						<img src="images/logo3.jpg"/ class="img-responsive" style="width:180px; height:130px; padding-top: 5px;">
					</a>
					<!--<a href="calltoaction.php" class="a"><button type="button" class="btn btn-default">
						ثبت سفارش&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</button></a>-->
				</div>
			</div>
			<nav class="navbar navbar-inverse headNav">
				<div class="container-fluid">
					<div class="wrapper">
						<div class="navbar-header  navbar-right">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
						  <ul class="nav navbar-nav  navbar-right" style="padding-right: 0;">
							<li><a href="darbarema.php">درباره ما</a></li>
							<li><a href="followingOrder.php">پیگیری سفارش</a></li>
							<li><a href="calltoaction.php">ثبت سفارش</a></li>
							<li><a href="khadamat.php">خدمات</a></li>
							<li><a href="index.php">خانه</a></li>
						  </ul>
						  <ul class="nav navbar-nav navbar-left">
							<li><a href="#"><span class="glyphicon glyphicon-earphone" data-toggle="modal" data-target="#myModal"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon-envelope" data-toggle="modal" data-target="#myModal"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon-map-marker" data-toggle="modal" data-target="#myModal"></span></a></li>
							  <div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  </br><p class="modal-title">شماره تماس :03135702221-09138830883-09138870887</p>
									</div>
									<div class="modal-body">
									  <p>آدرس دفتر مرکزی : اصفهان-خیابان حکیم-بازارچه نو شرقی-پلاک268</br></br>
									  آدرس کارخانه : میدان لاله-کیلومتر10 اتوبان فرودگاه-هزار متر بعد از تابلو زمان آباد-خیابان گلستان110</p>
									</div>
									<div class="modal-footer">
										<p>ایمیل:info@ghalishooyiroknabadi.ir</p>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
									</div>
								  </div>
								  
								</div>
							  </div>

						  </ul>
						</div>
					</div>
				</div>
			</nav>
