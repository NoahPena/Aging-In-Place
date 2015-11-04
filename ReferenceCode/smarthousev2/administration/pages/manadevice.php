<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location:../login.php");
$sqlad = "SELECT * FROM tbl_admin ORDER BY id ASC";
$qad = mysql_query($sqlad);

?>
<p><b>Set Device Management</b></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="23%"><div class="mn1" align="center">Username</div></td>
    <td width="19%"><div class="mn1" align="center">Device 1</div></td>
     <td width="12%"><div class="mn1" align="center">Device 2 </div></td>
	 <td width="12%"><div class="mn1" align="center">Camera </div></td>
    <td width="11%"><div class="mn1" align="center">Edit</div></td>
  </tr>
  <?php
  	while ($arrad = farray($qad))
			{
  ?>
  <tr>
    <td><div class="mn2" align="center"><?=$arrad['username']?></div></td>
    <td><div class="mn2" align="center"><? if($arrad['device1']==1) echo "Yes"; else echo "No"?></div></td>
	 <td><div class="mn2" align="center"><? if($arrad['device2']==1) echo "Yes"; else echo "No"?></div></td>
	  <td><div class="mn2" align="center"><? if($arrad['camera']==1) echo "Yes"; else echo "No"?></div></td>
    <td><div class="mn2" align="center"><a href="index.php?f=device&act=adddevice&id=<?=$arrad['id']?>"> + </a></div></td>
    
  </tr>
  <?php
  }  
  ?>
</table>

