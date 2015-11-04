<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location:../login.php");
$sqlad = "SELECT * FROM tbl_admin ORDER BY id ASC";
$qad = mysql_query($sqlad);

?>
<p><b>USER MANAGEMENT</b></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="23%"><div class="mn1" align="center">Username</div></td>
    <td width="19%"><div class="mn1" align="center">Email</div></td>
     <td width="12%"><div class="mn1" align="center">Edit </div></td>
    <td width="11%"><div class="mn1" align="center">Delete</div></td>
  </tr>
  <?php
  	while ($arrad = farray($qad))
			{
  ?>
  <tr>
    <td><div class="mn2" align="center"><?=$arrad['username']?></div></td>
    <td><div class="mn2" align="center"><?=$arrad['email']?></div></td>
    <td><div class="mn2" align="center"><a href="index.php?f=admin&act=addadmin&id=<?=$arrad['id']?>">+</a></div></td>
    <td><div class="mn2" align="center"><a href="index.php?f=manager&act=deladmin&id=<?=$arrad['id']?>">+</a></div></td>
  </tr>
  <?php
  }  
  ?>
</table>

