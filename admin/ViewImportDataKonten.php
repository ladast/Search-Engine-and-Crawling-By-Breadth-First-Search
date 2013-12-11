<?php
$user = new ControllUser();
if (!$user->get_session())
{
   header("location:logout.php");
}

$pesan = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$id_konten		= '';
	$judul			= $_POST['judul'];
	$lokasi_file    = $_FILES['fupload']['tmp_name'];
	$tipe_file      = $_FILES['fupload']['type'];
	$nama_file      = $_FILES['fupload']['name'];
	$acak           = rand(1,99);
	$nama_file_unik = $acak.$nama_file; 
	
	$sekarang		= gmdate("Y-m-d H:i:s", time()+60*60*7);
	$tanggal_update	= gmdate("Y-m-d H:i:s", time()+60*60*7);
	$klik			= 0;
	
	//dapatkan url web dari kelas about
	$about = new ControllAbout();
	$url_web = $about->getURL();
	
	//direktori file text
	$vdir_upload = "../file/";
	$vfile_upload = $vdir_upload . $nama_file_unik;

	 //Simpan file fdi folder file
	$upload = move_uploaded_file($lokasi_file, $vfile_upload);
		
	//proses simpan data
	if ($upload)
	{
		//dapatkan isi text
		$url_file = $url_web."file/".$nama_file_unik;
		//$data_file 	= file_get_contents($url_file);		
		$ch = curl_init();

		curl_setopt ($ch, CURLOPT_URL, $url_file);
		curl_setopt ($ch, CURLOPT_HEADER, 0);

		ob_start();

		curl_exec ($ch);
		curl_close ($ch);
		$data_file = ob_get_contents();

		ob_end_clean();
		
		//buat instance kelas konten
		$konten = new Konten();
		$konten->setKonten($id_konten,$sekarang,$judul,$data_file,$url_file,$nama_file_unik,$tanggal_update,$klik);
		$simpan_konten = $konten->insertKonten();
		if ($simpan_konten)
		{
			$pesan = "<font color=green>Import Data Berhasil Disimpan</font>";
		}
		else
		{
			$pesan =  "<font color=red>Import Data Gagal Disimpan</font>";
		}
	}	
}
?>
<fieldset>
<center><?php echo "$pesan"; ?></center>
</fieldset>
<ul id="breadcrumb">
        <li><a href="#" title="Home"><img src="images/home.png" alt="Home" class="home" /></a></li>
        <li>Import Data Text</li>
</ul>
<fieldset>
<form action="" method="POST" enctype="multipart/form-data">
<table>
	<tr>
		<td>Judul</td>
		<td><input type="text" name="judul" size="50"/></td>
	</tr>
	<tr>
		<td>File Text</td>
		<td><input type="file" name="fupload" /></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" value="Import Data" class="button"/></td>
	</tr>
</table>
</form>
</fieldset>

