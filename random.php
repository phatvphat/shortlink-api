<?php
/**
	* Edited @ PvP Phát Nguyễn ^^ *
	* https://fb.me/pvp.phatnguyen *
**/


include 'func/shortlink.php';

$link = 'https://www.facebook.com/pvp.phatnguyen'; // Link cần rút gọn

function shortlink($link){
	$a = array('adf','shorte');
	$random_key = array_rand($a); // Lấy ngẫu nhiên số và so sánh // Tỉ lệ trùng lần nữa 70% :v

	switch($a[$random_key]){ // so sánh xem nó cho ra thằng nào thì rút gọn bằng thằng đó...
		case 'adf':
			$short_link = get_adf($link);
		break;
		case 'shorte':
			$short_link = get_shorte($link);
		break;
	}
return $short_link; // Hiển thị link ngẫu nhiên // P/s: Cho ra link nào nhở... :))))
}

echo shortlink($link); // Mẫu thử
?>
