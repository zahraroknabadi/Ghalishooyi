<?php
function sendSMS($to,$text){
	$text=urlencode(trim($text));
	$to=urlencode(substr(trim($to),1));
	$url = "http://87.107.121.52/post/sendsms.ashx?from=50001333192202&to={$to}&text={$text}&password=1469&username=9382529430";
	$result = file_get_contents($url);
	//echo $result;
	if ($result == '1-0')
		return true;
	return false;
}
?>