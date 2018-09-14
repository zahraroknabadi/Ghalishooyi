<?php include'header.php'?>
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:80px; margin-top:80px;">پیگیری سفارش</h3>
				<form name="form1" method="post" action="checkOrder.php" id="frmOrder">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-2  form-group">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-9 form-group">
							<input class="form-control" name="id" type="text" id="id" required >
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
							<label for="washkind">:شماره سفارش</label>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-2  form-group">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-2 form-group">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-9 form-group">
								<input class="form-control" name="mymobilenumber" type="Password" id="mymobilenumber" required >
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-group">
							<label for="mobilenumber">:شماره همراه</label>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-2 form-group">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-2 col-xs-12 form-group">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-8 col-xs-12 form-group" style="margin-bottom:128px;">
							<div class="submit" style="margin-bottom: 49px;">
								<input class="submit" type="submit" name="Submit" value="ورود"  style="color:#fff; background-color:#05abad; font-family:IRANSans; padding: 5px 25px; border-radius: 2px; border: #05abad;">
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-2 col-xs-12 form-group">
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>


<?php include'footer.php'?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

