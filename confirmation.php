<html lang="en">
	  
	<head>
	    
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	    <link rel="icon" href="npc.jpg">
	   	<link href="css/confirmationstyle.css" rel="stylesheet">
	   	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">


	    <title>Confirmation Page</title>

	</head>
  
	<body>

		<div class = "mainHeading">
			<img src = "npc.jpg">
			<p class = "heading1"><strong>National Productivity Council</strong><p>
			<p class = "subh1">(Under Department of Industrial Policy & Promotion Ministry of Commerce & Industry, Govt. of India)</p>
		</div>

		<div class = "information">
			<div class = "value">
				<p>Thank You</p>
				<p>Your Feedback has been recorded</p>
				<!--<a href="<?php echo $_GET['name'];?>" target = '_blank'> Link </a>-->
				<div class="wrapper">
  					<span class="square individual">
    				<a class = "link" href="<?php echo $_GET['name'];?>" target = '_blank'>Download PDF of your feedback</a>
  					</span>
				</div>
				<div class="wrapper">
  					<span class="square individual">
    				<a class = "link" href="http://npcindia.gov.in">Go Back To Website</a>
  					</span>
				</div>	
			</div>
		</div>

	</body>

</html>