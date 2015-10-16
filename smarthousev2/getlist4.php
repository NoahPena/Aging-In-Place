<?php
$con=mysqli_connect("localhost","root","admin","test");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="select * from tbl_device where device = 'device 2'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
  echo $row['status'];
}

mysqli_close($con);
?>