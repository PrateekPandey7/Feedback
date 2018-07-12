<?php
	session_start();
	unset($_SESSION['is_auth']);
	$string = $_GET["name"];
	//echo $string;
	$contents = file_get_contents('database.txt');
	//echo $contents."-";
	$contents = str_replace($string, '', $contents);
	//echo $contents."-";
	file_put_contents('database.txt', $contents);
	header("Location: signup.php");
	exit;
?>