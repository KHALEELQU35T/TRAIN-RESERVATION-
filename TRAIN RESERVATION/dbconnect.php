<?php 
$dbhost = 'localhost';
$dbname = 'khalil5';
$dbuser = 'root';
$dbpass = '';

try {
	$db = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
	echo "Connection error: ".$e->getMessage();
}
?>