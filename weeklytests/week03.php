<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Week03</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link href="https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css"/>
  <link href="styles/custom.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</head>
<body>
  <div data-role="page" data-theme="a" data-add-back-btn="true">
  <div data-role="header" data-theme="a">
	  <h1>Week 03</h1>
	</div>
  <div>
    <?php
      $UserFName = $_POST['fname'];
      $UserLName = $_POST['lname'];
      $CustomerID = $_POST['customerID'];
    
      //$("input[name=radio1_0]:checked").val()."<br>";
      echo("First Name: " . $UserFName)."<br>";
      echo("Last Name: " . $UserLName)."<br>";
      echo("Customer ID: " . $CustomerID)."<br>";
      //Connection parameters
      $servername = "us-cdbr-azure-central-a.cloudapp.net";
      $username = "beb51e81308fbf";
      $password = "6e9b3499";
      $dbname = "paradisefloristdb";
      //stablish connection
      $con = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }else{
        echo ("Sucess to connect to MySQL")."<br>";
      }
      //here we set the querie depending on the input
      if($CustomerID != ''){
        $sql = "SELECT ordersnew.OrderID, ordersnew.UserID, ordersnew.ConfirmationNumber, ordersnew.ItemID, ordersnew.Message, accounts.FNAME, 
          accounts.LNAME, accounts.ADDRESS, accounts.CITY, accounts.ZIP, accounts.COUNTRY FROM ordersnew 
          INNER JOIN accounts ON ordersnew.UserID = accounts.CUST_ID WHERE accounts.CUST_ID = '$CustomerID'";
      }else{
          if($UserLName == '' and $UserFName == ''){ //nothing is input
            echo ("Please input a name or last name to continue")."<br>";
            $sql = "SELECT * FROM `accounts` WHERE  0";
          }elseif($UserLName != '' and $UserFName == ''){ // if only user lastname is submited
            $sql = "SELECT * FROM `accounts` WHERE LNAME = '$UserLName'";
          }elseif($UserFName != '' and $UserLName == ''){ // if only user firstname is submited
            $sql = "SELECT * FROM `accounts` WHERE FNAME = '$UserFName'";
          }elseif($UserLName != '' and $UserFName != ''){ // both are submited
            $sql = "SELECT * FROM `accounts` WHERE LNAME = '$UserLName' OR FNAME = '$UserFName'";
          }
      }

      //set the result depending on the querie
      $result = $con->query($sql);
      //magic happens and we put all the stuff in an ordered table
      echo "<table border='1'>";
      $i = 0;
      while($row = $result->fetch_assoc()){
        if ($i == 0) {
          $i++;
          echo "<tr>";
          foreach ($row as $key => $value) {
            echo "<th>" . $key . "</th>";
          }
          echo "</tr>";
        }
        echo "<tr>";
        foreach ($row as $value) {
          echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
mysqli_close($con);
  
?>
 </div>
 </div>
  <!-- END OF SECTION -->
	<div data-role="footer" data-theme="a">
	  <h4>Leonel Gonzalez &copy; 2017</h4>
	</div>
</body>
</html>