<?php 
include 'header.php';
$conn = dbConnect();
?>
				<div class="container-fluid">
					<div class="wrapper">
						<div class="row">


							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:30px; text-align:center;">
								<?php
									$id=$_GET['id'];
								
									$sql = "select washkind , carpetkind from wash_type,carpet_types where id = {$id}";
									$result = $conn->query($sql);
										if ($result->num_rows > 0) {
								?>
										<table class="table table-bordered " style="text-align: center; table-layout:fixed; margin-top:50px;" >
									<thead>
										<tr >
											<th style="text-align: center;">نوع شستشو</th>
											<th style="text-align: center;">نوع فرش</th>	
										</tr>
									</thead>
									<?php
									while($row = $result->fetch_assoc()) {
										$id = $row['id'];
										echo "<tbody><tr>
											<td>{$row['washkind']}</td>
											<td>{$row['carpetkind']}</td>		
											</tr></tbody>";
									}
									
									
									
									?>
								
								</table>
							</div>	
	
							</div>
						</div>
				</div>
			
			<?php
				$conn->close();
			?>