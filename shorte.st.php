<?php
/**
	* Edited @ PvP Phát Nguyễn ^^ *
	* https://fb.me/pvp.phatnguyen *
**/

// Lấy API Token tại https://shorte.st/tools/quick || Copy token trong dòng Your API token
$token_api = 'd855c9cc16b36fa30d118bdafc4c9a72'; // Token API
$url = 'https://www.facebook.com/pvp.phatnguyen'; // Link cần rút gọn

$curl_url = 'https://api.shorte.st/s/'.$token_api.'/'.$url;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $curl_url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

$array = json_decode($result,true);
$shortest = $array['shortenedUrl'];
// $shortest = str_replace('ceesty.com','sh.st',$shortest); // thay ceesty.com thành sh.st hoặc khỏi cũng được ^^ vì giờ nó chuyển sang ceesty.com rùi

echo $shortest; // Hiển thị link đã rút gọn
?>
