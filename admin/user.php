<?php include 'body.php';

$conn = dbConnect();

$sql =" SELECT id,username FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
			<div id="main_container"  class="col-lg-9 col-md-9 col-sm-9 col-xs-12" >
				<h3 class="topic">اسامی کاربری</h3>
				<table class="table ">
					<thead>
						<th>شناسه</th>
						<th>نام کاربری</th>
						<th>حذف</th>
					</thead>
				</table>
				<div class="table-wrapper-scroll-y">
					<table class="table table-bordered">
					<!--	<thead>
								<th style="text-align: center; font-family:IRANSans; font-size:13px;">شناسه</th>
								<th style="text-align: center; font-family:IRANSans; font-size:13px;">نام کاربری</th>	
								<th style="text-align: center; font-family:IRANSans; font-size:13px;">حذف</th>										
							</tr>
						</thead>-->
						<?php
						while($row = $result->fetch_assoc()) {
							$id = $row['id'];
							echo "<tbody>
									<tr id='user_$id'>
										<td style='font-family:IRANSans; font-size:10px;'>{$row['id']}</td>
										<td style='font-family:IRANSans; font-size:10px;'>{$row['username']}</td>
										<td class='delete' id='del_id' style='font-family:IRANSans; font-size:10px;'><button class='btnDelete' onclick='deleteUser($id)' id='del_$id'>حذف</button></td>								
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

	.border-color:{
		#fff;
	}
	

	tr:nth-child(even) {background-color: red !important;}
	</style>
