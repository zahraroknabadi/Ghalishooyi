<?php include 'header.php';

$conn = dbConnect();

$sql = "SELECT id, carpetkind, washkind, price FROM type";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
		<?php include 'sidebar.php';?>
				<div class="container-fluid">
					<div class="wrapper">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:30px;">
								<h3 style="font-family:B Yekan; font-size:30px; color:#05abad; text-align:center;">لیست قیمت
								</h3>
								<table class="table table-bordered " style="text-align: center; table-layout:fixed; margin-top:50px;" >
									<thead>
										<tr >
											<th style="text-align: center; font-family:IRANSans; font-size:18px;">شناسه</th>
											<th style="text-align: center; font-family:IRANSans; font-size:18px;">نوع شستشو</th>
											<th style="text-align: center; font-family:IRANSans; font-size:18px;">نوع فرش</th>
											<th style="text-align: center;font-family:IRANSans; font-size:18px;">قیمت</th>		
										</tr>
									</thead>
									<?php
									while($row = $result->fetch_assoc()) {
										$id = $row['id'];
										echo "<tbody><tr>
											<td style='font-family:IRANSans; font-size:13px;'>{$row['id']}</td>
											<td style='font-family:IRANSans; font-size:13px;'>{$row['carpetkind']}</td>
											<td style='font-family:IRANSans; font-size:13px;'>{$row['washkind']}</td>
											<td style='font-family:IRANSans; font-size:13px;'>{$row['price']}</td>			
											</tr></tbody>";
									}
									
									
									
									?>
								
								</table>
							</div>
						</div>
					</div>
				</div>

				<?php 
			} else {
				echo "نتیجه ای یافت نشد";
			}
			$conn->close();
			?> 
			

			<style>

			border-color: #fff;}

			</style>