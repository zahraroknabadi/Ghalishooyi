<?php include 'header.php' ?>
			<?php
			$conn    = Connect();
			$sql = "SELECT  id,carpetkind, washkind ,price FROM type INNER JOIN carpet_type ON u_carpetid = carpet_type.carpetid INNER JOIN wash_type ON u_washid = wash_type.washid ";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				?>
				<div class="container-fluid">
					<div class="wrapper">
						<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:80px; margin-top:260px;">خدمات ما</h3>    
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:100px;">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th style="text-align: center;">قیمت به ازای متر</th>
												<th style="text-align: center;">نوع خدمت</th>
												<th style="text-align: center;">نوع فرش</th>
											</tr>
										</thead>
										<?php
										while($row = $result->fetch_assoc()) {
											
											echo "<tbody><tr 'tyle='font-family:IRANSans;'>
												<td class='longText' style=' font-size:13px;'>{$row['price']}</td>
												<td class='longText' style=' font-size:13px;'>{$row['washkind']}</td>
												<td class='longText' style=' font-size:13px;'>{$row['carpetkind']}</td>									
											</tr></tbody>";
										}
										?>
									</table>
								</div>
								
					</div>
				</div>

			<?php 
			} else {
				echo "نتیجه ای یافت نشد";
			}
			$conn->close();
			?> 
<?php include 'footer.php' ?>

			
			