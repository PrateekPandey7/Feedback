$(document).ready(function(){
	$("#login").click(function(){
		if($("#username").val() == ""){
			$(".input").addClass("error");
			$("#username").css({"border" : "2px solid red"});
		}
		if($("#password").val() == ""){
			$(".pass").addClass("error");
			$("#password").css({"border" : "2px solid red"});
		}
		if($("#email").val() == ""){
			$(".email").addClass("error");
			$("#email").css({"border" : "2px solid red"});
		}

	})
	$(".input").click(function(){
			$(".input").removeClass("error");
			$("#username").css({"border" : "2px solid #ddd"});
			$("#password").css({"border" : "2px solid #ddd"});
			$("#email").css({"border" : "2px solid #ddd"});
		})
	$("#signup").click(function(){
		if($("#username").val() == ""){
			$(".input").addClass("error");
			$("#username").css({"border" : "2px solid red"});
		}
		if($("#password").val() == ""){
			$(".pass").addClass("error");
			$("#password").css({"border" : "2px solid red"});
		}
		if($("#email").val() == ""){
			$(".email").addClass("error");
			$("#email").css({"border" : "2px solid red"});
		}
	})
})

function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        /*console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());*/
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
        var email = profile.getEmail();
        if(email == "pandeyprateek01@gmail.com")
        {
        	signOut();
        	window.location.href = 'download.php';
        }
        else
        {
        	signOut();
        	location.reload();
        }
        
      };

function signOut() 
{
   	gapi.auth2.getAuthInstance().disconnect();
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () 
    {
     console.log('User signed out.');
    });
}

function logout()
{
	signOut();
	location.reload();
}

