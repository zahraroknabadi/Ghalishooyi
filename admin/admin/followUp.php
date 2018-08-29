<?php include'header.php'?>
<?php include'sidebar.php'?>
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
				<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:100px; padding-left: 180px;">پیگیری سفارش</h3>
				<form name="form1" method="post" action="checkOrder.php" >
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 form-group">
							<input class="form-control" name="id" type="text" id="id" required >
							<!--<span style="font-family: IRANSans; font-size: 13px; color:#434444;">شناسه</span>-->
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
							<label for="washkind" style="color:#434444; font-family:IRANSans;">:نوع فرش</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 form-group">
								<input class="form-control" name="mymobilenumber" type="Password" id="mymobilenumber" required >
								<!--<span style="font-family: IRANSans; font-size: 13px; color:#434444;">شماره موبایل</span>-->
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
							<label for="mobilenumber" style="color:#434444; font-family:IRANSans;">:شماره همراه</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group" style="margin-bottom:128px;">
							<div class="submit" style="margin-bottom: 49px;">
								<input class="submit" type="submit" name="Submit" value="ورود"  style="color:#fff; background-color:#05abad; font-family:IRANSans; padding: 5px 25px; border-radius: 2px; border: #05abad;">
							</div>
						</div>
					</div>
				</form>
			</div>
		</body>


<?php include'footer.php'?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

