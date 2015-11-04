<?php
$con=mysqli_connect("localhost","root","admin","test");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="select * from tbl_device where id = 2";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
  if ($row['status'] == 1) $i = 1;
  else $i = 0;
}


if ($i == 1) 
{
	exec("gpio mode 2 in");
	$sql1="update tbl_device SET status='0' where id='2'";
	$result1 = mysqli_query($con,$sql1);
	//echo "1";
}else
{
exec("gpio mode 2 out");
	$sql1="update tbl_device SET status='1' where id='2'";
	$result1 = mysqli_query($con,$sql1);
}
mysqli_close($con);


?>