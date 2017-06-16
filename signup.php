<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $Fname = $_POST['fname'];
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>Paradise Florist Inc</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link href="https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css"/>
<link rel="manifest" href="/manifest.json">
<link href="styles/custom.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</script>
</head> 
<body>
<!-- SECTION BUTTONS ..........................................................................-->
  <div id="page" data-role="page" data-theme="a" data-transition="pop">
	<div data-role="header" data-theme="a">
	  <div class="logo"><img src="images/Title.png" width="218" height="45" alt=""/><img src="images/flower_background.png" width="218" height="45" alt=""/></div>
	</div>
	<div data-role="content" inline = 'true'>	
		<form method="POST" action="signup.php">
			
			<div data-role="fieldcontain">
				<label for="name" style="font-family: Papyrus;"><font color="red">First Name:</font></label>
    		<input type="text" name="fname" id="name" value=""  data-mini = 'true'/>
			</div>
			
			<div data-role="fieldcontain">
    		<label for="name" style="font-family: Papyrus;"><font color="red">Last Name:</font></label>
    		<input type="text" name="lname" id="name" value=""  data-mini = 'true'/>
			</div>
			<div data-role="fieldcontain">
    		<label for="name" style="font-family: Papyrus;"><font color="red">Username:</font></label>
    		<input type="text" name="login" id="name" value=""  data-mini = 'true'/>
			</div>
			
			<div data-role="fieldcontain">
    		<label for="name" style="font-family: Papyrus;"><font color="red">Password:</font></label>
    		<input type="password" name="password" id="name" value=""  data-mini = 'true'/>
			</div>
			
			<div data-role="fieldcontain">
    		<label for="name" style="font-family: Papyrus;"><font color="red">Email:</font></label>
    		<input type="email" name="email" id="name" value="example@example.com"  data-mini = 'true'/>
			</div>
			
			<div data-role="fieldcontain">
    		<label for="name" style="font-family: Papyrus;"><font color="red">Address:</font></label>
    		<input type="text" name="address" id="name" value=""  data-mini = 'true'/>
			</div>
			
			<div data-role="fieldcontain">
    		<label for="name" style="font-family: Papyrus;"><font color="red">City:</font></label>
    		<input type="text" name="city" id="name" value=""  data-mini = 'true'/>
			</div>
			
			<div data-role="fieldcontain">
    		<label for="name" style="font-family: Papyrus;"><font color="red">Zip Code:</font></label>
    		<input type="text" name="zip" id="name" value=""  data-mini = 'true'/>
			</div>
			
			<h3><font color="red" style="font-family: Papyrus;">Credit card Information:</font></h3>
			
			<div data-role="fieldcontain">
    		<label for="name" style="font-family: Papyrus;"><font color="red">CC:</font></label>
    		<input type="text" name="CC" id="name" value=""  data-mini = 'true'/>
			</div>
			
			<div data-role="fieldcontain">
    		<label for="name" style="font-family: Papyrus;"><font color="red">CVV:</font></label>
    		<input type="text" name="CVV" id="name" value=""  data-mini = 'true'/>
			</div>
			
			<div data-role="fieldcontain">
    		<label for="name" style="font-family: Papyrus;"><font color="red">Expiration:</font></label>
    		<input type="date" name="EXPIRATION" id="name" value=""  data-mini = 'true'/>
			</div>
		<button type='submit'>Submit</button>
		</form>
	</div>
	<div data-role="footer" data-theme="a">
	  <h4>Leonel Gonzalez &copy; 2017</h4>
	</div>
</div>
</body>
</html>