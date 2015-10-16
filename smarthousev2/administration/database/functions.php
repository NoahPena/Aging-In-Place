<?php
function query($sql)
{
	$q = mysql_query($sql);
	return $q;
}
function farray($q)
{
	$arr = mysql_fetch_array($q,MYSQL_ASSOC);
	return $arr;
}
function nrow($q)
{
	$n = mysql_num_rows($q);
	return $n;
}
function carray($sql)
{
	$q = mysql_query($sql);
	$arr = mysql_fetch_array($q,MYSQL_ASSOC);
	return $arr;
}
function mod_edit($id,$mod)
{
	return 'index.php?f=modules&act=edit&mod='.$mod.'&id='.$id;
}
function mod_del($id,$mod)
{
	return 'pages/process.php?mod='.$mod.'&act=del&id='.$id;
}
function selectdate($sl)
{
	$day = getdate();
	$thang = $day['mon'];
	if($thang==1 || $thang==3 || $thang==5 || $thang==6 || $thang==8 || $thang==10 || $thang==12)
		$ngay = 31;
	else if($thang==2)
	{
		$nam = $day['year'];
		if(($nam%4)==0)
			$ngay = 29;
		else
			$ngay = 28;
	}else if($thang==4 || $thang==7 || $thang==9 || $thang==11)
		$ngay = 30;
	for($j=1;$j<=$ngay;$j++)
	{
		if($j==$sl)
			echo '<option value="'.$j.'" selected>'.$j.'</option>';
		else
			echo '<option value="'.$j.'">'.$j.'</option>';
	}
}
function selectmon()
{
	$day = getdate();
	$year = $day['year'];
	$mon = array("January","February","March","April","May","June","July","August","September","October","November","December");
	for($i=0;$i<12;$i++)
	{
		if($i<10)
			$k = '0'.($i+1);
		else
			$k = $i+1;
		echo '<option value="'.$year.'-'.$k.'">'.$mon[$i].', '.$year.'</option>';
	}
}
function process($msg,$p)
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="REFRESH" content="2; url=<?=$p?>">
<title>Loading...</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
#right{
float:right;
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
	color: #0000FF;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0000FF;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #0000FF;
}
-->
</style></head>

<body>
<center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php echo $msg ?>
</center>
</body>
</html>
<?php
}
?>