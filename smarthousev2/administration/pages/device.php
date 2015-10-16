<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location:../login.php");
$act = $_REQUEST['act'];
switch($act)
{	
	case 'adddevice':
		include 'pages/adddevice.php';
		break;
	case 'manadevice':
		include 'pages/manadevice.php';
		break;
}
?>