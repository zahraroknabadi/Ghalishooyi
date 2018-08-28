<?php include 'header.php' ?>
		<div class="container-fluid">
			<div class="wrapper">
				<div class="row">
					<?php
					$conn    = Connect();
					$name    = $conn->real_escape_string($_POST['u_name']);
					$email   = $conn->real_escape_string($_POST['u_email']);
					$phonenumber    = $conn->real_escape_string($_POST['u_phonenumber']);
					$message = $conn->real_escape_string($_POST['message']);
					$query   = "INSERT into contact (u_name,u_email,u_phonenumber,message) VALUES('" . $name . "','" . $email . "','" . $phonenumber . "','" . $message . "')";
					$success = $conn->query($query);
					?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:150px; margin-bottom:161px;">
						<div class="text-center" style="text-align: center;">
							<?php
							if (!$success) {
								die("متاسفانه پیام شما ثبت نشد ".$conn->error);
							 
							}
							 
							echo "پیام شما با موفقیت ثبت شد<br>
							کارشناسان ما در اولین فرصت با شما تماس خواهند گرفت";
							 
							$conn->close();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>	
<?php include 'footer.php' ?>
















	

