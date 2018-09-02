<?php include 'header.php' ?>	
			<div class="wrapper">
				<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 113px; direction:rtl; ">
							<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:80px; margin-top:-35px;">ثبت سفارش</h3>
							<form action="thanks.php" method="post" id="frmContact">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group">
										<input class="form-control" id="u_lastname" name="u_lastname" placeholder="نام خانوادگی" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind">نام خانوادگی:</label>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="font-family:IRANSans;">
										<input class="form-control" id="u_firstname" name="u_firstname" placeholder="نام" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind">نام :</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="font-family:IRANSans;">
										<input class="form-control" id="u_mobilenumber" name="u_mobilenumber"  placeholder="شماره موبایل" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind">شماره موبایل:</label>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="font-family:IRANSans;">
										<input class="form-control" id="u_phonenumber" name="u_phonenumber" placeholder="شماره منزل" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;" >
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="phonenumber">شماره تلفن:</label>
									</div>
								</div>
								<div class="row">
								<?php
									require_once 'connection.php';


									$conn    = Connect();
									$sql = "SELECT washid,washkind FROM wash_type";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {

									?>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="font-family:IRANSans;">
										<select name='u_washid' class='form-control' style="text-align:right;" >
										<?php
										while($row = $result->fetch_assoc()) {
											$id=$row['washid'];
											echo "
												<option value='{$id}'>{$row['washkind']}</option> ino asln dorost nakardm
												";
										}
										?>
										</select>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="carpetkind">نوع فرش:</label>
									</div>
									<?php
									} else {
										echo "نتیجه ای یافت نشد";
									}
									?>
									<?php
									$sql = "SELECT carpetid,carpetkind FROM carpet_type";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {

									?>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="font-family:IRANSans;">
										<select name='u_carpetid' class='form-control' style="text-align:right;" >
										<?php
										while($row = $result->fetch_assoc()) {
											$id=$row['carpetid'];
											echo "
												<option value='{$id}'>{$row['carpetkind']}</option> ino asln dorost nakardm
												";
										}
										?>
										</select>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="carpetkind">نوع شستشو:</label>
									</div>
									<?php
									} else {
										echo "نتیجه ای یافت نشد";
									}
									?>
									<?php
									$conn->close();

									?>

									</div>
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="font-family:IRANSans;">
										<input class="form-control" id="u_metter" name="u_metter" placeholder="متراژ را وارد کنید" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind">متراژ:</label>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="font-family:IRANSans;">
										<input class="form-control" id="u_email" name="u_email" placeholder="ایمیل" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind">ایمیل:</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9 form-group">
										<input class="form-control" id="u_address" name="u_address" placeholder="آدرس" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind">آدرس:</label>
									</div>
								</div>



								<div class="row">
									<div class="col-sm-12 form-group" style="margin-bottom:115px;">
										<button class="btn btn-default pull-left" type="submit" style="text-align:center; font-family:IRANSans; color:#fff; font-size:12px; padding:5px 25px; background-color:#05abad;">
											ارسال
										</button>
									</div>
								</div>
							</form>
						</div>
				</div>

			</div>

			<?php include 'footer.php' ?>
