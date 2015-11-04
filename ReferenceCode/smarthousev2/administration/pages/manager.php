<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location:../login.php");
require 'class/global.class.php';

$mana = new class_global();

	$act = $_REQUEST['act'];
	if(isset($_REQUEST['id']))
		$id = $_REQUEST['id'];
	if(isset($_REQUEST['cid']))
		$cid = $_REQUEST['cid'];
	if(isset($_POST['listpart'])) $listpart = $_POST['listpart'];
	if (isset($_POST['theloai'])) $theloai = $_POST['theloai'];
	if (isset($_POST['listtour'])) $listtour = $_POST['listtour'];
	
	switch($act)
	{
		
		case 'addadmin':
		if ($_POST['password'] != $_POST['password2']) $msg = '<script type="text/javascript">
		alert (\'Password is not the same p\'); javascript: history.go(-1)</script>';
		else {
			$mana->addadmin();
			$msg = "Successful";
			echo '<meta http-equiv="REFRESH" content="1; url=index.php?f=admin&act=manaadmin">';
			}
			
			break;
			
		case 'deladmin':
			$mana->deladmin($id);
			$msg = "Successful";
			echo '<meta http-equiv="REFRESH" content="1; url=index.php?f=admin&act=manaadmin">';
			break;
			
		case 'editadmin':
		if ($_POST['password'] != $_POST['password2']) $msg = '<script type="text/javascript">
		alert (\'Password is not the same \'); javascript: history.go(-1)</script>';
		else{	
			$mana->editadmin($id);
			$msg = "successful";
			echo '<meta http-equiv="REFRESH" content="1; url=index.php?f=admin&act=manaadmin">';}
			break;
			
		case 'editdevice':			
			$mana->editdevice($id);
			$msg = "successful";
			echo '<meta http-equiv="REFRESH" content="1; url=index.php?f=device&act=manadevice">';
			break;
			
		
	}
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td height="25" align="left"><strong>NOTICE</strong></td>
</tr>
<tr>
	<td align="left"><?php echo $msg; ?></td>
</tr>
</table>