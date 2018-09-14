<?php include 'body.php';?>
					<div id="main_container" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<h3 class="topic">ثبت نوع فرش</h3>
						<form action="#" method="post" >
							<div class="row">
								<input type="hidden" name="action" value="submitCarpet" />
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 form-group" style="padding-right: 0px; padding-left: 10px;">
									<input class="form-control" id="carpetkind" name="carpetkind" type="text" required>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
								  <label for="carpetkind" style="color:#434444; font-family:IRANSans;">:نوع فرش</label>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
								</div>
								<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 form-group">
									<div class="submit">	
										<button class="btn btn-default pull-left" type="submit" name ="submit" style="font-family:IRANSans; background-color:#05abad; padding:5px 25px; font-size:12px; color:#fff;">
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

				.submit.btn{
					text-align:center;
					font-family:IRANSans;
					color:#fff; 
					font-size:12px;
					padding:5px 25px;
					background-color:#05abad;
					font-family:IRANSans;
				}
			</style>