<?php
	session_start();
	unset($_SESSION['is_auth']);
	$string = $_GET["name"];
	$contents = file_get_contents('database.txt');
	$contents = str_replace($string, '', $contents);
	file_put_contents('database.txt', $contents);
	header("Location: index.php");
	exit;
?>