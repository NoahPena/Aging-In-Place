<?php
class class_global
{	

//--------------------------------------------------------------------
	function addadmin()
	{
		$user = htmlspecialchars(addslashes($_POST['user']));
		$password = md5($_POST['password']);
		$email = htmlspecialchars(addslashes($_POST['email']));
		$tele = htmlspecialchars(addslashes($_POST['telephone']));
		$other = htmlspecialchars(addslashes($_POST['other_inf']));
		$date = date("Y-m-d");		
		$sqlad = "INSERT INTO tbl_admin (`id`,`user`,`password`,`email`,`telephone`,`other`,`date`)
		 VALUES (NULL,'".$user."','".$password."','".$email."','".$tele."','".$other."','".$date."');";
		 mysql_query($sqlad);	
		
	}
	function deladmin($id)
	{
		$sqlad = "DELETE FROM tbl_admin WHERE id='".$id."';";
		mysql_query($sqlad);
	}
	function editadmin($id)
	{
		$user = htmlspecialchars(addslashes($_POST['user']));
		$password = $_POST['password'];
		$email = htmlspecialchars(addslashes($_POST['email']));
		
		$sqlead = "UPDATE tbl_admin SET username = '".$user."', password = '".$password."', email= '".$email."' WHERE id = '".$id."';";
		mysql_query($sqlead);
	}
	
	function editdevice($id)
	{
		$device1 = $_POST['device1'];
		$device2 = $_POST['device2'];
		$camera = $_POST['camera'];
		
		$sqlead = "UPDATE tbl_admin SET device1 = '".$device1."', device2 = '".$device2."', camera= '".$camera."' WHERE id = '".$id."';";
		mysql_query($sqlead);
	}
	//------------------------------------------------------------------------

}
?>
