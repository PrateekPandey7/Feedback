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


	    <title>Download Page</title>

	</head>
  
	<body>

		<div class = "mainHeading">
			<img src = "../npc.jpg">
			<p class = "heading1"><strong>National Productivity Council</strong><p>
			<p class = "subh1">(Under Department of Industrial Policy & Promotion Ministry of Commerce & Industry, Govt. of India)</p>
			<p class = "heading2">FEEDBACK FORM</p>
			<p class = "heading3">Control Panel</p>
		</div>

		<div class = "information">
			<div class = "instruction">
				<p><strong>How to obtain feedback from participants?</strong></p>
				<p>1) Please ask the participants to open Online Feedback Form in the browser of their mobile phone/computer.</p>
				<p>2) Please share the Passcode: <strong><?php echo $code ?></strong> that is generated for your program with the participants to login to the Online Feedback Form.
				<p>3) You may request the participants to submit their Feedback of the program attended.</p>
				<br>
				<p><strong>How to generate reports?</strong></p>
				<p>1) To download the <strong>Summary Report</strong> of all feedbacks, please
    				<a class = "link" <?php echo "href=../Excel/downloadExcel.php?name=".urlencode($file)?> target = '_blank'>Click Here</a>
				</p>
				<p>2) To download filled <strong>Feedback Forms</strong> of all participants, please
    				<a class = "link" <?php echo "href=../FeedbackForms/zip_folders.php?name=".urlencode($string)?> target = '_blank'>Click Here</a>
				</p>
				<br>
				<p><strong>How to end the session?</strong></p>
				<p>1) To delete the passcode and logout, please
					<a class = "link" <?php echo "href=logout.php?name=".urlencode($token)?>>Click Here</a>
				</p> 
			</div>
		</div>

	</body>

</html>