<?php
	class ControllCrawler extends DB_Koneksi{
		private $entcrawler;
		private $konten;
		private $kelas_link;
		
		public function __construct(){
			parent::__construct();
		}
		
		public function setCrawler($url)
		{
			$this->entcrawler = new EntCrawler();
			$this->entcrawler->setURLCrawler($url);
		}
		
		public function doCrawler(){		
			try{
				//mendapatkan data dari URL yang diberikan
				//extract dari data URL
				//output berupa URL
				$data_file		= $this->getContentFiletoGetTxt($this->entcrawler->getURLCrawler());				
				$data_file_php 	= $this->grabContentFiletoGetPHP($this->entcrawler->getURLCrawler());
				$data_file_html = $this->grabContentFiletoGetHTML($this->entcrawler->getURLCrawler());
				
				$status_crawler = FALSE;
				$status_aksi = FALSE;
				for ( $i = 0; $i < count($data_file[1]); $i++ ) 
				{
					
					$link_file = $data_file[1][$i];
					$nama_file = $data_file[2][$i];
					$judul_file = $data_file[3][$i];
					
					//cek apakah link file exist
					$isi_konten		= $this->getContentFile($link_file);
					$sekarang		= gmdate("Y-m-d H:i:s", time()+60*60*7);
					$waktu_update	= gmdate("Y-m-d H:i:s", time()+60*60*7);						
					$klik			= 0;
					$id_konten		= '';
					
					if ($isi_konten==TRUE)
					{
						//jika URL exist, cek apakah data link sudah ada, jika belum lakukan insert						
						$konten 	 = new ControllKonten();						
						$konten->setKonten($id_konten,$sekarang,$judul_file,$isi_konten,$link_file,$nama_file,$waktu_update,$klik);
						
						$jumlah_konten = $konten->jumlahKontenByURL();
						
						$status_crawler = TRUE;						
						if ($jumlah_konten==0)
						{
							//jika belum,lakukan insert data		
							$konten 	 = new ControllKonten();								
							$konten->setKonten($id_konten,$sekarang,$judul_file,$isi_konten,$link_file,$nama_file,$waktu_update,$klik);							
							$simpan_konten = $konten->insertKonten();
							
						}
						else
						{							
							//cek apakah ada perubahan isi konten dalam isi konten
							$konten = new ControllKonten();						
							$konten->setKonten($id_konten,$sekarang,$judul_file,$isi_konten,$link_file,$nama_file,$waktu_update,$klik);
							$cek_konten = $konten->jumlahKontenByURLAndIsiKonten();
							
							//$cek_konten = $this->jumlahDataUpdate($isi_konten,$link_file);
							if ($cek_konten==0)
							{
								//lakukan update isi konten pada link bersangkutan
								$waktu_update	= gmdate("Y-m-d H:i:s", time()+60*60*7);
								$konten = new ControllKonten();
								$konten->setKonten($id_konten,$sekarang,$judul_file,$isi_konten,$link_file,$nama_file,$waktu_update,$klik);
								$konten->updateDataByCrawler();
							}
						}
					}
					else
					{
					}

				}				
				return $status_crawler;
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		public function cekFileContent($url)
		{
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_NOBODY, true);

			//lakukan request
			$result = curl_exec($curl);
			$ret = false;
			//jika request tidak gagal
			if ($result !== false) {				//jika request ada, cek kode status
				$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);  
				if ($statusCode == 200) {
					$ret = true;   
				}
			}
			curl_close($curl);
			return $ret;
		}	
		
		public function getContent($url){
			//curl
			$cekfile = $this->cekFileContent($url);
			if ($cekfile)
			{
				$ch = curl_init();
				curl_setopt ($ch, CURLOPT_URL, $url);
				curl_setopt ($ch, CURLOPT_HEADER, 0);
				ob_start();
				curl_exec ($ch);
				curl_close ($ch);
				$string = ob_get_contents();
				ob_end_clean();			
				return $string;
			}
			else
			{
				return FALSE;
			}
		}		
		
		public function getContentFiletoGetTxt($url){
			$content = $this->getContent($url);
			preg_match_all( '~<a\040[^>]*?href=\"(.+([^/]+\.txt))\"[^>]*?>(.+)<\/a>~U', $content, $matches );
			for ( $i = 0; $i < count($matches[1]); $i++ ) {
			}
			return $matches;
		}
		
		public function grabContentFiletoGetPHP($url){
			$content = $this->getContent($url);
			preg_match_all( '~<a\040[^>]*?href=\"(.+([^/]+\.php))\"[^>]*?>(.+)<\/a>~U', $content, $matches );

			
			for ( $i = 0; $i < count($matches[1]); $i++ ) {
				//lakukan untuk masukan antrian
				$id_link	= '';
				$link_url 	= $matches[1][$i];
				$status		= 'N';
				$crawled	= 'belum';
				
				$kelas_link		= new ControllLink();
				$kelas_link->setLink($id_link,$link_url,$status,$crawled);
				$insert 		= $kelas_link->insertLink();
			}
		}
		
		public function grabContentFiletoGetHTML($url){
			$content = $this->getContent($url);
			preg_match_all( '~<a\040[^>]*?href=\"(.+([^/]+\.html))\"[^>]*?>(.+)<\/a>~U', $content, $matches );

			
			for ( $i = 0; $i < count($matches[1]); $i++ ) {
				//lakukan untuk masukan antrian
				$link_url 	= $matches[1][$i];
				$status		= 'N';
				$id 		= '';
				$crawled	= 'belum';
				
				$kelas_link	= new ControllLink();
				$kelas_link->setLink($id,$link_url,$status,$crawled);
				$insert 	= $kelas_link->insertLink();
			}
		}
		public function getContentFile($url_file){	
		
			$data_content = $this->getContent($url_file);			
			if ($data_content==TRUE)
			{
				return $data_content;
			}
			else
			{
				return FALSE;
			}
		}
	}
?>