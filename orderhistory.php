<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Oder History</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link href="https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css"/>
	<link rel="manifest" href="/manifest.json">
  <link href="styles/custom.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</head>
<body>
  <div data-role="page" data-theme="a" data-add-back-btn="true">
  <div data-role="header" data-theme="a">
	  <h1>Order History</h1>
		</div>
  <div>
    <?php
      include('session.php');
	    $user = $_SESSION['login_user'];
      echo ("<font color='cyan'>Current user: </font>" ."<font color='cyan'>$user</font>")."<br>";
      echo "<br>";
  
       $sql = "SELECT ordersnew.OrderID, ordersnew.UserID, ordersnew.ConfirmationNumber, ordersnew.ItemID, ordersnew.Message, 
               accounts.FNAME as 'First Name', accounts.LNAME as 'Last Name', accounts.ADDRESS, accounts.CITY, accounts.ZIP, accounts.COUNTRY 
               FROM ordersnew 
               INNER JOIN accounts ON ordersnew.UserID = accounts.CUST_ID WHERE accounts.LOGIN = '$user'";
  
      $result = mysqli_query($db,$sql);
  
      //magic happens and we put all the stuff in an ordered table
      echo "<table border='1'>";
      $i = 0;
      while($row = $result->fetch_assoc()){
        if ($i == 0) {
            $i++;
            echo "<tr>";
            foreach ($row as $key => $value) {
              echo "<th>" . "<font color='cyan'>$key</font>". "</th>";
            }
            echo "</tr>";
        }
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . "<font color='cyan'>$value</font>" . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
  ?>
 </div>
 </div>
  <!-- END OF SECTION -->
	<div data-role="footer" data-theme="a">
	  <h4>Leonel Gonzalez &copy; 2017</h4>
	</div>
</body>
</html>