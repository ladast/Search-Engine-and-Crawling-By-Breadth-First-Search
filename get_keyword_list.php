<?php
$host_name = 'localhost';
$user_name = 'root';
$pass_word = '';
$database_name = 'semantik';

$conn = mysql_connect($host_name, $user_name, $pass_word) or die ('Error connecting to mysql');
mysql_select_db($database_name);

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT keyword as keyword from keyword where keyword LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['keyword'];
	echo "$cname\n";
}
?>