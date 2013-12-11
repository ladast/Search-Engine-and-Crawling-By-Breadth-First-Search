<?php
	class ControllLink extends DB_Koneksi{
		private $entlink;
		
		public function __construct(){
			parent::__construct();
		}
		
		public function setLink($id_link,$link,$status,$crawled)
		{
			$this->entlink = new EntLink();
			$this->entlink->setIDLink($id_link);
			$this->entlink->setLink($link);
			$this->entlink->setStatus($status);
			$this->entlink->setCrawled($crawled);
		}
		
		public function insertLink(){
			try{				
				//$this->entlink = new EntLink();
				//cek terlebih dahulu apakah url sudah ada
				$jumlah_link = $this->jumlahLink();
				$status_insert = FALSE;
				if ($jumlah_link==0)
				{
					$sql = "INSERT INTO link_crawler SET link=:link,status=:status";
					$stmt = $this->getConnect()->prepare($sql);
					$stmt->execute(array(':link'=>$this->entlink->getLink(),':status'=>$this->entlink->getStatus()));
					$status_insert = TRUE;
				}
				else
				{
					$status_insert = FALSE;
				}
				$this->closeConnect();
				return $status_insert;
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		public function updateLink(){
			try{
				$sql = "UPDATE link_crawler SET link=:link,status=:status,crawled=:crawled WHERE id_link=:id_link";
				$stmt = $this->getConnect()->prepare($sql);
				$status = $stmt->execute(array(':link'=>$this->entlink->getLink(),':status'=>$this->entlink->getStatus(),':crawled'=>$this->entlink->getCrawled(),':id_link'=>$this->entlink->getIDLink()));
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
		
		public function updateStatusCrawlerLink()
		{
			try{
				$sql = "UPDATE link_crawler SET crawled=:crawled WHERE link=:link";
				$stmt = $this->getConnect()->prepare($sql);
				$status_update = $stmt->execute(array(':crawled'=>$this->entlink->getCrawled(),':link'=>$this->entlink->getLink()));
				
				$this->closeConnect();
				if ($status_update)
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
		
		public function jumlahLink(){
			try{
				$sql = "SELECT * FROM link_crawler WHERE link=:link";
				$stmt  =  $this->getConnect()->prepare($sql);
				$stmt->bindParam(":link",$this->entlink->getLink());
				$stmt->execute(); 
				$jumlah_link = $stmt->rowCount();
				$this->closeConnect();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}			
			return $jumlah_link;		
		}
		
		public function getUrlLinks(){
			try{
				$sql = "SELECT link FROM link_crawler WHERE status='Y' ORDER BY id_link ASC";
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
		
		public function getLinks(){
			try{
				$sql = "SELECT * FROM link_crawler ORDER BY id_link DESC";
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
		
		public function getLink(){
			try{
				$sql  = "SELECT * FROM link_crawler WHERE id_link=:id_link";
				$stmt = $this->getConnect()->prepare($sql);
				$stmt->bindParam(":id_link",$this->entlink->getIDLink());
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
					
		public function deleteLink(){
			try{	
				$sql = "DELETE FROM link_crawler WHERE id_link=:id_link";
				$stmt = $this->getConnect()->prepare($sql);
				$status = $stmt->execute(array(':id_link'=>$this->entlink->getIDLink()));
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