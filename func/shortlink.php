<?php
/**
	* Edited @ PvP Phát Nguyễn ^^ *
	* https://fb.me/pvp.phatnguyen *
**/


// Hàm curl link
function curl_($link){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
return $result; // Trả về kết quả curl được
}

// Dưới đây là hàm rút link adf.ly
function get_adf($link){
	// Lấy User ID và Public API Key tại https://adf.ly/publisher/api
	$user_id = '10644579'; // User ID của mình
	$api_key = 'b6c392229cecac6734cabb311183b595'; // Public API Key của mình

	$curl_url = 'http://api.adf.ly/api.php?key='.$api_key.'&uid='.$user_id.'&advert_type=int&domain=adf.ly&url='.$link;

	$result = curl_($curl_url); // Curl link

return $result; // Hiển thị link đã rút gọn
}

// Còn dưới đây là hàm rút link shorte.st
function get_shorte($link){
	// Lấy API Token tại https://shorte.st/tools/quick || Copy token trong dòng Your API token
	$token_api = 'd855c9cc16b36fa30d118bdafc4c9a72'; // Token API

	$curl_url = 'https://api.shorte.st/s/'.$token_api.'/'.$link;

	$result = curl_($curl_url); // Curl link

	$array = json_decode($result,true);
	$shortest = $array['shortenedUrl'];
	// $shortest = str_replace('ceesty.com','sh.st',$shortest); // thay ceesty.com thành sh.st hoặc khỏi cũng được ^^ vì giờ nó chuyển sang ceesty.com rùi

return $shortest; // Hiển thị link đã rút gọn
}
?>
