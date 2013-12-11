<?php
	class ControllUser extends DB_Koneksi{
		private $entuser;
		
		public function __construct(){
			parent::__construct();
		}

		public function setUser($uid,$username,$password,$name,$email)
		{
			$this->entuser = new EntUser();
			$this->entuser->setUID($uid);
			$this->entuser->setUsername($username);
			$this->entuser->setPassword($password);
			$this->entuser->setName($name);
			$this->entuser->setEmail($email);
		}
		
		public function cekLoginUser(){
				try{
				$sql 	= "SELECT * FROM users WHERE username=:username AND password=:password";
				$stmt  	= $this->getConnect()->prepare($sql);
				$stmt->bindParam(":username",$this->entuser->getUsername());
				$stmt->bindParam(":password",$this->entuser->getPassword());
				$stmt->execute(); 
				$jumlah_user = $stmt->rowCount();
				$status_login = FALSE;
				if ($jumlah_user==1)
				{
					$_SESSION['login'] = true;
					$_SESSION['username'] = $this->entuser->getUsername();
					$status_login		= TRUE;
				}
				else
				{
					$status_login		= FALSE;
				}
				
				return $status_login;
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}	
		}
		
		public function get_session()
		{
			if (isset($_SESSION['login']))
			{
				return $_SESSION['login'];
			}
		}
		
		public function get_username()
		{
			if (isset($_SESSION['get_username']))
			{
				return $_SESSION['get_username'];
			}
		}
		
		public function jumlahUsername(){
			try{
				$sql = "SELECT * FROM users WHERE username=:username";
				$stmt  =  $this->getConnect()->prepare($sql);
				$stmt->bindParam(":username",$this->entuser->getUsername());
				$stmt->execute(); 
				$jumlah_data = $stmt->rowCount();
				$this->closeConnect();
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}			
			return $jumlah_data;		
		}
		public function getUsers(){
			try{
				$sql = "SELECT * FROM users ORDER BY uid DESC";
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
		
		public function getUser(){
			try{
				$sql  = "SELECT * FROM users WHERE uid=:uid";
				$stmt = $this->getConnect()->prepare($sql);
				$stmt->bindParam(":uid",$this->entuser->getUID());
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
		
		public function insertUser(){		
			try{	
				$jumlah_username = $this->jumlahUsername();
				$status_insert = FALSE;
				if ($jumlah_username==0)
				{
					$sql = "INSERT INTO users SET username=:username,password=:password,name=:name,email=:email";
					$stmt = $this->getConnect()->prepare($sql);
					$stmt->execute(array(':username'=>$this->entuser->getUsername(),':password'=>$this->entuser->getPassword(),':name'=>$this->entuser->getName(),':email'=>$this->entuser->getEmail()));
					$this->closeConnect();
					$status_insert =  true;
				}
				else
				{
					$status_insert =  false;
				}
				return $status_insert;
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		public function updateUser(){		
			try{	
				$sql = "UPDATE users SET username=:username,name=:name,email=:email WHERE uid=:uid";
				$stmt = $this->getConnect()->prepare($sql);
				$status = $stmt->execute(array(':username'=>$this->entuser->getUsername(),':name'=>$this->entuser->getName(),':email'=>$this->entuser->getEmail(),':uid'=>$this->entuser->getUID()));
				$this->closeConnect();
				$status_update = FALSE;
				if ($status)
				{
					$status_update = TRUE;
				}
				else
				{
					$status_update = FALSE;
				}
				
				return $status_update;
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		public function deleteUser(){
			try{	
				$sql = "DELETE FROM users WHERE uid=:uid";
				$stmt = $this->getConnect()->prepare($sql);
				$status = $stmt->execute(array(':uid'=>$this->entuser->getUID()));
				$this->closeConnect();
				$status_delete = FALSE;
				if ($status)
				{
					$status_delete = TRUE ;
				}
				else
				{
					$status_delete = FALSE ;
				}
				
				return $status_delete;
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}
		
		public function logout(){
			$_SESSION['login'] = FALSE;
        	session_destroy();
		}
	}

?>