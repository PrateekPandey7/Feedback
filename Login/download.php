<?php 
	$token = $_GET["name"];
	$arr = explode("__", $token,3);
	$code = $arr[0];
	$coord = $arr[1];
	$progname = $arr[2];
	$token = $code.'__'.$coord.'__'.$progname;
	$string = $progname.'__'.$coord;
	$file = $string;
?>
<html lang="en">
	  
	<head>
	    
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	    <link rel="icon" href="../npc.jpg">
	   	<link href="../css/confirmationstyle.css" rel="stylesheet">
	   	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">


	    <title>Confirmation Page</title>

	</head>
  
	<body>

		<div class = "mainHeading">
			<img src = "../npc.jpg">
			<p class = "heading1"><strong>National Productivity Council</strong><p>
			<p class = "subh1">(Under Department of Industrial Policy & Promotion Ministry of Commerce & Industry, Govt. of India)</p>
		</div>

		<div class = "information">
			<div class = "value">
				<div class="wrapper">
  					<span class="square individual">
    				<a class = "link" <?php echo "href=logout.php?name=".urlencode($token)?>>Delete This Account</a>
  					</span>
				</div>
				<h3>The passcode is : <?php echo $code ?></h3>
				<div class="wrapper">
  					<span class="square individual">
    				<a class = "link" <?php echo "href=../Excel/downloadExcel.php?name=".urlencode($file)?> target = '_blank'>Download Feedback Excel Report</a>
  					</span>
				</div>
				<div class="wrapper">
  					<span class="square individual">
    				<a class = "link" <?php echo "href=../FeedbackForms/zip_folders.php?name=".urlencode($string)?> target = '_blank'>Download Feedback PDF Reports</a>
  					</span>
				</div>
			</div>
		</div>

	</body>

</html>