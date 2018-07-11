<?php

	$u = '';$p = '';$e = '';
	
	if(isset($_POST["login"]))
	{
		if(!empty($_POST["user"]))
		{
			$p = $_POST["password"];
			$string = $p;
			$myfile = fopen("database.txt","a") or die("Please try again Later");
			$lines = file('database.txt');
			$flag = 0;
			$find = '';
			foreach($lines as $line)
			{
		  		if(strpos($line, $string) !== false)
		    	{	
		    		$find = $line;
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
				header('Location: download.php?name='.urlencode($find));
			}
		}	
		else
			{
				$p =  $_POST["password"];
				$myfile = fopen("database.txt","a") or die("Please try again Later");
				$search = $p;
				$lines = file('database.txt');
				$flag = 0;
				$find = '';
				foreach($lines as $line)
				{
		  			if(strpos($line, $search) !== false)
		    		{	
		    			$flag = 1;
		    			$find = $line;
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
					$loc = '../index.php?name='.urlencode($find);
					header('location:'.$loc);
		            exit;
				}
				fclose($myfile);
			}
	}
?>
