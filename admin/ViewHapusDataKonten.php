<?php
	$user = new ControllUser();
	if (!$user->get_session())
	{
	   header("location:logout.php");
	}
	else
	{
		$id 			= $_GET['id'];
		$sekarang		= '';
		$judul			= '';
		$data_file		= '';
		$url_file		= '';
		$nama_file_unik	= '';
		$tanggal_update	= '';
		$klik			= '';
		$konten	= new ControllKonten();
		$konten->setKonten($id,$sekarang,$judul,$data_file,$url_file,$nama_file_unik,$tanggal_update,$klik);
		$hapus = $konten->deleteKonten();
		if ($hapus)
		{
			echo "<fieldset>";
			echo "<center><font color=green>Data berhasil dihapus!</font><br>";
			echo "<input type=\"button\" value=\"Kembali\" class=button onClick=\"self.history.back();\"></center>";
			echo "</fieldset><br/>";    
		}		
	}
?>