<?php include 'header.php';
		
		$conn = dbConnect();
		
		?>
		
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<h3 style="color:#05abad; font-family:IRANSans; text-align:right; margin-bottom:100px; margin-top:100px;">جزئیات سفارش</h3>
						
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
								<?php
									$id=$_SESSION["id"];
								
									$sql = "select u_address from orders where id = '$id'";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
								<div class="alert alert-info" style="font-family:IRANSans; font-size:13px;">
										<?php
											while($row = $result->fetch_assoc()) {
												        echo "آدرس:" . $row["u_address"] . "<br>";
											}
										} else {
											echo "0 results";
										}
										?>
								</div>
								<?php
									$conn->close();
								?>
										
								
							</div>
								
						</div>
						<?php include 'sidebar.php' ?>
					
			
			
			<?php include 'footer.php';?>
		
		
		<style>
		.h3{
			font-family:IRANSans;
			color:#05abad !important; 
			text-align:center;
			font-size: 32px;

		}
		</style>