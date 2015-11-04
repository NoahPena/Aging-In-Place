<?php
	session_start();
	if (!isset($_SESSION['admin'])) header("Location:login.php");
	require 'database/config.php';
	include 'database/functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language = "javascript" type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"> </script>
<title>Vien Dong CPanel</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #003300;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #003300;
}
a:hover {
	text-decoration: underline;
	color: #FF6600;
}
a:active {
	text-decoration: none;
	color: #003300;
}
.menu{
line-height:150%;
}
#admin{
margin:5px;
text-align:left;
line-height:150%;
}
.mn1{
margin:1px;
background:#FF3300;
color:#FFFFFF;
font-weight:bold;
padding:2px;
cursor:pointer;
}
.mn1 a{
color:#FFFFFF;
}
.mn2{
margin:1px;
background:#FFCC99;
color:#006600;
padding:2px;
}
.mn2 a{
color:#006600;
}
.mn3{
margin:1px;
border:1px solid #CCCCCC;
padding:2px;
}
.tag{
margin:5px;
padding:5px;
border:1px solid #F30;
}
.topmenu{
padding:5px;
background:#CCCCCC;
margin:5px;
}
.link_menu a { color:#FFFFFF;}
.style3 {color: #FFFFFF}
-->
</style></head>

<body>

<center>
  <table width="1000" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="../images/logo.jpg" alt="Vien Dong Cpanel" width="1000" height="108" /></td>
    </tr>
    <tr>
      <td><table width="1000" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="72" background="../images/bgleft.jpg">&nbsp;</td>
          <td width="18" height="30" background="../images/navleft.jpg">&nbsp;</td>
          <td background="../images/navbg.jpg"><div class="link_menu style3"> <a href="process_login.php?act=logout">LOGOUT</a> </div></td>
         
          <td width="74" background="../images/bgright.jpg">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><table width="1000" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="72" background="../images/bgleft.jpg">&nbsp;</td>
          <td width="224" valign="top"><table width="224" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="../images/menutop.jpg" width="224" height="14" /></td>
            </tr>
			<script language="javascript">
           	
         </script>
            <tr>
              <td align="center" background="../images/menubg.jpg"><table width="200" border="0" cellspacing="0" cellpadding="0">
                
                  <tr>
                 	<td height="21" align="left" style="padding-top: 3px;"><b>USERNAME MANEGEMENT</b></td></tr>
                    <tr><td align="left">
                 <div class="menu">
                  <img src="../images/node.jpg" width="10" height="9" /> <a href="index.php?f=admin&amp;act=manaadmin"> User Mangement</a><br />                 
                 </div>
                 </td>
                 </tr>
				 
				  <tr>
                 	<td height="21" align="left" style="padding-top: 3px;"><b>SET DEVICES</b></td></tr>
                    <tr><td align="left">
                 <div class="menu">
                  <img src="../images/node.jpg" width="10" height="9" /> <a href="index.php?f=device&amp;act=manadevice"> Set Devices Mangement</a><br />                 
                 </div>
                 </td>
                 </tr>
				 
              </table></td>
            </tr>
            <tr>
              <td><img src="../images/menubot.jpg" width="224" height="13" /></td>
            </tr>
          </table></td>
          <td valign="top">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div class="topmenu" align="center">! Welcome Admin !</div></td>
            </tr>
            <tr>
              <td>
          <div id="admin">
            <?php
		  	$f = $_REQUEST['f'];
			switch($f)
			{
				case 'manager':
					include 'pages/manager.php';
					break;
				case 'admin':
					include 'pages/admin.php';
					break;
				case 'device':
					include 'pages/device.php';
					break;
				
			}	
		  ?>
          </div>              </td>
            </tr>
          </table>          </td>
          <td width="74" background="../images/bgright.jpg">&nbsp;</td>
        </tr> 
      </table></td>
    </tr>
    <tr>
      <td><img src="../images/bottom.jpg" width="1000" height="163" /></td>
    </tr>
  </table>
</center>
</body>
</html>
