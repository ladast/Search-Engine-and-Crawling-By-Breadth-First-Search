<?php
	session_start();
	include_once '../DB_Koneksi.php';
	include_once '../controller/ControllUser.php';
	include_once '../entitas/EntUser.php';
	$user = new ControllUser();
	$username	= $_POST['username'];
	$password 	= md5($_POST['password']);
	$uid		= '';
	$nama 		= '';
	$email		= '';
	
	$user->setUser($uid,$username,$password,$nama,$email);
    $status_login = $user->cekLoginUser();
    if ($status_login==TRUE) {
       header("location:ViewHalamanAdmin.php");
    } else {
         header("location:index.php");
    }

?>