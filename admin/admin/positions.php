<?php include 'header.php' ?>	
<?php include 'sidebar.php' ?>	
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<h3 style="color:#05abad; font-family:IRANSans; text-align:right; margin-bottom:100px; margin-top:100px;">ثبت سفارش جدید</h3>
							<form action="submitPosition.php" method="post" >
								<div class="row">
									<?php
									require_once 'config.php';
									 
									
									$conn    =dbConnect();
									
									
									
									$sql = "SELECT positionid,positionkind FROM position_type";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										
									?>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-10 form-group" style="font-family:IRANSans; padding-right: 0px; padding-left: 10px;">
										<select name='u_positionid' class='form-control' style="text-align:right;" >
										<?php
										$id=$_GET['id'];
										while($row = $result->fetch_assoc()) {
											$id=$row['positionid'];
											echo "
												<option value='{$id}'>{$row['positionkind']}</option>
												";
										}
										?>
										</select>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
										<label for="positionkind" style="color:#434444; font-family:IRANSans; ">:وضعیت سفارش</label>
									</div>
									<?php
									} else {
										echo "نتیجه ای یافت نشد";
									}
									?>
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
				
			
			<?php include 'footer.php' ?>	