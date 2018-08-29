<?php 
		require_once "config.php";
		$conn = dbConnect();
		?>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<h3 style="color:#05abad; font-family:IRANSans; text-align:right; margin-bottom:100px; margin-top:100px;">جزئیات سفارش</h3>
							<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12" style=" text-align:center;  font-family:IRANSans; font-size:13px;">
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
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style=" text-align:center;  font-family:IRANSans; font-size:13px;">
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
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align:center;">
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
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="text-align:center;">
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
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="text-align:center;">
								<?php
									$id=$_POST['id'];
								
									$sql = " SELECT id ,washkind FROM `orders` INNER JOIN wash_type ON u_washid = wash_type.washid  where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style=" font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo  $row["washkind"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>
							<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
								<?php
									$id=$_POST['id'];
								
									$sql = "SELECT id,carpetkind FROM `orders` INNER JOIN carpet_types ON u_carpetid = carpet_types.carpetid where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style=" font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo  $row["carpetkind"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" text-align:center;">
								<?php
									$id=$_POST['id'];
								
									$sql = "select u_email from orders where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
								<div class="alert alert-info" style="font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "ایمیل:" . $row["u_email"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
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
								
						</div>
						<?php include 'sidebar.php' ?>
					
			
			
			<?php include 'footer.php';?>
		
		
		<style>
		.h3{
			font-family:IRANSans;
			color:#05abad !important; 
			text-align:center;
			font-size: 32px;

		}
		</style>