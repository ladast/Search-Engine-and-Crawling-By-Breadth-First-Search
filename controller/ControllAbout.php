<?php
	class ControllAbout extends DB_Koneksi{
		private $entabout;
		
		public function __construct(){
			parent::__construct();
		}
		
		public function setAbout($id,$judul,$isi_about,$url)
		{
			$this->entabout = new EntAbout();
			$this->entabout->setID($id);
			$this->entabout->setJudul($judul);
			$this->entabout->setIsiAbout($isi_about);
			$this->entabout->setURL($url);
		}
				
		public function getAbout(){
			try{
				$sql = "SELECT * FROM about WHERE id=1";
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
		
		public function getURL(){
			try{
				$sql = "SELECT url FROM about WHERE id=1";
				$stmt  =  $this->getConnect()->prepare($sql);
				$stmt->execute(); 
				$result = $stmt->fetch();
				return $result['url'];
				$this->closeConnect();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}

		}		
		
		public function updateAbout(){		
			try{	
				$sql = "UPDATE about SET judul=:judul,isi_about=:isi_about,url=:url WHERE id=:id";
				$stmt = $this->getConnect()->prepare($sql);
				$status = $stmt->execute(array(':judul'=>$this->entabout->getJudul(),':isi_about'=>$this->entabout->getIsiAbout(),':url'=>$this->entabout->getURL(),':id'=>$this->entabout->getID()));
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