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
	$dv1 = $arr['device1'];
	$dv2 = $arr['device2'];
	$camera = $arr['camera'];
	
	$do = 'index.php?f=manager&act=editdevice&id='.$id;
}

?>
<p><b><?=$tit?></b></p>
<form name="addadmin" id="addadmin" method="post" action="<?=$do?>">
<table width="100%" border="0" cellspacing="2" cellpadding="2" style="border: 1px solid #d8d8d8">
  <tr>
    <td width="389">Username: *</td>
    <td width="579"><?echo $user;?> </td>
  </tr>
  <tr>
    <td>Device 1 : </td>
    <td> <select name="device1" id="device1">
       <?php
		if ($dv1 == 0)
		{
		echo '<option value="0" selected="selected">No</option>';
		echo '<option value="1">Yes</option>';
		} else{
		echo '<option value="1" selected="selected">Yes</option>';
		echo '<option value="0">No</option>';
		}
	   ?> 
      
      </select></td>
  </tr>
  <tr>
    <td>Device 2</td>
    <td><select name="device2" id="device2">
       <?php
		if ($dv2 == 0)
		{
		echo '<option value="0" selected="selected">No</option>';
		echo '<option value="1">Yes</option>';
		} else{
		echo '<option value="1" selected="selected">Yes</option>';
		echo '<option value="0">No</option>';
		}
	   ?> 
      
      </select></td>
  </tr>
  <tr>
    <td>Camera </td>
    <td><select name="camera" id="camera">
       <?php
		if ($camera == 0)
		{
		echo '<option value="0" selected="selected">No</option>';
		echo '<option value="1">Yes</option>';
		} else{
		echo '<option value="1" selected="selected">Yes</option>';
		echo '<option value="0">No</option>';
		}
	   ?> 
      
      </select></td>
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
