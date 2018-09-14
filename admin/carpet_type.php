<?php include 'body.php';

		$conn = dbConnect();

		

		$sql = "SELECT carpetid, carpetkind FROM carpet_type";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
?>
							<div id="main_container" class="col-lg-9 col-md-9 col-sm-9 col-xs-12" >
								<h3 class="topic">انواع فرش</h3>
								<table class="table">
									<thead>
										<th>شناسه</th>
										<th>نوع شستشو</th>
										<th>حذف</th>
									</thead>
								</table>
								<div class="table-wrapper-scroll-y">
									<table class="table table-bordered">
										<thead>
											<tr style="color:#05abad; font-family:IRANSans; font-size: 18px;">
												<td style="text-align: center;">شناسه</td>
												<td style="text-align: center;">نوع فرش</td>	
												<td style="text-align: center;">حذف</td>												
											</tr>
										</thead>
										<?php
										while($row = $result->fetch_assoc()) {
											$id = $row['carpetid'];
											echo "<tbody>
													<tr id='carpet_$id' style='font-family:IRANSans; font-size:13px;'>
													<td>{$row['carpetid']}</td>
													<td>{$row['carpetkind']}</td>			
													<td><button class='btnDelete' onclick='deleteCarpet($id)' id='del_$id'>حذف</button></td>	
													</tr>
												</tbody>";
										}
										
										?>
									</table>
									</div>
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
