<?php 
	$arr = explode('/', $_GET["name"],3);
	$arr1 = explode('(', $arr[1]);
 ?>
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
			<p class = "subh1">(Under Department of Industrial Policy & Promotion, Ministry of Commerce & Industry, Govt. of India)</p>
			<p class = "heading2">FEEDBACK FORM</p>
			<p class = "heading3">Acknowledgment</p>
		</div>

		<div class = "information">
			<div class = "value">
				<br>
				<p>Dear <?php echo $arr1[0] ?>,</p>
				<p>Thank you for filling the <strong>"Feedback Form"</strong>. </p>
				<!--<p>Please, keep your provided contact number and Email Id active for further information. We will get back to you very soon.</p>-->
				<div class="wrapper">
  					<span class="square individual">
  					You can download your PDF form from the link  
    				<a class = "link" href="<?php echo $_GET['name'];?>" target = '_blank'>Click Here</a> for your reference purpose.
  					</span>
				</div>
				<br>
				<div class = "addr">
					<p><strong>NPC Team</strong></p>
					<p>National Productivity Council,</p>
					<p>Utpadakta Bhavan,</p>
					<p>5-6, Institutional Area, Lodhi Road, New Delhi - 110003</p>
					<p>Ph: 011-24607336</p>
					<p>Fax: 011-24615002</p>
					<p>Email: nitin.a@npcindia.gov.in</p>
				</div>
			</div>
		</div>

	</body>

</html>