<?php

include 'header.php' ;
require_once 'connection.php';

$conn = Connect();


$id=$_POST['id'];
$mymobilenumber=$_POST['mymobilenumber'];

$id = stripslashes($id);
$mymobilenumber = stripslashes($mymobilenumber);
$id = mysqli_real_escape_string($conn, $id);
$mymobilenumber = mysqli_real_escape_string($conn, $mymobilenumber);

$sql="SELECT * FROM orders WHERE id='$id' and u_mobilenumber='$mymobilenumber'";
$result=mysqli_query($conn, $sql);

$count=mysqli_num_rows($result);

if($count==1){
	
?>
					<div class="container-fluid">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:50px; margin-top:100px;">وضعیت سفارش</h3>
						<div class="row">
							<div class="col-lg-2 col-md-2 "></div>
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style=" text-align:center;  font-family:IRANSans; font-size:13px;">
								<?php
								
								$id=$_POST['id'];
								
									$sql = "SELECT id,statuskind FROM `orders` INNER JOIN status_type ON u_statusid = status_type.statusid where id = '$id'";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-success" style="margin-top:40px;  font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "وضعیت:" . $row["statuskind"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>
							<div class="col-lg-2 col-md-2 "></div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-md-2 "></div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style=" text-align:center;  font-family:IRANSans; font-size:13px;">
								<?php
									$id=$_POST['id'];
								
									$sql = "select u_lastname from orders where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style="margin-top:40px;  font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "نام خانوادگی:" . $row["u_lastname"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>	
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style=" text-align:center;">
								<?php
									$id=$_POST['id'];
								
									$sql = "select u_firstname from orders where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style="margin-top:40px; font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "نام کوچک:" . $row["u_firstname"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>		
							<div class="col-lg-2 col-md-2 "></div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-md-2 "></div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style=" text-align:center;  font-family:IRANSans; font-size:13px;">
								<?php
									$id=$_POST['id'];
								
									$sql = "select u_mobilenumber from orders where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style="font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "شماره همراه:" . $row["u_mobilenumber"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>	
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="text-align:center;">
								<?php
									$id=$_POST['id'];
								
									$sql = "select u_phonenumber from orders where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style=" font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "شماره منزل:" . $row["u_phonenumber"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>
							<div class="col-lg-2 col-md-2 "></div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-md-2 "></div>
							
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="text-align:center;">
								<?php
									$id=$_POST['id'];
								
									$sql = " SELECT id ,washkind FROM `orders` INNER JOIN wash_type ON u_washid = wash_type.washid  where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style=" font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "نوع شستشو:" . $row["washkind"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="text-align:center;">
								<?php
									$id=$_POST['id'];
								
									$sql = " SELECT id ,carpetkind FROM `orders` INNER JOIN carpet_type ON u_carpetid = carpet_type.carpetid  where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style=" font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "نوع فرش:" . $row["carpetkind"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>
							<div class="col-lg-2 col-md-2 "></div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-md-2 "></div>
							
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style=" text-align:center;">
								<?php
									$id=$_POST['id'];
								
									$sql = "select u_email from orders where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
								<div class="alert alert-info" style="font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "" . $row["u_email"] . ":ایمیل";
											}
										} else {
											echo "0 results";
										}
										?>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="text-align:center;">
								<?php
									$id=$_POST['id'];
								
									$sql = "select u_metter from orders where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style=" font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "متراژ:" . $row["u_metter"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>
							<div class="col-lg-2 col-md-2 "></div>
					</div>
					<div class="row">
							<div class="col-lg-2 col-md-2 "></div>
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="text-align:center;">
								<?php
									$id=$_POST['id'];
								
									$sql = "select u_address from orders where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
								<div class="alert alert-info" style="font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "آدرس:" . $row["u_address"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
								</div>
								<?php
									$conn->close();
								?>
										
								
							</div>
								<div class="col-lg-2 col-md-2 "></div>
					</div>
						</div>

					</div>
			
			
			<?php include 'footer.php';?>
		
		
		<style>
		.h3{
			font-family:IRANSans;
			color:#05abad !important; 
			text-align:center;
			font-size: 32px;

		}
		</style>
<?php
}
else {
echo "<p style='font-family:IRANSans !important; color:#05abad; text-align: right;'>.رمز ورود یا نام کاربری را اشتباه وارد کرده اید</p>";
}
?>