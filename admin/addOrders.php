<?php include 'body.php' ?>	
	
						<div id="main_container"  class="col-lg-9 col-md-9 col-sm-9 col-xs-12" style="direction:rtl;">
							<h3 class="topic">ثبت سفارش جدید</h3>
							<form action="submitOrder.php" method="post" >
								<div class="row">
									<input type="hidden" name="action" value="submitOrder" />
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="padding-right: 0px; padding-left: 10px;">
										<input class="form-control" id="u_lastname" name="u_lastname" placeholder="نام خانوادگی" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind" style="color:#434444; font-family:IRANSans;">نام خانوادگی:</label>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="padding-right: 0px; padding-left: 10px;">
										<input class="form-control" id="u_firstname" name="u_firstname" placeholder="نام" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind" style="color:#434444; font-family:IRANSans;">نام کوچک:</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="padding-right: 0px; padding-left: 10px;">
										<input class="form-control" id="u_mobilenumber" name="u_mobilenumber"  placeholder="شماره موبایل" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind" style="color:#434444; font-family:IRANSans;">شماره موبایل:</label>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="padding-right: 0px; padding-left: 10px;">
										<input class="form-control" id="u_phonenumber" name="u_phonenumber" placeholder="شماره منزل" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;" >
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind" style="color:#434444; font-family:IRANSans;">شماره تلفن:</label>
									</div>
								</div>
								<div class="row">
									<?php
									require_once 'config.php';
									 
									
									$conn    =dbConnect();
									$sql = "SELECT washid,washkind FROM wash_type";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										
									?>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="font-family:IRANSans; padding-right: 0px; padding-left: 10px;">
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
										<label for="washkind" style="color:#434444; font-family:IRANSans; ">نوع شستشو:</label>
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
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 form-group" style="font-family:IRANSans; padding-right: 0px; padding-left: 10px;">
										<select name='u_carpetid' class='form-control' style="text-align:right;">
										<?php
										while($row = $result->fetch_assoc()) {
											$id=$row['carpetid'];
											echo "
												<option value='{$id}'>{$row['carpetkind']}</option>
												";
																						}
										?>
										</select>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind" style="color:#434444; font-family:IRANSans;">نوع فرش:</label>
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
									<div class="col-lg-4 col-md-4 col-sm-10 col-xs-9 form-group" style="font-family:IRANSans; padding-right: 0px; padding-left: 10px;">
										<input class="form-control" id="u_metter" name="u_metter" placeholder="متراژ را وارد کنید" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind" style="color:#434444; font-family:IRANSans;">متراژ:</label>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-10 col-xs-9 form-group" style="padding-right: 0px; padding-left: 10px;">
										<input class="form-control" id="u_email" name="u_email" placeholder="ایمیل" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="email" type="email" name="email" style="color:#434444; font-family:IRANSans;">ایمیل:</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9 form-group" style="padding-right: 0px; padding-left: 10px;">
										<input class="form-control" id="u_address" name="u_address" placeholder="آدرس" type="text" required style="text-align:right; font-family:IRANSans; color:#434444; font-size:12px;">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
										<label for="washkind" style="color:#434444; font-family:IRANSans;">آدرس:</label>
									</div>
								</div>
								
								
								
								<div class="row">
									<div class="col-sm-12 form-group">
										<button class="btn btn-default pull-left" type="submit" style="text-align:center; font-family:IRANSans; color:#fff; font-size:12px; padding:5px 25px; background-color:#05abad;">
											ارسال
										</button>
									</div>
								</div>
							</form>
						</div>
				
			
			<?php include 'footer.php' ?>	