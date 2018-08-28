<?php include 'body.php';
		
		$conn = dbConnect();

		?>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:100px; margin-top:100px;">
							مشاهده جزئیات سفارش<?php echo $_GET["id"];?><br>
						</h3>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<form action="#" method="post" >
									<input type="hidden" name="action" value="submitStatus" />
									<?php
									$id=$_GET['id'];
									echo "<input type='hidden' name='id' value='{$id}' />"
									?>
										<div class="row">
											<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4" style=" text-align:center;  font-family:IRANSans; font-size:13px;">
												<div class="submit">
													<Button class="btn btn-default" type="submit" style="color:#fff; background-color:#05abad;">تغییر وضعیت</Button>
												</div>
											</div>
											<?php
											require_once 'config.php';
											$conn  =  dbConnect();

											$sql = "SELECT statusid,statuskind FROM status_type";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
											
											?>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group" style="font-family:IRANSans; padding-right: 0px; padding-left: 10px;">
												<select name='u_statusid' class='form-control' style="text-align:right !important;">
												<?php
												
												while($row = $result->fetch_assoc()) {
													$id=$row['statusid'];
													echo "
														<option value='{$id}' style='text-align:right;'>{$row['statuskind']}</option>
														";
												}
												?>
												</select>
											</div>
											<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 form-group">
												<label for="statuskind" style="color:#434444; font-family:IRANSans; ">:وضعیت</label>
											</div>
											<?php
											} else {
												echo "نتیجه ای یافت نشد";
											}
											?>
											
										</div>
								</form>
							</div>
						</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style=" text-align:center;  font-family:IRANSans; font-size:13px;">
								<?php
									$id=$_GET['id'];
								
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
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style=" text-align:center;">
								<?php
									$id=$_GET['id'];
								
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
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style=" text-align:center;  font-family:IRANSans; font-size:13px;">
								<?php
									$id=$_GET['id'];
								
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
									$id=$_GET['id'];
								
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
									$id=$_GET['id'];
								
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
									$id=$_GET['id'];
								
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
									$id=$_GET['id'];
								
									$sql = "SELECT id,carpetkind FROM `orders` INNER JOIN carpet_type ON u_carpetid = carpet_type.carpetid where id = {$id}";
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
									$id=$_GET['id'];
								
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
									$id=$_GET['id'];
								
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
						
<?php include 'footer.php' ?>
		
		<style>
		.h3{
			font-family:IRANSans;
			color:#05abad !important; 
			text-align:center;
			font-size: 32px;

		}
		</style>