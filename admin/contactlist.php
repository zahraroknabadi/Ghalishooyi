		<?php include 'body.php';

			$conn = dbConnect();
			
			$sql = "SELECT id, u_name, u_phonenumber,message FROM contact";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				?>

								<div id="main_container"  class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
									<h3 class="topic">پیام های کاربران</h3>
									<table class="table ">
										<thead>
											<th style="text-align: center; ">شناسه</th>
											<th style="text-align: center; ">نام</th>
											<th style="text-align: center; ">تلفن</th>
											<th style="text-align: center; ">پیام</th>
											<th style="text-align: center; ">جزئیات</th>
											<th style="text-align: center; ">حذف</th>
										</thead>
									</table>
									<div class="table-wrapper-scroll-y">
										<table class="table table-bordered">
											<thead>
												<tr style="color:#05abad; text-align: center; font-family:IRANSans;">
													<td style="text-align: center; ">شناسه</td>
													<td style="text-align: center; ">نام</td>
													<td style="text-align: center; ">تلفن</td>
													<td style="text-align: center; ">پیام</td>
													<td style="text-align: center; ">جزئیات</td>
													<td style="text-align: center; ">حذف</td>																						
												</tr>
											</thead>
											<?php
											while($row = $result->fetch_assoc()) {
												$id = $row['id'];
												echo "<tbody>
														<tr id='message_$id' style='font-family:IRANSans; font-size:13px;'>
															<td>{$row['id']}</td>
															<td class='longText'>{$row['u_name']}</td>
															<td class='longText'>{$row['u_phonenumber']}</td>
															<td class='longText'>{$row['message']}</td>
															<td><a style='color:#0d595a;' href='contactDetail.php?id={$id}'>جزئیات</a></td>
															<td class='deleteMessage'><button class='btnDelete' onclick='deleteMessage($id)' id='del_$id'>حذف</button></td>										
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
<?php include 'footer.php';?>
	

	
	
	

