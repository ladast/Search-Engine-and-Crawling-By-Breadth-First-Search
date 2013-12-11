<?php
	class EntAbout
	{
		private $id;
		private $judul;
		private $isi_about;
		private $url;
		
		public function setID($value)
		{
			$this->id = $value;
		}
		public function setJudul($value)
		{
			$this->judul = $value;
		}
		
		public function setIsiAbout($value)
		{
			$this->isi_about = $value;
		}
		
		public function setURL($value)
		{
			$this->url = $value;
		}
		
		public function getID()
		{
			return $this->id;
		}
		
		public function getJudul()
		{
			return $this->judul;
		}
		
		public function getIsiAbout()
		{
			return $this->isi_about;
		}	
		
		public function getURL()
		{
			return $this->url;
		}	
	}
 
?>