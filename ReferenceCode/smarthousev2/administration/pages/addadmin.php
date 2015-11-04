<?php
session_start();
	if (!isset($_SESSION['admin'])) header("Location:../login.php");
if (isset($_REQUEST['id']))
{
	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM tbl_admin WHERE id ='".$id."';";
	$q = mysql_query($sql);
	$arr = farray($q);
	$user = $arr['username'];
	$password = $arr['password'];
	$email = $arr['email'];
	
	$tit = 'Edit Information of User';
	$do = 'index.php?f=manager&act=editadmin&id='.$id;
}

?>
<p><b><?=$tit?></b></p>
<form name="addadmin" id="addadmin" method="post" action="<?=$do?>">
<table width="100%" border="0" cellspacing="2" cellpadding="2" style="border: 1px solid #d8d8d8">
  <tr>
    <td width="389">Username: *</td>
    <td width="579"><input name="user" type="text" id="user" value="<?=$user?>" />  </td>
  </tr>
  <tr>
    <td>Password : *</td>
    <td><input type="password" name="password" id="password" /></td>
  </tr>
  <tr>
    <td>Confirm: *</td>
    <td><input type="password" name="password2" id="password2" /></td>
  </tr>
  <tr>
    <td>Email: </td>
    <td><input name="email" type="text" id="email" value="<?=$email?>" /></td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="reset" id="reset" value="Reset" />
    </label></td>
  </tr>
</table>
</form>
