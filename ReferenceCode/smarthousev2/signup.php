<?php
$con=mysqli_connect("localhost","root","admin","test");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$sql="INSERT INTO tbl_admin (username, password, email, role, device1, device2, camera) VALUES ('$username', '$password', '$email', '0', '0', '0', '0')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

echo "ok";

mysqli_close($con);
?>