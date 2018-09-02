<?php include'body.php'; ?>
					<div id="main_container" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:100px; margin-top:100px;">ثبت کاربر جدید</h3>
						<form action="#" method="post">
							<div class="row">
								<input type="hidden" name="action" value="submitUser" />
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
								<div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 form-group" style="padding-right: 0px; padding-left: 10px;">
									<input class="form-control" id="username" name="username" type="text" required>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
									<label for="add-row" style="color:#434444; font-family:IRANSans;">:نام کاربری</label>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
								<div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 form-group" style="padding-right: 0px; padding-left: 10px;">
									<input class="form-control" id="password" name="password"  type="password" required>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
									<label for="password" style="color:#434444;  font-family:IRANSans;">:رمز عبور</label>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group ">
									<div class="submit" >
										<button class="btn btn-default pull-left" type="submit" name ="submit" id="btnSun">
											ثبت
										</button>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
							</div>
						</form>
					</div>
		<?php include'footer.php';?>
			<style>
				.h3{
					font-family:IRANSans;
					color:#05abad;
					text-align:center; 
					margin-bottom: 100px;
					margin-top: 30px;
					font-size: 30px;
				}
				.form-control{
					text-align:right;
					font-family:IRANSans;
					color:#434444;
					font-size:12px;
					font-family:IRANSans !important;
				}
				.submit .btn{
					text-align:center;
					font-family:IRANSans;
					color:#fff; font-size:12px;
					padding:5px 25px;
					background-color:#05abad;
					font-family:IRANSans;
				}
			</style>