<?php
$con=mysqli_connect("localhost","root","admin","test");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$password = $_POST["password"];
$email = $_POST["email"];
$sql="select * from tbl_admin where email = '$email' and password = '$password'";
$result = mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if ($count > 0){
        echo 1;     
        }else{
        echo 0;
        }
mysqli_close($con);
?>