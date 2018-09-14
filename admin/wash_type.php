<?php include 'body.php';

		$conn = dbConnect();

		

		$sql = "SELECT washid, washkind FROM wash_type";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
?>
							<div id="main_container" class="col-lg-9 col-md-9 col-sm-9 col-xs-12" >
								<h3 class="topic">انواع شستشو</h3>
								<table class="table">
									<thead>
										<th>شناسه</th>
										<th>نوع شستشو</th>
										<th>حذف</th>
									</thead>
								</table>
								<div class="table-wrapper-scroll-y">
									<table class="table table-bordered">
										<?php
										while($row = $result->fetch_assoc()) {
											$id = $row['washid'];
											echo "<tbody><tr id='wash_$id' style='font-family:IRANSans; font-size:13px;'>
												<td>{$row['washid']}</td>
												<td>{$row['washkind']}</td>			
												<td><button class='btnDelete'  onclick='deleteWash($id)' id='del_$id'>حذف</button></td>	
												</tr></tbody>";
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
