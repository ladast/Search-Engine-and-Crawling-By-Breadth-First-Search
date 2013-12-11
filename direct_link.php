<?php
	include "DB_Koneksi.php";
	include_once 'controller/ControllKonten.php';
	include_once 'entitas/EntKonten.php';
	$url = $_GET['url'];
	$id_konten = '';
	$sekarang = '';
	$judul_file = '';
	$isi_konten = '';
	$nama_file = '';
	$waktu_update = '';
	$klik = '';
						
	$konten = new ControllKonten();
	$konten->setKonten($id_konten,$sekarang,$judul_file,$isi_konten,$url,$nama_file,$waktu_update,$klik);
	if ($konten->updateCountKonten())
	{
		header('Location:'.$url);
	}
	
?>