<?php include 'body.php' ?>
			<?php
			$conn    = dbConnect();
			$sql = "SELECT  id,carpetkind, washkind ,price FROM type INNER JOIN carpet_type ON u_carpetid = carpet_type.carpetid INNER JOIN wash_type ON u_washid = wash_type.washid ";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				?>
								<div id="main_container" class="col-lg-9 col-md-9 col-sm-9 col-xs-12" >
									<h3 class="topic">لیست خدمات و قیمت ها</h3>
									<table class="table">
										<thead>
											<th style="text-align: center;">شناسه</th>
											<th style="text-align: center;">نوع فرش</th>
											<th style="text-align: center;">نوع خدمت</th>
											<th style="text-align: center;">قیمت به ازای متر</th>
											<th style="text-align: center;">حذف</th>
										</thead>
									</table>
									<div class="table-wrapper-scroll-y">
										<table class="table table-bordered">
										<thead>
											<tr style="color:#05abad; font-family:IRANSans;">
												<td style="text-align: center;">شناسه</td>
												<td style="text-align: center;">نوع فرش</td>
												<td style="text-align: center;">نوع خدمت</td>
												<td style="text-align: center;">قیمت به ازای متر</td>
												<td style="text-align: center;">حذف</td>
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
														<td><button class='btnDelete' onclick='deleteService($id)' id='del_$id'>حذف</button></td>
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


			
			