<?php include 'body.php' ?>
			<?php
			$conn    = dbConnect();
			$sql = "SELECT  id,carpetkind, washkind ,price FROM type INNER JOIN carpet_type ON u_carpetid = carpet_type.carpetid INNER JOIN wash_type ON u_washid = wash_type.washid ";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				?>
								<div id="main_container" class="col-lg-9 col-md-9 col-sm-9 col-xs-12" style="margin-bottom:100px;">
									<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:100px; margin-top:100px;">لیست خدمات و قیمت ها</h3>
									<table class="table table-bordered">
										<thead>
											<tr style="color:#05abad; font-family:IRANSans;">
												<th style="text-align: center;">شناسه</th>
												<th style="text-align: center;">نوع فرش</th>
												<th style="text-align: center;">نوع خدمت</th>
												<th style="text-align: center;">قیمت به ازای متر</th>
												<th style="text-align: center;">حذف</th>
											
											</tr>
										</thead>
										<?php
										while($row = $result->fetch_assoc()) {
											$id = $row['id'];
											echo "<tbody>
													<tr id='service_$id' style='font-family:IRANSans; font-size:13px;'>
														<td>{$row['id']}</td>
														<td>{$row['carpetkind']}</td>
														<td>{$row['washkind']}</td>
														<td>{$row['price']}</td>	
														<td><a style='color:#e72626;' onclick='deleteService($id)' id='del_$id'>حذف</a></td>
													</tr>
											       </tbody>";
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


			
			