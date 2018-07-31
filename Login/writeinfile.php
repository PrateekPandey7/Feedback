<?php

	$u = '';$p = '';$e = '';
	
	if(isset($_POST["signup"]))
	{
		$u =  $_POST["username"];
		$p =  $_POST["password"];
		$topic = $_POST["topic"];
		$t = substr($topic,0,3);
		$string = substr($u,0,3).substr($p,0,3).substr($topic,0,3);
		$str = $string.time();
		$r = hash('sha512', $str, false);
		$myfile = fopen("database.txt","a") or die("Please try again Later");
		$search = PHP_EOL.substr($r,0,10).'__'.$u.'__'.$topic;
		$lines = file('database.txt');
		$flag = 0;
		foreach($lines as $line)
		{
  			if(strpos($line, $search) !== false)
    		{	
    			$flag = 1;
    			$message = "This Username Account already exist";
    		}
		}
		if($flag == 0)
		{
			fwrite($myfile, $search);
			$find = $search;
			$data = '';
			for($i = 0; $i < strlen($find); $i++)
			{
				if($find[$i] == '"' || $find[$i] == "'")
					continue;
				else
					$data = $data.$find[$i];
			}
			header('Location: download.php?name='.urlencode($data));
		}
		fclose($myfile);
	}

?>