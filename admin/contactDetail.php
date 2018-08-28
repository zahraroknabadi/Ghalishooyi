<?php include 'body.php';
		
		$conn = dbConnect();
		
		?>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:100px; margin-top:100px;">
								مشاهده پیام<?php echo $_GET["id"]; ?><br>
							</h3>
									
									

							
							<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" style="margin-top:0px; text-align:center;">
								<?php
									$id=$_GET['id'];
								
									$sql = "select u_email from contact where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style="margin-top:40px; font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "" . $row["u_email"] . ":ایمیل ";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>	
							<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="margin-top:0px; text-align:center;  font-family:IRANSans; font-size:13px;">
								<?php
									$id=$_GET['id'];
								
									$sql = "select u_phonenumber from contact where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style="margin-top:40px;  font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "شماره تلفن: " . $row["u_phonenumber"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
										</div>
							</div>	

							<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" style="margin-top:0px; text-align:center;">
								<?php
									$id=$_GET['id'];
								
									$sql = "select u_name from contact where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<div class="alert alert-info" style="margin-top:40px;  font-family:IRANSans; font-size:13px;">
											<?php
												while($row = $result->fetch_assoc()) {
															echo "نام کاربر: " . $row["u_name"] . "<br>";
												}
											} else {
												echo "0 results";
											}
											?>
										</div>
							</div>	



							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:0px; text-align:center;">
								<?php
									$id=$_GET['id'];
								
									$sql = "select message from contact where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
								<div class="panel panel-default">
									<div class="panel-heading" style="font-family:IRANSans;">پیام کاربر</div>
									<div class="panel-body" style="font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "" . $row["message"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>

									</div>	
								</div>
								<?php
									$conn->close();
								?>
										
								
							</div>
								
						</div>
						<?php include'footer.php'?>
		
		<style>
		.h3{
			font-family:IRANSans;
			color:#05abad !important; 
			text-align:center;
			font-size: 32px;
			margin-bottom: 150px;
		}
		</style>