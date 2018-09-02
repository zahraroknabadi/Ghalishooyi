<?php include 'body.php';?>
					<div id="main_container" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:100px; margin-top:100px;">ثبت انواع خدمات</h3>
						<form action="#" method="post" >
							<input type="hidden" name="action" value="submitType" />
								<div class="row">
									<?php
									require_once 'config.php';
									 
									
									$conn    =dbConnect();
									
									$sql = "SELECT carpetid,carpetkind FROM carpet_type";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										
									?>
									<div class="col-lg-2 col-md-2"></div>
									<div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 form-group" style="font-family:IRANSans; padding-right: 0px; padding-left: 10px;">
										<select name='shamsi' class='form-control' style="text-align:right;">
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
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
										<label for="washkind" style="color:#434444; font-family:IRANSans;">:نوع فرش</label>
									</div>
									<div class="col-lg-2 col-md-2"></div>
									<?php
									} else {
										echo "نتیجه ای یافت نشد";
									}
									?>
								</div>
								<div class="row">
									<?php
									require_once 'config.php';
									 
									
									$conn    =dbConnect();
									$sql = "SELECT washid,washkind FROM wash_type";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										
									?>
									<div class="col-lg-2 col-md-2"></div>
									<div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 form-group" style="font-family:IRANSans; padding-right: 0px; padding-left: 10px;">
										<select name='u_washid' class='form-control' style="text-align:right;" >
										<?php
										while($row = $result->fetch_assoc()) {
											$id=$row['washid'];
											echo "
												<option value='{$id}'>{$row['washkind']}</option> 
												";
										}
										?>
										</select>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
										<label for="washkind" style="color:#434444; font-family:IRANSans; ">:نوع شستشو</label>
									</div>
									<div class="col-lg-2 col-md-2"></div>
									<?php
									} else {
										echo "نتیجه ای یافت نشد";
									}
									?>
								</div>
								
									<?php
									$conn->close();
									
									?>

							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
								<div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 form-group" style="padding-right: 0px; padding-left: 10px;">
									<input class="form-control" id="price" name="price" type="text" required>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
									<label for="washkind" style="color:#434444; font-family:IRANSans;">:قیمت</label>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group" style="margin-bottom:128px;">
									<div class="submit">
										<button class="btn btn-default pull-left" type="submit">
											ثبت
										</button>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
							</div>
						</form>
					</div>
				<?php include 'footer.php' ?>		
			<style>
				.submit .btn{
					text-align:center;
					font-family:IRANSans;
					color:#fff; font-size:12px;
					padding:5px 25px;
					background-color:#05abad;
					font-family:IRANSans;
				}
			</style>