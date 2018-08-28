		<?php include 'body.php';

			$conn = dbConnect();
			
			$sql = "SELECT id, u_name, u_phonenumber,message FROM contact";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				?>

								<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<h3 style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:100px; margin-top:100px;">پیام های کاربران</h3>
									<table class="table table-bordered">
										<thead>
											<tr style="color:#05abad; text-align: center; font-family:IRANSans;">
												<th style="text-align: center; ">شناسه</th>
												<th style="text-align: center; ">نام</th>
												<th style="text-align: center; ">تلفن</th>
												<th style="text-align: center; ">پیام</th>
												<th style="text-align: center; ">جزئیات</th>
												<th style="text-align: center; ">حذف</th>																						
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
														<td class='deleteMessage'><a style='color:#e72626;' onclick='deleteMessage($id)' id='del_$id'>حذف</a></td>										
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
	

	
	
	

