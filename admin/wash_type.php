<?php include 'body.php';

		$conn = dbConnect();

		

		$sql = "SELECT washid, washkind FROM wash_type";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
?>
							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" style="direction:rtl;">
								<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:100px; margin-top:100px;">انواع شستشو</h3>
								<table class="table table-bordered " style="text-align: center; table-layout:fixed; margin-top:50px;" >
									<thead>
										<tr style="color:#05abad; font-family:IRANSans; font-size: 18px;">
											<th style="text-align: center;">شناسه</th>
											<th style="text-align: center;">نوع شستشو</th>	
											<th style="text-align: center;">حذف</th>												
										</tr>
									</thead>
									<?php
									while($row = $result->fetch_assoc()) {
										$id = $row['washid'];
										echo "<tbody><tr id='wash_$id' style='font-family:IRANSans; font-size:13px;'>
											<td>{$row['washid']}</td>
											<td>{$row['washkind']}</td>			
											<td><a style='color:#e72626;' onclick='deleteWash($id)' id='del_$id'>حذف</a></td>	
											</tr></tbody>";
									}
									
									?>
								
								</table>
							</div>
				<?php 
			} else {
				echo "نتیجه ای یافت نشد";
			}
			$conn->close();
			?> 
			
	<?php include 'footer.php' ?>
			<style>
			
			border-color: #fff;}
			
			</style>
