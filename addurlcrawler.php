<?php
	/* 	filename addcrawler.php
		untuk menambahkan link sebagai antrian link
	*/
	include_once 'DB_Koneksi.php';
	include_once 'controller/ControllLink.php';
	include_once 'entitas/EntLink.php';
	include_once 'fungsi/fungsi.php';	
	
	$kelas_link		= new ControllLink();	
	$url 			= trim(htmlentities(strip_tags($_POST['url'])));
	/*
	if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i",$url))
	{
		$pesan = "URL tidak valid";
	}
	else
	{
		$status 		= 'N';
		$crawled		= 'belum';
		$id_link		= '';
		$kelas_link->setLink($id_link,$url,$status,$crawled);
		$insert 		= $kelas_link->insertLink();

		if ($insert)
		{
			$pesan = "URL berhasil dikirim";
		}
		else
		{
			$pesan = "URL gagal dikirim";
		}
	}
	*/
	$status 		= 'N';
	$crawled		= 'belum';
	$id_link		= '';
	$kelas_link->setLink($id_link,$url,$status,$crawled);
	$insert 		= $kelas_link->insertLink();
	if ($insert)
	{
		$pesan = "URL berhasil dikirim";
	}
	else
	{
		$pesan = "URL gagal dikirim";
	}
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<title>Proses Add URL</title> 
<meta name="description" content="Proses Add URL">
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div id="popup" class="modal hide fade in" style="display: none; ">
<div class="modal-header">
<a class="close" data-dismiss="modal">×</a>
<h3>Proses Pengiriman Pesan</h3>
</div>
<div class="modal-body">
<h4><?php echo "$pesan"; ?></h4>	        
</div>
<div class="modal-footer">
<a href="index.php" class="btn btn-success">Kembali</a>
</div>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('#popup').modal('show');
    });
</script>
</body>
</html>
            