<html lang="en">
<head>
    <title>PHP Data Connection Test</title>
</head>
<body>
<h1>Order: </h1>
<?php
    $counter = 0;
    $UserFName = $_POST['fname'];
    $UserLName = $_POST['lname'];
    $personalMessage = $_POST['textarea'];
    $radio_button_one = $_POST['ans'];
    
    //$("input[name=radio1_0]:checked").val()."<br>";
    echo("First Name: " . $UserFName)."<br>";
    echo("Last Name: " . $UserLName)."<br>";
    echo("Personal Message: " . $personalMessage)."<br>";
    echo("Radio Selected: " . $radio_button_one)."<br>";
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
if($UserLName == '' && $UserFName == ''){ //nothing is input
  echo ("Please input a name or last name to continue")."<br>";
  $sql = "SELECT * FROM `accounts`WHERE  0";
}elseif($UserLName != '' && $UserFName == ''){ // if only user lastname is submited
  $sql = "SELECT * FROM `accounts`WHERE LNAME = '$UserLName'";
}elseif($UserFName != '' && $UserLName == ''){ // if only user firstname is submited
  $sql = "SELECT * FROM `accounts`WHERE FNAME = '$UserFName'";
}elseif($UserLName != '' && $UserFName != ''){ // both are submited
  $sql = "SELECT * FROM `accounts` WHERE LNAME = '$UserLName' OR FNAME = '$UserFName'";
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
      $counter++;
      if($counter == 13){ 
        echo "<td>" . "<a href=http://media.animevice.com/uploads/0/4178/144412-aizen235_super.jpg>$value</a>" . "</td>";
        $counter = 0;
      }
      else{
        echo "<td>" . $value . "</td>";
      }
    }
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
  
?>
</body>
</html>