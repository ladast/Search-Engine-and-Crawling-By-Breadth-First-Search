<?php
	@error_reporting(0);
	@set_time_limit(0); 
	
	class DB_Koneksi{
		protected $dns   	= "mysql:host=localhost;dbname=semantik";
		protected $db_user  = "root";
		protected $db_pass  = "";
		protected $koneksi 	= "";
 
		public function __construct(){
			$this->getConnect();
		}
		public function getConnect(){  
			try{
				$db = new PDO($this->dns,$this->db_user,$this->db_pass);
				if($db===FALSE){
					throw new Exception("Koneksi Database Gagal");    
				}
				else{
					$this->koneksi = $db;
				}
			}
			catch(Exception $e){
				echo "Error : ".$e->getMessage();
			}
			return $this->koneksi;
		}
		
		public function closeConnect(){
			$this->koneksi = NULL; 
		}
	} 
?> 