
<html>
<header>
<script>
function formSubmit1()
{
document.getElementById("frm1").submit();
}
function formSubmit2()
{
document.getElementById("frm2").submit();
}
</script>
</header>
<body>
<?php

if ($_GET['id'] == 1) 
{exec("sudo python /home/pi/scripts/xbre1.py");
echo 'Already Turn on';
echo '<img src="/lighton.png" />';
}
else
{ exec("sudo python /home/pi/scripts/xbre2.py");
echo 'Already Turn off';
echo '<img src="lightoff.png" />';
}


?>
<form id="frm1" action='index2.php?id=1' method="post">
<input type="button" onclick="formSubmit1()" value="turn on" style="width: 400px;">
	</form>
	<form id="frm2" action='index2.php?id=0' method="post">
<input type="button" onclick="formSubmit2()" value="turn off" style="width: 400px;">
	</form>
	</body>