<?php
  include('session.php');
?>

<html>
<head>
<meta charset="UTF-8">
<title>Paradise Florist Inc</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link href="https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css"/>
<link href="styles/custom.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</head> 
<body>
<!-- SECTION BUTTONS ..........................................................................-->
<div id="page" data-role="page" data-theme="a">
	<div data-role="header" data-theme="a">
	  <div class="logo"><img src="images/Title.png" width="218" height="45" alt=""/><img src="images/flower_background.png" width="218" height="45" alt=""/></div>
	</div>
  <ul data-role="listview" data-inset="true">
    <li><a href="section/section1.html" data-transition="flip">Arrangement 1</a></li>
    <li><a href="section/section2.html" data-transition="flip">Arrangement 2</a></li>
    <li><a href="section/section3.html" data-transition="flip">Arrangement 3</a></li>
    <li><a href="section/section4.html" data-transition="flip">Arrangement 4</a></li>
    <li><a href="section/section5.html" data-transition="flip">Arrangement 5</a></li>
		<li><a href="section/section6.html" data-transition="flip">Arrangement 6</a></li>
		<li><a href="section/section7.html" data-transition="flip">Arrangement 7</a></li>
		<li><a href="section/section8.html" data-transition="flip">Arrangement 8</a></li>
		<li><a href="weeklytests/week03.html" data-transition="flip">Order History</a></li>
		<li><a href="section/contactus.html" data-transition="flip">Contact US</a></li>
		<li><a href="weeklytests/week03.html" data-transition="flip">Weekly Tests</a></li>
  </ul>

	<!-- END OF SECTION -->
	<div data-role="footer" data-theme="a">
	  <h4>Leonel Gonzalez &copy; 2017</h4>
	</div>
</div>
<!-- SECTION End .......................................................................-->
<!-- SECTION POP UP 
<div id="dialogbox" data-role="page" data-theme="a" data-add-back-btn="true" data-transition="pop">

</div>
dialog BOX ENDS _____________________________________________________________-->
</body>
	</html>