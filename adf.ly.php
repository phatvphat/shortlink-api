<?php
/**
	* Edited @ PvP Phát Nguyễn ^^ *
	* https://fb.me/pvp.phatnguyen *
**/

// Lấy User ID và Public API Key tại https://adf.ly/publisher/api
$user_id = '10644579'; // User ID của mình
$api_key = 'b6c392229cecac6734cabb311183b595'; // Public API Key của mình
$url = 'https://www.facebook.com/pvp.phatnguyen'; // Link cần rút gọn

$curl_url = 'http://api.adf.ly/api.php?key='.$api_key.'&uid='.$user_id.'&advert_type=int&domain=adf.ly&url='.$url;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $curl_url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$adfly_link = curl_exec($ch);
curl_close($ch);

echo $adfly_link; // Hiển thị link đã rút gọn
?>
