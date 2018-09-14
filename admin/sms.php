<?php include 'header.php' ?>	
<?php include 'sidebar.php' ?>	
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<form action="submitSMS.php" method="post" >
							<div class="row">
								<div class="col-sm-6">
								</div>
								<div class="col-sm-6 form-group">
									<input class="form-control" id="u_mobilenumber" name="u_mobilenumber" placeholder="شماره موبایل" type="text" required>
								</div>
							</div>
							
							<textarea class="form-control" id="message" name="message" placeholder="پیام شما" type="text" required rows="5">
							</textarea></br>
							<div class="row">
								<div class="col-sm-12 form-group">
									<button class="btn btn-default pull-left" type="submit">
										ارسال
									</button>
								</div>
							</div>
						</form>
					</div>
			
			<?php include 'footer.php' ?>	
			