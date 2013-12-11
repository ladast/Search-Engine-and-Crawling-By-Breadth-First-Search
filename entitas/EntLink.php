<?php
	class EntLink
	{
		private $id_link;
		private $link;
		private $status;
		private $crawled;
		
		public function setIDLink($value)
		{
			$this->id_link = $value;
		}
		
		public function setLink($value)
		{
			$this->link = $value;
		}
		
		public function setStatus($value)
		{
			$this->status = $value;
		}
		
		public function setCrawled($value)
		{
			$this->crawled = $value;
		}
		
		public function getIDLink()
		{
			return $this->id_link;
		}
		
		public function getLink()
		{
			return $this->link;
		}	
		
		public function getStatus()
		{
			return $this->status;
		}	
		
		public function getCrawled()
		{
			return $this->crawled;
		}
	}
 
?>