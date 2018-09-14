<?php include 'header.php' ?>
		<div class="container-fluid">
			<div class="wrapper">
				<div class="row">
					<?php
					$mobilenumber    = $conn->real_escape_string($_POST['u_mobilenumber']);
					$message = $conn->real_escape_string($_POST['message']);
					$query   = "INSERT into sms (u_mobilenumber,message) VALUES('" . $mobilenumber . "','" . $message . "')";
					$success = $conn->query($query);
					?>
					<div class="col-lg-7 col-md-5 col-sm-7 col-xs-12" style="margin-top:150px; margin-bottom:213px;">
						<div class="text-center" style="text-align: center; float: right;">
							<?php
							if (!$success) {
								die(".متاسفانه پیام شما ارسال نشد ".$conn->error);
							 
							}
							 
							echo ".پیام شما با موفقیت ارسال شد";
							 
							$conn->close();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<?php include 'س.php' ?>
<?php include 'footer.php' ?>
















	

