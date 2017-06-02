<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Oder Information</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link href="https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css"/>
  <link href="styles/custom.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</head>
<body>
  <div data-role="page" data-theme="a" data-add-back-btn="true">
  <div data-role="header" data-theme="a">
	  <h1>Order Information</h1>
		</div>
  <div>
<?php
  include('../session.php');
  $user = $_SESSION['login_user'];
  $UserID;
	$Confirmation;
  // Turn off all error reporting
  error_reporting(0);
  $Arrangement = 0;
  try{
    if($_POST['text1'] != null){
      $personalMessage = $_POST['text1'];
      $Arrangement = 1;                  }elseif($_POST['text2'] != null){
                                                 $personalMessage = $_POST['text2'];
                                                 $Arrangement = 2;                  }elseif($_POST['text3'] != null){
                                                                                            $personalMessage = $_POST['text3'];
                                                                                            $Arrangement = 3;
    }elseif($_POST['text4'] != null){
      $personalMessage = $_POST['text4'];
      $Arrangement = 4;                  }elseif($_POST['text5'] != null){
                                                 $personalMessage = $_POST['text5'];
                                                  $Arrangement = 5;                 }elseif($_POST['text6'] != null){
                                                                                            $personalMessage = $_POST['text6'];
                                                                                            $Arrangement = 6;
    }elseif($_POST['text7'] != null){
      $personalMessage = $_POST['text7'];
      $Arrangement = 7;                  }elseif($_POST['text8'] != null){
                                                 $personalMessage = $_POST['text8'];
                                                  $Arrangement = 8;
    }
  }catch(Exception $e){
    $personalMessage = '';
    echo 'Message: ' .$e->getMessage();
  }
  
    
  //$("input[name=radio1_0]:checked").val()."<br>";
  //Connection 
    $sql = "SELECT `CUST_ID` FROM accounts WHERE `LOGIN` = '$user'";
    $result = mysqli_query($db,$sql);
    $row = $result->fetch_assoc();
    foreach ($row as $value) {
            $UserID = $value;
    }
    
    echo("Current user: " . $user)."<br>";
    echo("Arrangement: " . $Arrangement)."<br>";
    echo("Personal Message: " . $personalMessage)."<br>";
    echo("Current userID: " . $UserID)."<br>";
		$Confirmation = rand(1000,10000);
    
    $sql = "INSERT INTO `ordersnew`(`UserID`, `Message`, `ItemID`, `ConfirmationNumber`) VALUES ('$UserID','$personalMessage','$Arrangement', '$Confirmation')";
    if (!($stmt = mysqli_prepare($db, $sql))) {
        die('Error: ' . mysqli_error($db));
    }
    if (!mysqli_stmt_execute($stmt)) {
    die('Error: ' . mysqli_stmt_error($stmt));
    }else{
      echo("Success Inserting New Record")."<br>";
    }
    
  
?>
		<div style="position:relative;text-align:center;" class="ui-body ui-body-solo">
						<a href="../main.php" data-role="button" data-inline="true" data-theme="b">Return </a>
	</div>
  <!-- END OF SECTION -->
	<div data-role="footer" data-theme="a">
	  <h4>Leonel Gonzalez &copy; 2017</h4>
	</div>
 </div>
 </div>
	
</body>
</html>