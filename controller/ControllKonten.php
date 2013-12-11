<?php
	class ControllKonten extends DB_Koneksi{
		private $entkonten;
		
		public function __construct(){
			parent::__construct();
		}
		
		public function setKonten($id_konten,$tanggal_input,$judul_konten,$isi_konten,$url_file,$nama_file,$tanggal_update,$klik)
		{
			$this->entkonten = new EntKonten();
			$this->entkonten->setIDKonten($id_konten);
			$this->entkonten->setTanggalInput($tanggal_input);
			$this->entkonten->setJudulKonten($judul_konten);
			$this->entkonten->setIsiKonten($isi_konten);
			$this->entkonten->setURLFile($url_file);
			$this->entkonten->setNamaFile($nama_file);
			$this->entkonten->setTanggalUpdate($tanggal_update);
			$this->entkonten->setKlik($klik);
		}
		
		public function getKontens(){
			try{
				$sql = "SELECT * FROM konten ORDER BY id_konten DESC";
				$stmt  =  $this->getConnect()->prepare($sql);
				$stmt->execute(); 
				$data = array();
				while($r = $stmt->fetch(PDO::FETCH_ASSOC)){
					$data[]=$r;
				}
				$this->closeConnect();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
			return $data;	
		}		
		
		public function getKonten(){
			try{
				$sql  = "SELECT * FROM konten WHERE id_konten=:id_konten";
				$stmt = $this->getConnect()->prepare($sql);
				$stmt->bindParam(":id_konten",$this->entkonten->getIDKonten());
				$stmt->execute(); 
				$data = array();
				while($r = $stmt->fetch(PDO::FETCH_ASSOC)){
					$data[]=$r;
				}
				$this->closeConnect();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
			return $data;	
		}		
		
		public function getKontenByID($id_konten){
			try{
				$sql  = "SELECT * FROM konten WHERE id_konten=:id_konten";
				$stmt = $this->getConnect()->prepare($sql);
				$stmt->bindParam(":id_konten",$id_konten);
				$stmt->execute(); 
				$data = array();
				while($r = $stmt->fetch(PDO::FETCH_ASSOC)){
					$data[]=$r;
				}
				$this->closeConnect();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
			return $data;	
		}		
		
		public function getPhrase($string)
		{
			$exploded = explode(" ", $string);
			$combinations = array();
			foreach ($exploded as $x) 
			foreach ($exploded as $y) {
			if($x != $y && !in_array($y.' '.$x,$combinations ))
			array_push($combinations, $x.' '.$y); 
			}
			$keyword_sebenarnya = $string;
			array_push($combinations,$keyword_sebenarnya);		
				
			array_push($combinations, $exploded[0], $exploded[1], $exploded[2]);
			return $combinations;
		}
		
		public function searchKonten($keywords){
			try{
			
				$returned_result = array();
				$where = "";
				
				//$keyword_sebenarnya = $keywords;
				//pecahkan jika terdiri dari s kata
				$cek1 = str_split($keywords);
				$panjang = count($cek1);
				//$isi = "";
				if (($cek1[0]=="+") AND ($cek1[$panjang-1])=="+")
				{
					//$isi = 1;
					//return TRUE;
					$keywords_asli = str_replace("+","",$keywords);
					$keywords_asli	= trim($keywords_asli);
					$keywords = preg_split('/[\s]+/',$keywords_asli);
					$where = "`isi_konten` LIKE '%$keywords_asli%'";
					
					$sql = "SELECT * FROM konten WHERE $where";
					$stmt  =  $this->getConnect()->prepare($sql);
					$stmt->execute(); 
					$jumlah_data = $stmt->rowCount();
					if ($jumlah_data==0)
					{
						return FALSE;
					}
					else
					{
						$data = array();
						$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
						foreach ($results as $row)
						{
							$id 			= $row['id_konten'];
							$judul_konten 	= $row['judul_konten'];
							$isi_konten 	= $row['isi_konten'];
							$url_file 		= $row['url_file'];
							
							//bersihkan isi konten
							$tokenKarakter	= array('’','—',' ','/',',','?','.',':',';',',','!','[',']','{','}','(',')','-','_','+','=','<','>','\'','"','\\','@','#','$','%','^','&','*','`','~','0','1','2','3','4','5','6','7','8','9','â€','”','“');
							$judul_konten	= str_replace($tokenKarakter,' ',$judul_konten);
							$isi_konten		= str_replace($tokenKarakter,' ',$isi_konten);
							
							$jumlah_kata_semua = 0;
							//menghitung jumlah kata yang mengandung kata kunci untuk yang lower
							for ( $x = 0; $x< $total_keywords; $x++) {
								$jumlah_kata_isi_konten	= substr_count(strtolower($isi_konten),strtolower($keywords[$x]));
								$jumlah_kata_judul_konten	= substr_count(strtolower($judul_konten),strtolower($keywords[$x]));
								$jumlah_kata_semua = $jumlah_kata_semua + $jumlah_kata_isi_konten + $jumlah_kata_judul_konten;
							}			
									
							//buat jadi array
							$data_konten[]	= array('id_konten' => $id, 'jumlah_kata_konten' => $jumlah_kata_semua);
						}		
					
						$this->closeConnect();
						return $data_konten;
					}
					
				}
				else
				{
					//$isi = 2;
					//return FALSE;
					
					$keywords = preg_split('/[\s]+/',$keywords);
				
					//push kata sebenarnya ke dalam array yang telah dipecah
					//array_push($keywords,$keyword_sebenarnya);
					
					//hitungan jumlah keyword
					$total_keywords = (integer)count($keywords);
					
					//lakutan iterasi dari setiap keyword		
					foreach ($keywords as $key=>$keyword)
					{
						$where .= "`isi_konten` LIKE '%$keyword%'";
						if ($key != ($total_keywords - 1))
						{
							$where .= " OR ";
						}
					}
				
					$sql = "SELECT * FROM konten WHERE $where";
					$stmt  =  $this->getConnect()->prepare($sql);
					$stmt->execute(); 
					$jumlah_data = $stmt->rowCount();
					if ($jumlah_data==0)
					{
						return FALSE;
					}
					else
					{
						$data = array();
						$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
						foreach ($results as $row)
						{
							$id 			= $row['id_konten'];
							$judul_konten 	= $row['judul_konten'];
							$isi_konten 	= $row['isi_konten'];
							$url_file 		= $row['url_file'];
							
							//bersihkan isi konten
							$tokenKarakter	= array('’','—',' ','/',',','?','.',':',';',',','!','[',']','{','}','(',')','-','_','+','=','<','>','\'','"','\\','@','#','$','%','^','&','*','`','~','0','1','2','3','4','5','6','7','8','9','â€','”','“');
							$judul_konten	= str_replace($tokenKarakter,' ',$judul_konten);
							$isi_konten		= str_replace($tokenKarakter,' ',$isi_konten);
							
							$jumlah_kata_semua = 0;
							//menghitung jumlah kata yang mengandung kata kunci untuk yang lower
							for ( $x = 0; $x< $total_keywords; $x++) {
								$jumlah_kata_isi_konten	= substr_count(strtolower($isi_konten),strtolower($keywords[$x]));
								$jumlah_kata_judul_konten	= substr_count(strtolower($judul_konten),strtolower($keywords[$x]));
								$jumlah_kata_semua = $jumlah_kata_semua + $jumlah_kata_isi_konten + $jumlah_kata_judul_konten;
							}			
									
							//buat jadi array
							$data_konten[]	= array('id_konten' => $id, 'jumlah_kata_konten' => $jumlah_kata_semua);
						}		
					
						$this->closeConnect();
						return $data_konten;
					}
						
				}
				
				//return $isi;
				//return $keywords ;
				
				/*
				$keywords = preg_split('/[\s]+/',$keywords);
				
				//push kata sebenarnya ke dalam array yang telah dipecah
				//array_push($keywords,$keyword_sebenarnya);
				
				//hitungan jumlah keyword
				$total_keywords = (integer)count($keywords);
				
				//lakutan iterasi dari setiap keyword		
				foreach ($keywords as $key=>$keyword)
				{
					$where .= "`isi_konten` LIKE '%$keyword%'";
					if ($key != ($total_keywords - 1))
					{
						$where .= " OR ";
					}
				}
			
				$sql = "SELECT * FROM konten WHERE $where";
				$stmt  =  $this->getConnect()->prepare($sql);
				$stmt->execute(); 
				$jumlah_data = $stmt->rowCount();
				if ($jumlah_data==0)
				{
					return FALSE;
				}
				else
				{
					$data = array();
					$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
					foreach ($results as $row)
					{
						$id 			= $row['id_konten'];
						$judul_konten 	= $row['judul_konten'];
						$isi_konten 	= $row['isi_konten'];
						$url_file 		= $row['url_file'];
						
						//bersihkan isi konten
						$tokenKarakter	= array('’','—',' ','/',',','?','.',':',';',',','!','[',']','{','}','(',')','-','_','+','=','<','>','\'','"','\\','@','#','$','%','^','&','*','`','~','0','1','2','3','4','5','6','7','8','9','â€','”','“');
						$judul_konten	= str_replace($tokenKarakter,' ',$judul_konten);
						$isi_konten		= str_replace($tokenKarakter,' ',$isi_konten);
						
						$jumlah_kata_semua = 0;
						//menghitung jumlah kata yang mengandung kata kunci untuk yang lower
						for ( $x = 0; $x< $total_keywords; $x++) {
							$jumlah_kata_isi_konten	= substr_count(strtolower($isi_konten),strtolower($keywords[$x]));
							$jumlah_kata_judul_konten	= substr_count(strtolower($judul_konten),strtolower($keywords[$x]));
							$jumlah_kata_semua = $jumlah_kata_semua + $jumlah_kata_isi_konten + $jumlah_kata_judul_konten;
						}			
								
						//buat jadi array
						$data_konten[]	= array('id_konten' => $id, 'jumlah_kata_konten' => $jumlah_kata_semua);
					}		
				
					$this->closeConnect();
					return $data_konten;
				}
				*/
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
			//return $data;	
			
		}		
		
		public function rangking($jumlah_kata_konten,$hasil_pencarian)
		{
			array_multisort($jumlah_kata_konten, SORT_DESC, $hasil_pencarian);
		}
		
		public function jumlahKontenByURL(){
			try{
				$sql = "SELECT * FROM konten WHERE url_file=:url_file";
				$stmt  =  $this->getConnect()->prepare($sql);
				$stmt->bindParam(":url_file",$this->entkonten->getURLFile());
				$stmt->execute(); 
				$jumlah_data = $stmt->rowCount();
				$this->closeConnect();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}			
			return $jumlah_data;		
		}
		
		public function jumlahKontenByURLAndIsiKonten(){
			try{
				$sql = "SELECT * FROM konten WHERE isi_konten=:isi_konten AND url_file=:url_file";
				$stmt  =  $this->getConnect()->prepare($sql);
				$stmt->bindParam(":isi_konten",$this->entkonten->getIsiKonten());
				$stmt->bindParam(":url_file",$this->entkonten->getURLFile());
				$stmt->execute(); 
				$jumlah_data = $stmt->rowCount();
				$this->closeConnect();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
			
			return $jumlah_data;
		}
		
		public function insertKonten(){		
			try{	
				$sql = "INSERT INTO konten SET tanggal_input=:tanggal_input,judul_konten=:judul_konten,isi_konten=:isi_konten,url_file=:url_file,nama_file=:nama_file,tanggal_update=:tanggal_update";
				$stmt = $this->getConnect()->prepare($sql);
				$stmt->execute(array(':tanggal_input'=>$this->entkonten->getTanggalInput(),':judul_konten'=>$this->entkonten->getJudulKonten(),':isi_konten'=>$this->entkonten->getIsiKonten(),':url_file'=>$this->entkonten->getURLFile(),':nama_file'=>$this->entkonten->getNamaFile(),':tanggal_update'=>$this->entkonten->getTanggalUpdate()));
				$this->closeConnect();
				return true;
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		public function updateDataByCrawler(){
			try{
				$sql = "UPDATE konten SET isi_konten=:isi_konten,tanggal_update=:tanggal_update WHERE url_file=:url_file";
				$stmt = $this->getConnect()->prepare($sql);
				$stmt->execute(array(':isi_konten'=>$this->entkonten->getIsiKonten(),':tanggal_update'=>$this->entkonten->getTanggalUpdate(),':url_file'=>$this->entkonten->getURLFile()));				
				$this->closeConnect();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		public function updateKonten(){		
			try{	
				$sql = "UPDATE konten SET judul_konten=:judul_konten,isi_konten=:isi_konten,url_file=:url_file,nama_file=:nama_file,tanggal_update=:tanggal_update WHERE id_konten=:id_konten";
				$stmt = $this->getConnect()->prepare($sql);
				$status = $stmt->execute(array(':judul_konten'=>$this->entkonten->getJudulKonten(),':isi_konten'=>$this->entkonten->getIsiKonten(),':url_file'=>$this->entkonten->getURLFile(),':nama_file'=>$this->entkonten->getNamaFile(),':tanggal_update'=>$this->entkonten->getTanggalUpdate(),':id_konten'=>$this->entkonten->getIDKonten()));
				$this->closeConnect();
				if ($status)
				{
					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		public function updateKontenNotFile(){		
			try{	
				$sql = "UPDATE konten SET judul_konten=:judul_konten,tanggal_update=:tanggal_update WHERE id_konten=:id_konten";
				$stmt = $this->getConnect()->prepare($sql);
				$status = $stmt->execute(array(':judul_konten'=>$this->entkonten->getJudulKonten(),':tanggal_update'=>$this->entkonten->getTanggalUpdate(),':id_konten'=>$this->entkonten->getIDKonten()));
				$this->closeConnect();
				if ($status)
				{
					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		public function updateCountKonten(){		
			try{	
				$sql = "UPDATE konten SET klik=klik+1 WHERE url_file=:url_file";
				$stmt = $this->getConnect()->prepare($sql);
				$status = $stmt->execute(array(':url_file'=>$this->entkonten->getURLFile()));
				$this->closeConnect();
				if ($status)
				{
					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		public function deleteKonten(){
			try{	
				$sql = "DELETE FROM konten WHERE id_konten=:id_konten";
				$stmt = $this->getConnect()->prepare($sql);
				$status = $stmt->execute(array(':id_konten'=>$this->entkonten->getIDKonten()));
				$this->closeConnect();
				if ($status)
				{
					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
	}
?>