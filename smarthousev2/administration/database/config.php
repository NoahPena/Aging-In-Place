<?php
$db['host'] = 'localhost';
$db['user'] = 'root';
$db['pass'] = 'admin';
$db['data'] = 'test';

$conn = mysql_connect($db['host'],$db['user'],$db['pass']) or die('Could not connect to database');
mysql_select_db($db['data'],$conn) or die('Could not select database');
?>