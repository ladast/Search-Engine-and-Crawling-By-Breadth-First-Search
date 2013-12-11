<?php
	function filter_xss($data) 
	{
		$data = trim(htmlentities(strip_tags($data))); 
		if (get_magic_quotes_gpc())
		$data = stripslashes($data);
		//$data = mysql_real_escape_string($data); 
		//$data =($data); 
		return $data;
	}
	
	//timer function
	function generatestart(){
		$mulai			= microtime();
		$arraymulai 	= explode(" ", $mulai);
		$mulai 			= $arraymulai[1] + $arraymulai[0];
		return $mulai;
	}
	
	function generatestop($mulai){
		$selesai = microtime();
		$arrayselesai = explode(" ", $selesai);
		$selesai = $arrayselesai[1] + $arrayselesai[0];
		$totalwaktu = $selesai - $mulai;
		$totalwaktu = round($totalwaktu, 2);
		// $generate = '.::';
		$generate =  $totalwaktu .' detik';
		//$generate.= '::.<br />----------------------------------------------';
		return $generate;
	}
	
	function tgl_indo($tgl){
		$tanggal = substr($tgl,8,2);
		$bulan = getBulan(substr($tgl,5,2));
		$tahun = substr($tgl,0,4);
		return $tanggal.' '.$bulan.' '.$tahun;		 
	}	
	
	function getBulan($bln){
		switch ($bln){
			case 1: 
					return "Januari";
					break;
			case 2:
					return "Februari";
					break;
			case 3:
					return "Maret";
					break;
			case 4:
					return "April";
					break;
			case 5:
					return "Mei";
					break;
			case 6:
					return "Juni";
					break;
			case 7:
					return "Juli";
					break;
			case 8:
					return "Agustus";
					break;
			case 9:
					return "September";
					break;
			case 10:
					return "Oktober";
					break;
			case 11:
					return "November";
					break;
			case 12:
					return "Desember";
					break;
		}
	} 
	
	function tgl_indo_lengkap($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			//2010-12-25 14:08:13
			$jam = substr($tgl,11,2);
			$menit = substr($tgl,14,2);
			$detik = substr($tgl,17,2);
			return $tanggal.' '.$bulan.' '.$tahun. ' ' .$jam.':'.$menit.':'.$detik.' WIB';		 
	}	
?>