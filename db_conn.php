<?php 
$conexion = mysqli_connect("localhost","robetorr","rt988311","labcom");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>