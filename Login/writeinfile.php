<?php

	$u = '';$p = '';$e = '';
	
	if(isset($_POST["signup"]))
	{
		$u =  $_POST["username"];
		$p =  $_POST["password"];
		$topic = $_POST["topic"];
		$t = substr($topic,0,3);
		$string = substr($u,0,3).substr($p,0,3).substr($topic,0,3);
		$r = hash('sha512', $string, false);
		$myfile = fopen("database.txt","a") or die("Please try again Later");
		$search = substr($r,0,10).'/'.$u.'/'.$topic;
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

			header('Location: download.php?name='.urlencode($search));
		}
		fclose($myfile);
	}

?>