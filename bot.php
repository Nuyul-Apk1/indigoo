<?php

function fetch_value($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}

// ☆Login Boss☆

$inciude = "config.php";
system("clear");
// Warna
$biru="\033[1;34m";
$kuning="\033[1;33m";
$putih="\033[1;37m";
$banner="\033[1;32m";
sleep(1);
$banner = "\033[1;33m
____        _                     _
| __ )  ___ | |_    __ _ _ __   __| |_ __ ___
|  _ \ / _ \| __|  / _` | '_ \ / _` | '__/ _ \
| |_) | (_) | |_  | (_| | | | | (_| | | |  __/
|____/ \___/ \__|  \__,_|_| |_|\__,_|_|  \___|
$banner<===============================>
$banner ■\033[1;33m■■■■■■■                  
$banner ■\033[1;37m■■■■■■■ SUBCRIBE          
$banner ■\033[1;33m■■■■■■■■■■■■■■■■■             
$banner ■\033[1;37m■■■■■■■ CHANEL ANDRE 007          
$banner ■\033[1;33m■■■■■■■■■■■■■■■■■             
$banner ■\033[1;37m■■■■■■■ NUYUL WEB INDIGOO
$banner ■\033[1;33m■■■■■■■■■■■■■■■■■
";
sleep(2);
echo "CHANEL ANDRE 007";
echo $banner. "\n";
sleep(2);
echo "Username: ";
$user=trim(fgets(STDIN));

// Login 1

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://indigocoin.cloud/users/login");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$ua = array(
'user-agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-G532G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.96 Mobile Safari/537.36');
'cookie: __cfduid=' . $cfduid;
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = 'username=rohitjely%40gmail.com&password=andre4646';
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$json = json_decode($result);
$respon = $json->desc;
echo $respon."\n\n";
sleep(2);

// dasboard 1

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://indigocoin.cloud/cabinet");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
$a = explode( '<h2 class="total gh">' , $result);
$b = explode( '</h2>' , $a[1]);
echo "[¤]  ".$b[0]."\n\n";
echo(2);
echo "[¤] Mengambil bonus GKS. . .\n";
sleep(1);

// ☆dasboard  get bonus
while(true){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://indigocoin.cloud/bonus/get_bonus");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
$json = json_decode($result);
$responbonus = $json->desc;
$json = json_decode($result);
$detik = $json->seconds_to_bonus;
echo "\r[¤] $responbonus";

// Dasboard 2

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://indigocoin.cloud/cabinet");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
$a = explode( ' <h2 class="total gh">' , $result);
$b = explode( ' </h2> ' , $a[1]);
echo "¤  " .$b[0]. "\n\n";
sleep(1);

// menungu

for ($×=$detik;$×>0;$×--){
echo "\r   \r";
echo "\r    Menungu  => " .$×. "detik ";
sleep(1);
}

// Refresh cfuid

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://indigocoin.cloud/users/login");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$ua = array(
'user-agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-G532G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.96 Mobile Safari/537.36');
'cookie: __cfduid=' . $cfduid;
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = 'username=rohitjely%40gmail.com&password=andre4646';
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);


}