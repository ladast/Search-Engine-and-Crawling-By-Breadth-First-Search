<?php
	session_start();
	include_once '../DB_Koneksi.php';
	include_once '../controller/ControllUser.php';
	include_once '../entitas/EntUser.php';
	$user = new ControllUser();
	$user->logout();
	
	//echo "<center><b>Anda Telah Keluar<br>Jika ingin masuk kembali, silakan <a href=index.php>login</a></b></center>";
	header("location:index.php");
?>
