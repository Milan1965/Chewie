<?php

require_once('Configuration/config.php');

 session_start();

if(isset($_SESSION['count'])) {
	$_SESSION['count'] = $_SESSION['count'] + $amount;
} else {
	$_SESSION['count'] = $str_score;
	
	
}

echo "<center><h1>Je Score<h1>" . $_SESSION['count'] . '</center>&nbsp;&nbsp;&nbsp;&nbsp;</h1>'; 
echo '<h2>Score Multiplier: <br><hr> x' . $amount . '</h2>';



$cookie_file = './cookies.txt';

if (! file_exists($cookie_file) || ! is_writable($cookie_file)){
    echo 'Cookie TXT kon niet gevonden worden!.';
    exit;
	
}//Veilige opslag functie!

$ch = curl_init (html_entity_decode("http://localhost/Core/system.php"));
curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie_file);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_HEADER, 1);
curl_setopt ($ch, CURLOPT_COOKIEJAR, realpath($cookie_file) );

$output = curl_exec ($ch);





echo '<button class="button" "type="button" onclick="document.cookie=&quot;PHPSESSID=;expires=; path=/&quot;">Reset</button></label>';

?>
