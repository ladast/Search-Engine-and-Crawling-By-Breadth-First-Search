<?php
	class EntUser
	{
		private $uid;
		private $username;
		private $password;
		private $name;
		private $email;
		
		public function setUID($value)
		{
			$this->uid = $value;
		}
		
		public function setUsername($value)
		{
			$this->username = $value;
		}
		
		public function setPassword($value)
		{
			$this->password = $value;
		}
		
		public function setName($value)
		{
			$this->name = $value;
		}
		
		public function setEmail($value)
		{
			$this->email = $value;
		}
		
		public function getUID()
		{
			return $this->uid;
		}
		
		public function getUsername()
		{
			return $this->username;
		}	
		
		public function getPassword()
		{
			return $this->password;
		}	
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getEmail()
		{
			return $this->email;
		}
	}
 
?>