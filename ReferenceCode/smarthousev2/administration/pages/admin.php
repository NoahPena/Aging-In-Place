<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location:../login.php");
$act = $_REQUEST['act'];
switch($act)
{	
	case 'addadmin':
		include 'pages/addadmin.php';
		break;
	case 'manaadmin':
		include 'pages/manaadmin.php';
		break;
}
?>