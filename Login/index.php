<?php 
$message = '';
include 'login.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv = "Content-Type" content = "text.html; charset = UTF-8" />
	<meta nawm = "viewport" content = "width = device-width, initial-scale = 1.0" />
	<meta name="google-signin-scope" content="profile email">
	<meta name="google-signin-client_id" content="595384716245-lbumt0tr5l4455ajgml1ftm99jb4etl7.apps.googleusercontent.com">
	<title>Login Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href="style.css" type = "text/css" />
	<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/js-sha512/0.7.1/sha512.js"></script>
	
</head>


<body>

<div class = "login-form">
	<div class = "login-face">
		<img src = "login-face.png">
	</div>
	<section class = "form">
		<form method = "post">
			<?php echo $message
			?>
			<div class = "input username">
				<input type = "text" name = "user" id = "user" placeholder ="Username"/>
				<i class = "fa fa-lock"></i>
			</div>
			<div class = "input pass">
				<input type = "password" name = "password" id = "password" placeholder ="Passcode" required />
				<i class = "fa fa-lock"></i>
			</div>
			<div>
				<input type = "submit" name = "login" id = "login" value = "Log in" />
			</div>
			<br>
			<!--<div>
				<input type = "button" name = "logincord" class = "logincord" id = "logincord" value = "Log in as Coordinator" />
			</div>-->
		</form>
	</section>

<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type = "text/javascript" src = "index.js"> </script>
<script>

	$(document).ready(function()
		{
    		$(".logincord").click(function()
    		{
        		$(".logincord").hide();
        		$(".username").show();
    	});
		});

</script>

</body>
</html>




