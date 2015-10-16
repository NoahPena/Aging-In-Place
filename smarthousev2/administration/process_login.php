<?php
session_start();
require 'database/config.php';
include 'database/functions.php';
$act = $_REQUEST['act'];
if ($act)
	{
		switch($act)
			{
				case 'login':
					$user = htmlspecialchars(addslashes($_POST['username']));
					$pass = $_POST['pass'];
					
					
						$sql = "SELECT * FROM tbl_admin	WHERE username= '".$user."' AND password = '".$pass."' AND role = 1;"; 
						$q = mysql_query($sql);					
						$arr = farray($q);
						if($num = mysql_num_rows($q))	
						{
							$_SESSION['admin'] = $arr['id'];
							$msg = 'LogIn Successful';
						}else $msg = 'LogIn Fail';
					
							$p = 'index.php';
							process($msg,$p);
					break;
					
				case 'logout':
					session_destroy();
					$p = 'login.php';
					$msg = 'LogOut Successful';
					process($msg,$p);
					break;
			}
	}
?>