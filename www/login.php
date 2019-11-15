<?php
$server = "remotemysql.com";
$username = "yRR1O9D20g";
$password = "gyZWei8sOe";
$database = "yRR1O9D20g";

$con = new mysqli($server, $username,$password);

if ($con->connect_error) {
  die ("Connection failed: " .$conn->connect_error);
}else {

  mysqli_select_db($con,$database);
  $usu = mysqli_real_escape_string($con, $_POST["username"]);
  $pass = mysqli_real_escape_string($con, $_POST["password"]);
  $sql = "SELECT * from users where username = '$usu' and password = '$pass'";

  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);

  $jsonData = json_encode($row);
  echo $jsonData;
  mysqli_close($con);
}
?>
