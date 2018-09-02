<?php include 'body.php';

$conn = dbConnect();

$sql =" SELECT id,username FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
				<div id="main_container"  class="col-lg-9 col-md-9 col-sm-9 col-xs-12" >
				<h3 id="head3" style="color:#05abad; font-family:IRANSans; text-align:center; margin-bottom:100px; margin-top:100px;">اسامی کاربری</h3>
					<table class="table table-bordered " border="1" style="text-align: center; table-layout:fixed; direction:rtl; margin-bottom: 193px;" >
						<thead>
							<tr style='color:#05abad;'>
								<th style="text-align: center; font-family:IRANSans; font-size:13px;">شناسه</th>
								<th style="text-align: center; font-family:IRANSans; font-size:13px;">نام کاربری</th>	
								<th style="text-align: center; font-family:IRANSans; font-size:13px;">حذف</th>										
							</tr>
						</thead>
						<?php
						while($row = $result->fetch_assoc()) {
							$id = $row['id'];
							echo "<tbody>
									<tr id='user_$id'>
										<td style='font-family:IRANSans; font-size:10px;'>{$row['id']}</td>
										<td style='font-family:IRANSans; font-size:10px;'>{$row['username']}</td>
										<td class='delete' id='del_id' style='font-family:IRANSans; font-size:10px;'><a style='color:#e72626;' onclick='deleteUser($id)' id='del_$id'>حذف</a></td>								
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

	<style>

	.border-color:{
		#fff;
	}
	
	</style>
