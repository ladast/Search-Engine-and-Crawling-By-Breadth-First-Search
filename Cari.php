<?php
	error_reporting(0);
	include_once 'DB_Koneksi.php';
	include_once 'controller/ControllUSer.php';
	include_once 'entitas/EntUser.php';
	include_once 'controller/ControllKonten.php';
	include_once 'entitas/EntKonten.php';
	include_once 'controller/ControllLink.php';
	include_once 'entitas/EntLink.php';
	include_once 'fungsi/fungsi.php';

	//tampung data kata kunci
	$query 		= filter_xss($_GET["query"]);
	$search 	= $query;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title><?php echo $search;?></title>
  <link href="css/styles.css"  rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  
	<script src="js/jquery-1.4.4.min.js"></script>
    <script src="js/jquery.reveal.js"></script>
	<!--
  <script type='text/javascript' src='jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
 -->
  <link href="css/reveal.css" rel="stylesheet">
<span>
</span>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
    <![endif]-->
	<script type="text/javascript">
	$().ready(function() {
		$("#query").autocomplete("get_keyword_list.php", {
			width: 260,
			//matchContains: true,
			mustMatch: true,
			//minChars: 0,
			//multiple: true,
			//highlight: false,
			//multipleSeparator: ",",
			selectFirst: false
		});
	});
	</script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" style='background-color:yellow;'>
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="brand" href="index.php#home">Web Search</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php#home">Home</a></li>
              <li><a href="index.php#about">Tentang kami</a></li>
              <li><a href="index.php#add">Tambah URL</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<br/>
<br/>
<div class="container">
<div align='left'>
	<br/>
	<div >
		<form name='boss_search' action='Cari.php' method='get'>
			<div >Kata Kunci : <input type='text' name='query' id='query' value="<?php echo "$query"; ?>" size=90 style='height: 30px; width: 500px; font-size:16'/> &nbsp;&nbsp;<input type='submit' value='Search' style='height: 30px; width: 100px;cursor:pointer;	width:70px;	height: 31px;	line-height:0;font-size:0;text-indent:-999px;color: transparent;background: url(img/ico-search.png) no-repeat #4d90fe center;
	border: 1px solid #3079ED;	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;'"/>
			</div>
		</form>
	</div>
	</div>
<?php

//buat untuk pesan error/berhasil
$errors = array();
if (empty($search))
{
	$errors[] 	= 'Silakan masukan kata kunci';
}
else if (strlen($search)<3)
{
	$errors[]	= 'Kata kunci harus lebih dari 3 karakter';
}

else
{
	$data_konten = new ControllKonten();
	$hasil_pencarian = $data_konten->searchKonten($search);
	//echo "$hasil_pencarian";
	//die();
	if ($hasil_pencarian == false)
	{
		$errors[]	= 'Hasil pencarian untuk <b>'.$search.'</b> tidak ditemukan';
	}
}

if (empty($errors))
{
	
	//melakukan pencarian
	$mulai = generatestart();
	
	$data_konten = new ControllKonten();
	
	$hasil_pencarian = $data_konten->searchKonten($search);
	
	
	$waktu_butuh = generatestop($mulai);

	
	$konten_num = count($hasil_pencarian);
	
	echo "Anda mencari <b>$search</b> / <font size='1'>sekitar $konten_num data ditemukan! ($waktu_butuh)<br></font><hr size='1'>";
	//print_r($hasil_pencarian);
	//echo "<hr>";
	// ubah lagi menjadi bentuk dasar PHP
	foreach ($hasil_pencarian as $key => $row) {
			$id_konten[$key]  = $row['id_konten'];
			$jumlah_kata_konten[$key] = $row['jumlah_kata_konten'];
	}
	
	// Sort dimana jumlah kata yang mengandung kata secara DESC
	array_multisort($jumlah_kata_konten, SORT_DESC, $hasil_pencarian);
	//print_r($hasil_pencarian);
	//echo "<hr>";
	//die();
	//cetak lagi setelah di sorting
	$no = 1;
	foreach ($hasil_pencarian as $key => $row) {
			$id_konten[$key]  = $row['id_konten'];
			//echo $id_konten[$key]."=".$jumlah_kata_konten[$key]."<br>";

			$jumlah_kata_konten[$key] = $row['jumlah_kata_konten'];
			//query data
			
			//lakukan query untuk mendapatkan isi konten			
			$out_data_konten = new ControllKonten();
			$id_konten_out	= $id_konten[$key];
			$data_hasil_pencarian = $out_data_konten->getKontenByID($id_konten_out);

			
			foreach ($data_hasil_pencarian as $key => $baris) {
				$judul_konten_output[$key] 			= $baris['judul_konten'];
				$isi_konten_output[$key] 			= $baris['isi_konten'];
				$isi_konten_output_sebagian[$key] 	= $baris['isi_konten'];
				$url_file_output[$key] 				= $baris['url_file'];
				$tanggal_update_output[$key] 		= $baris['tanggal_update'];
			}
			$judul_konten_tampil 			= $judul_konten_output[$key];
			$isi_konten_tampil				= $isi_konten_output[$key];
			$isi_konten_tampil_sebagian		= $isi_konten_output_sebagian[$key];
			
			//kecilkan isi konten
			$isi_konten_tampil				= strtolower($isi_konten_output[$key]);
			$isi_konten_tampil_sebagian		= strtolower($isi_konten_output_sebagian[$key]);
			
			//bersihkan isi konten
			$tokenKarakter					= array('’','—',' ','/',',','?','.',':',';',',','!','[',']','{','}','(',')','-','_','+','=','<','>','\'','"','\\','@','#','$','%','^','&','*','`','~','0','1','2','3','4','5','6','7','8','9','â€','”','“');
			$isi_konten_tampil				= str_replace($tokenKarakter,' ',$isi_konten_tampil);
			
			$isi_konten_tampil_sebagian		= htmlentities(strip_tags($isi_konten_tampil_sebagian)); // membuat paragraf pada isi berita dan mengabaikan tag html
			$isi_konten_tampil_sebagian 	= substr($isi_konten_tampil_sebagian,0, 350); // ambil sebanyak 350 karakter
			$isi_konten_tampil_sebagian 	= substr($isi_konten_tampil_sebagian,0,strrpos($isi_konten_tampil_sebagian," ")); // potong per spasi kalimat
			$url_file_tampil				= $url_file_output[$key];
			$tanggal_update					= tgl_indo_lengkap($tanggal_update_output[$key]);
	
			$cek1 = str_split($search);
			$panjang = count($cek1);
			if (($cek1[0]=="+") AND ($cek1[$panjang-1])=="+")
			{
				$keywords_asli = str_replace("+","",$search);
				$keywords_asli	= trim($keywords_asli);
				$keywords = preg_split('/[\s]+/',$keywords_asli);
				
				$total_keywords = (integer)count($search);		
				
				foreach ($keywords as $key=>$keyword)
				{
					//echo 'k: ',$keyword,'<br>';
					$judul_konten_tampil			= str_replace("$keyword", "<b>$keyword</b>", "$judul_konten_tampil");
					$isi_konten_tampil				= str_replace("$keyword", "<b>$keyword</b>", "$isi_konten_tampil");
					$url_file_tampil				= str_replace("$keyword", "<b>$keyword</b>", "$url_file_tampil");
					$isi_konten_tampil_sebagian		= str_replace("$keyword", "<b>$keyword</b>", "$isi_konten_tampil_sebagian");
				
					//case sensitive
					$keyword = strtolower($keyword);
					$judul_konten_tampil			= str_replace("$keyword", "<b>$keyword</b>", "$judul_konten_tampil");
					$isi_konten_tampil				= str_replace("$keyword", "<b>$keyword</b>", "$isi_konten_tampil");
					$url_file_tampil				= str_replace("$keyword", "<b>$keyword</b>", "$url_file_tampil");
					$isi_konten_tampil_sebagian		= str_replace("$keyword", "<b>$keyword</b>", "$isi_konten_tampil_sebagian");
		
				}
				
				$judul_konten_tampil	= str_replace("$search", "<b>$search</b>", "$judul_konten_tampil");
				$isi_konten_tampil		= str_replace("$search", "<b>$search</b>", "$isi_konten_tampil");
			
				$total_kata_semua 	= 0;
				$isi_tambahan		= "<hr>Penilaian Isi Konten<hr>";
				foreach ($keywords as $key=>$keyword)
				{
					$jumlah_kata		= substr_count(strtolower($isi_konten_tampil),strtolower($keyword));
					$jumlah_kata_judul	= substr_count(strtolower($judul_konten_tampil),strtolower($keyword));
					$isi_tambahan	= $isi_tambahan. "Kata <b>$keyword</b> mengandung <b>$jumlah_kata</b> kata pada isi konten. <br>";		
					$total_kata_semua = $total_kata_semua + $jumlah_kata + $jumlah_kata_judul;
				}
			
				$isi_konten_tampil		= $isi_konten_tampil.$isi_tambahan;
				$url_file_tampil		= str_replace("$search", "<b>$search</b>", "$url_file_tampil");
			}
			else
			{	
				$keywords = preg_split('/[\s]+/',$search);
				//$total_keywords = count($keywords);
				$total_keywords = (integer)count($search);
		
				foreach ($keywords as $key=>$keyword)
				{
					//echo 'k: ',$keyword,'<br>';
					$judul_konten_tampil			= str_replace("$keyword", "<b>$keyword</b>", "$judul_konten_tampil");
					$isi_konten_tampil				= str_replace("$keyword", "<b>$keyword</b>", "$isi_konten_tampil");
					$url_file_tampil				= str_replace("$keyword", "<b>$keyword</b>", "$url_file_tampil");
					$isi_konten_tampil_sebagian		= str_replace("$keyword", "<b>$keyword</b>", "$isi_konten_tampil_sebagian");
				
					//case sensitive
					$keyword = strtolower($keyword);
					$judul_konten_tampil			= str_replace("$keyword", "<b>$keyword</b>", "$judul_konten_tampil");
					$isi_konten_tampil				= str_replace("$keyword", "<b>$keyword</b>", "$isi_konten_tampil");
					$url_file_tampil				= str_replace("$keyword", "<b>$keyword</b>", "$url_file_tampil");
					$isi_konten_tampil_sebagian		= str_replace("$keyword", "<b>$keyword</b>", "$isi_konten_tampil_sebagian");
		
				}
		
			
				$judul_konten_tampil	= str_replace("$search", "<b>$search</b>", "$judul_konten_tampil");
				$isi_konten_tampil		= str_replace("$search", "<b>$search</b>", "$isi_konten_tampil");
			
				$total_kata_semua 	= 0;
				$isi_tambahan		= "<hr>Penilaian Isi Konten<hr>";
				foreach ($keywords as $key=>$keyword)
				{
					$jumlah_kata		= substr_count(strtolower($isi_konten_tampil),strtolower($keyword));
					$jumlah_kata_judul	= substr_count(strtolower($judul_konten_tampil),strtolower($keyword));
					$isi_tambahan	= $isi_tambahan. "Kata <b>$keyword</b> mengandung <b>$jumlah_kata</b> kata pada isi konten. <br>";		
					$total_kata_semua = $total_kata_semua + $jumlah_kata + $jumlah_kata_judul;
				}
			
				$isi_konten_tampil		= $isi_konten_tampil.$isi_tambahan;
				$url_file_tampil		= str_replace("$search", "<b>$search</b>", "$url_file_tampil");
			
			}
				echo "<div style=\"font-size:16px;\"><a href='direct_link.php?url=$url_file_tampil' target='_blank'><u><b>$judul_konten_tampil</b> ($total_kata_semua)</u></a></div>
				<div style=\"color: #0C3;font-size:12px;\">$url_file_tampil &nbsp; <a href=\"#\" class=\"big-link\" data-reveal-id=\"myModal$no\">review</a> ($tanggal_update)</div>
				<div id=\"myModal$no\" class=\"reveal-modal\">
				Review Isi Konten <a href=\"$url_file_tampil\" target='_blank'>$judul_konten_tampil</a><hr>
				<p>$isi_konten_tampil</p>
				<a class=\"close-reveal-modal\">&#215;</a>
				</div>
				<div style=\"font-size:12px;\">$isi_konten_tampil_sebagian ...</div><br/>";			
		$no++;		
	}	
}
else
{
	foreach ($errors as $error)
	{
		echo $error, '<br>';
	}
}
?>
	<hr size='1'>
	<div align='center'>
		<a href='http://ilkom.unsri.ac.id'>Ilmu Komputer Unsri</a>&nbsp;
		</a>
	</div>
	<div align='center'><font size='2'>Powered By PHP, CSS, HTML, Jquery, dll</font></div>

</div> <!-- /container -->
<br/>
    <script src="js/dimensions.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
</body>
</html>
