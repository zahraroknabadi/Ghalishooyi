<?php include 'header.php' ?>
					<div class="text-center">
						<?php
						require 'connect.php';
						$conn    = dbConnect();						
						$statusid    = $conn->real_escape_string($_POST['u_statusid']);
						$id = $_POST['id'];
						$query   = "UPDATE orders SET u_statusid = '$statusid' where id = '$id'";
						$success = $conn->query($query);
						?>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" style="margin-top: 150px;">
							<div class='text-center'>
								<?php
								if (!$success) {
									die("<div class='text-center'><p style='font-family:IRANSans; font-size:17px; color:#05abad; margin-bottom: 159px; margin-top:34px;'>متاسفانه پیام شما ثبت نشد </p></div>".$conn->error);
								 
								 


								 
								}
								 
								echo "
								<div class='text-center'>
									<p style='font-family:IRANSans; font-size:17px; color:#05abad; margin-bottom: 107px; margin-top: 34px;'>.وضعیت جدید با موفقیت ثبت شد</p>
								</div>";
								/*$text=".فرش های شما توسط نیروی قالیشویی رکن آبادی تحویل گرفته شد و به کارخانه انتقال یافت";
								$tex1=".فرش های شما در حال شستشو هستند";
								$text2=".فرش ها به شما تحویل داده شد. از انتخاب شما سپاسگذاریم";
								sendSMS($mobilenumber,$text);*/
								$conn->close();
								?>
							</div>
						</div>
					</div>

<?php include 'sidebar.php' ?>	
<?php include 'footer.php' ?>















	

