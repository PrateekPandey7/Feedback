<?php
	session_start();
	unset($_SESSION['is_auth']);
	header("Location: index.php");
	exit;
?>