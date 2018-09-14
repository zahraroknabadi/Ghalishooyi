<div id="main_container">
	<div >
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="modal" id="modalDel">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						  <h4 class="modal-title" id="headerDel">کاربر گرامی</h4>
						</div>
						<div class="modal-body">
						  <p id="successDel">.اطلاعات مورد نظر با موفقیت حذف شد</p>
						</div>
						<div class="modal-footer">
							<button type="button" id="btnDel" class="btn" data-dismiss="modal">بستن</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal" id="modalSub">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						  <h4 class="modal-title" id="headerSub">کاربر گرامی</h4>
						</div>
						<div class="modal-body">
						  <p id="successSub">.اطلاعات مورد نظر با موفقیت ثبت شد</p>
						</div>
						<div class="modal-footer">
							<button type="button" id="btnSub" class="btn" data-dismiss="modal">بستن</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal" id="modalAdmin">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						  <h4 class="modal-title" id="headerAdmin">کاربر گرامی</h4>
						</div>
						<div class="modal-body">
						  <p id="successAdmin">.متاسفانه شما قادر به حذف ادمین اصلی نیستید</p>
						</div>
						<div class="modal-footer">
							<button type="button" id="btnAdmin" class="btn" data-dismiss="modal">بستن</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
$page = isset($_GET['page']) ? $_GET['page'] : '404.php';
 if(file_exists($page)){
	require $page;
}
else{
	require '404.php';
}

?>
	<div id="loading" class="loading">
		<center>
				<img class="img-responsive" src="images/loading.gif" />
				<br>
				<h3 class="loading_title">...در حال بارگذاری</h3>
		</center>
	</div>
