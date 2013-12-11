<?php
	/* 	file crawler.php
		untuk melakukan crawler
	*/
	@error_reporting(0);
	@set_time_limit(0); 
	include_once 'DB_Koneksi.php';
	include_once 'controller/ControllCrawler.php';
	include_once 'entitas/EntCrawler.php';
	include_once 'controller/ControllKonten.php';
	include_once 'entitas/EntKonten.php';
	include_once 'controller/ControllLink.php';
	include_once 'entitas/EntLink.php';
	include_once 'fungsi/fungsi.php';

	
	//menghitung untuk lama eksekusi
	$mulai = generatestart();
	
	$kelas_link = new ControllLink();
	$id			= '';
	$link		= '';
	$status 	= '';
	$crawled 	= '';
	$data_link = $kelas_link->getUrlLinks();
	
	//ekstrak data link yang di dapat	
	foreach($data_link as $value)
	{				
		//buat kelas Crawler
		$crawler = new ControllCrawler();		
		$crawler->setCrawler($value['link']);		
		//lakukan fungsi doCrawler		
		$status_crawler = $crawler->doCrawler();		
		//echo $status_crawler;		
		if ($status_crawler==TRUE)		{
			//jika dilakukan crawler, update flag status di data link crawler
			//$kelas_link2 	= new ControllLink();
			$id 			= '';
			$link 			= $value['link'];
			$status 		= '';
			$crawled 		= 'sudah';			
			$kelas_link->setLink($id,$link,$status,$crawled);
			$kelas_link->updateStatusCrawlerLink();	
		}		
	}
	//hentikan waktu ekskusi
	$waktu_butuh = generatestop($mulai);
	//cetak waktu ekskusi
	echo "Waktu : $waktu_butuh";
?>