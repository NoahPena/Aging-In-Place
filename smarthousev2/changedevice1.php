<?php
$con=mysqli_connect("localhost","root","admin","test");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$email = $_POST['email'];
$sql="select * from tbl_admin where email = '$email'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
  echo $row['device1'];
}

mysqli_close($con);
?>