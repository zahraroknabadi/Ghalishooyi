<?php include'body.php'?>
			<div id="main_container"  class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<h3 class="topic">پیگیری سفارش</h3>
				<form name="form1" method="post" action="checkOrder.php" >
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 form-group">
							<input class="form-control" name="id" type="text" id="id" required />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
							<label for="washkind" style="color:#434444; font-family:IRANSans;">:شماره سفارش</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 form-group">
								<input class="form-control" name="mymobilenumber" type="Password" id="mymobilenumber" required >
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
							<label for="mobilenumber" style="color:#434444; font-family:IRANSans;">:شماره همراه</label>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
							<div class="submit">
								<input class="submit" type="submit" name="Submit" value="پیگیری"  style="color:#fff; background-color:#05abad; font-family:IRANSans; padding: 5px 25px; border-radius: 2px; border: #05abad;">
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
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

