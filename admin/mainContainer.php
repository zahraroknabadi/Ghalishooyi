<div id="main_container">
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		<div id="message"></div>
	</div>
	<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'body.php';
	$page .= "body.php"
	/* if(file_exists($page)){
		require $page;
	}
	else{
		require '404.php';
	}


	} */
	?>
</div>
<div id="loading" class="loading">
	<center>
		<img src="images/loading.gif" />
		<br>
		<h3 class="loading_title">...در حال بارگذاری</h3>
	</center>
</div>