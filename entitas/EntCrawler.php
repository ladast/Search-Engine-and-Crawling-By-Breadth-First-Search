<?php
	class EntCrawler
	{
		private $urlcrawler;
		
		public function setURLCrawler($value)
		{
			$this->urlcrawler = $value;
		}		
		
		public function getURLCrawler()
		{
			return $this->urlcrawler;
		}
	}
 
?>