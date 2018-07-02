<?php

	$u = '';$p = '';$e = '';
	
	if(isset($_POST["login"]))
	{
		$u =  $_POST["username"];
		$p =  $_POST["password"];
		$e =  $_POST["email"];
		$string = $u.$p.$e;
		$r = hash('sha512', $string, false)."\n";
		$myfile = fopen("database.txt","a") or die("Please try again Later");

		$search = $r;
		$lines = file('database.txt');
		$flag = 0;
		foreach($lines as $line)
		{
  			if(strpos($line, $search) !== false)
    		{	
    			$flag = 1;
    		}
		}
		if($flag == 0)
		{
			$message = "Wrong Credentials!!";
			header("Location:index.php");
		}
		else if($flag == 1)
		{
			session_start();
			$_SESSION['is_auth'] = true;
			header('location: download.php');
            exit;
		}
		fclose($myfile);
	}
?>
