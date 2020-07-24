<?php
// Maakt verbinding met de server
$servername = "localhost";
$username = "root";
$password = "root";
$db = "Chewie";


$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
  die("Verbinding onderbroken " . $conn->connect_error);
}

//Website Settings (Soon)

$SSL_Encryption = 'http';

$URL_Redirect = 'localhost';

$Domain_Type = '';  //Leave blank if using on 127.0.0.1 (localhost)

//File & Folder Tree Settings

$Core_Folder = 'Core';

$HTML_Folder = 'HTML';

$IMP_Folder = 'Internal';

$Scale_Folder = 'Console';

$Back_Slash = '/';

//Amount Of Points Each Refresh

$amount = 1;

$str_score = 1;
