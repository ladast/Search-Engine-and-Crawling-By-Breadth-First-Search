<?php
	class EntKonten
	{
		private $id_konten;
		private $tanggal_input;
		private $judul_konten;
		private $isi_konten;
		private $url_file;
		private $nama_file;
		private $tanggal_update;
		private $klik;
		
		public function setIDKonten($value)
		{
			$this->id_konten = $value;
		}
		public function setTanggalInput($value)
		{
			$this->tanggal_input = $value;
		}
		
		public function setJudulKonten($value)
		{
			$this->judul_konten = $value;
		}
		
		public function setIsiKonten($value)
		{
			$this->isi_konten = $value;
		}
		
		public function setURLFile($value)
		{
			$this->url_file = $value;
		}
				
		public function setNamaFile($value)
		{
			$this->nama_file = $value;
		}
		
		public function setTanggalUpdate($value)
		{
			$this->tanggal_update = $value;
		}
		
		public function setKlik($value)
		{
			$this->klik = $value;
		}
		
		public function getIDKonten()
		{
			return $this->id_konten;
		}
		
		public function getTanggalInput()
		{
			return $this->tanggal_input;
		}
		
		public function getJudulKonten()
		{
			return $this->judul_konten;
		}	
		
		public function getIsiKonten()
		{
			return $this->isi_konten;
		}	
		
		public function getURLFile()
		{
			return $this->url_file;
		}
		
		public function getNamaFile()
		{
			return $this->nama_file;
		}
		
		public function getTanggalUpdate()
		{
			return $this->tanggal_update;
		}
		
		public function getKlik()
		{
			return $this->klik;
		}
	} 
?>