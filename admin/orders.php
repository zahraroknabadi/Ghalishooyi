<?php include 'body.php';

$conn = dbConnect();
	
$sql =" SELECT id,u_lastname,u_email,u_metter ,carpetkind ,statuskind FROM `orders` INNER JOIN status_type ON u_statusid = status_type.statusid INNER JOIN carpet_type ON u_carpetid = carpet_type.carpetid INNER JOIN wash_type ON u_washid = wash_type.washid  ";
$result = $conn->query($sql);


			if ($result->num_rows > 0) {
				?>
				

								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:100px; margin-top:100px;">سفارش های کاربران</h3>
									<table class="table table-bordered">
										<thead>
											<tr style="color:#05abad;">
												<th style="text-align: center; font-family:IRANSans;">شناسه</th>
												<th style="text-align: center; font-family:IRANSans;">نام خانوادگی</th>
												<th style="text-align: center; font-family:IRANSans;">نوع فرش</th>
												
												<th style="text-align: center; font-family:IRANSans;">متراژ</th>
												<th style="text-align: center; font-family:IRANSans;">وضعیت</th>
												<th style="text-align: center; font-family:IRANSans;">جزئیات</th>
												<th style="text-align: center; font-family:IRANSans;">حذف</th>											
											</tr>
										</thead>
										<?php
										while($row = $result->fetch_assoc()) {
											$id = $row['id'];
											echo "<tbody>
													<tr id='order_$id'>
														<td style='font-family:IRANSans; font-size:13px;'>{$row['id']}</td>
														<td style='font-family:IRANSans; font-size:13px;'>{$row['u_lastname']}</td>
														<td style='font-family:IRANSans; font-size:13px;'>{$row['carpetkind']}</td>
														
														<td style='font-family:IRANSans; font-size:13px;'>{$row['u_metter']}</td>
														<td style='font-family:IRANSans; font-size:13px;'>{$row['statuskind']}</td>
														<td style='font-family:IRANSans; font-size:13px;'><a style='color:#0d595a;' href='ordersDetail.php?id={$id}'>جزئیات</a></td>
														<td style='font-family:IRANSans; font-size:13px;'><a style='color:#e72626;' onclick='deleteOrder($id)' id='del_$id'>حذف</a></td>										
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
<?php include 'footer.php';?>
	

	
	
	

