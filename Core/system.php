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








echo '<button class="button" "type="button" onclick="document.cookie=&quot;PHPSESSID=;expires=; path=/&quot;">Reset</button></label>';

?>
