<?php
   include("Config.php");
   session_start();
   
      $GoogleName = $_GET['name'];
		  if($GoogleName != null){
				$_SESSION['login_user'] = $GoogleName;
				ob_start();
         header("location: disclaimer.php");
			   ob_end_flush();
    		 flush();
				$GoogleName = null;
			}
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
		  
		  
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      //query
		 if($mypassword != '' && $myusername != ''){
			 $sql = "SELECT * FROM `accounts` WHERE PASSWORD = '$mypassword' AND LOGIN = '$myusername'";
      }else{
				 ob_start();
         header("location: loginfails.php");
			   ob_end_flush();
    		 flush(); 
		 }
		 
		 $result = mysqli_query($db,$sql);
		 if($row = $result->fetch_assoc() != null){
         $_SESSION['login_user'] = $myusername;
			   ob_start();
         header("location: disclaimer.php");
			   ob_end_flush();
    		 flush();  
  		 }else{
    		 ob_start();
         header("location: loginfails.php");
			   ob_end_flush();
    		 flush();            // Unless both are called !
  		}
   }
?>
<html>
   <head>
	 <meta charset='UTF-8'>
	 <title>Paradise Florist Inc</title>
	 <meta name='viewport' content='width=device-width,initial-scale=1' />
	 <link href='https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css' rel='stylesheet' type='text/css'/>
	 <link rel="manifest" href="/manifest.json">
	 <link href='styles/custom.css' rel='stylesheet' type='text/css'>
	 <script src='https://code.jquery.com/jquery-1.8.3.min.js' type='text/javascript'></script>
	 <script src='https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js' type='text/javascript'></script>
	 <script src="https://apis.google.com/js/platform.js" async defer></script>
	 <meta name="google-signin-scope" content="profile email">
   <meta name="google-signin-client_id" content="101492973237-s4r6ehlphouh92beuol7c9b1vn9h4kfj.apps.googleusercontent.com">
	 </head> 
   
   <body bgcolor = "#FFFFFF">
		 <div id="welcomelogin" data-role="page" data-theme="a">
			 <h1>Welcome to the best Florist shop online!</h1>
			 <br>
			 <p><font color="red">Wrong username and password</font></p>
			 <br>
			 <br>
			 <form id="form1" name="form1" method="POST" action="index.php">
				<div class="ui-field-contain" data-mini="true">
  					<label for="name"><font color="cyan">Username:</font></label>
  					<input type="text" name="username" id="name" value="" data-clear-btn="true">
				</div>
				<div class="ui-field-contain" data-mini="true">
  					<label for="password"><font color="cyan">Password:</font></label>
						<input type="text" name="password" id="password" value="" data-clear-btn="true">
				</div>
				 <br>
				 <br>
				 <br>
				<div style="position:relative;text-align:center;" class="ui-body ui-body-solo">
						<input type="submit" value="Login" data-inline="true"/>
						<a href="signup.php" data-role="button" data-inline="true" data-theme="b">Signup!</a>
					  <a class="g-signin2" data-role="button" data-onsuccess="onSignIn" data-inline="true" data-theme="dark"></a>
					  <script>
      				function onSignIn(googleUser) {
							var profile = googleUser.getBasicProfile();
							var Username = profile.getName();
								if(Username != null){
									window.location.href = "index.php?name=" + Username;
								}
								Username = null;
      				}
           </script>
				</div>
			</form>
			<br>
			<br>
			<br>
			<div data-role="footer" data-theme="a">
	  			<h4>Leonel Gonzalez &copy; 2017</h4>
			</div>
		</div>
   </body>
</html>