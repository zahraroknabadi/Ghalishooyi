<?php include 'header.php' ?>
	<div class="container-fluid">
			<div class="wrapper">
				<div class="row">
					<div class="text-center">
						<?php
						$conn    = Connect();
						$mobilenumber    = $conn->real_escape_string($_POST['u_mobilenumber']);
						$phonenumber   = $conn->real_escape_string($_POST['u_phonenumber']);
						$lastname    = $conn->real_escape_string($_POST['u_lastname']);
						$firstname    = $conn->real_escape_string($_POST['u_firstname']);
						$address   =  $conn->real_escape_string($_POST['u_address']);
						$email    = $conn->real_escape_string($_POST['u_email']);
						$metter    = $conn->real_escape_string($_POST['u_metter']);
						$carpetid    = $conn->real_escape_string($_POST['u_carpetid']);
						$washid    = $conn->real_escape_string($_POST['u_washid']);
						$query   = "INSERT into orders (u_mobilenumber,u_phonenumber,u_lastname,u_firstname,u_address,u_email,u_metter,u_carpetid,u_washid,u_statusid) VALUES('" . $mobilenumber . "','" . $phonenumber . "','" . $lastname . "','" . $firstname . "','" . $address . "','" . $email . "','" . $metter . "','" . $carpetid . "','" . $washid . "','" . 1 . "')";
						$success = $conn->query($query);
						?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:150px; margin-bottom:161px;">
							<div class="text-center" style="text-align: center;">
								<?php
								if (!$success) {
									die("متاسفانه پیام شما ثبت نشد ".$conn->error);
								 
								 


								 
								}
								 
								$last_id = $conn->insert_id;
								echo "<div class='text-center' style='margin-bottom: 75px;'>
									<p style='font-family:IRANSans; font-size:17px; color:#05abad; margin-top: 34px;'>.سفارش شما با موفقیت ثبت شد</p>
									<span style='color:#434444; font-family:IRANSans;'>شماره پیگیری شما:</span>  $last_id
								</div>";
								

								$text=".مشتری گرامی $firstname $lastname
								سفارش شما با موفقیت ثبت شد
								</br>شماره پیگیری:$last_id";
								Echo $text;
								sendSMS($mobilenumber,$text);
								$conn->close();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<?php include 'footer.php' ?>















	

