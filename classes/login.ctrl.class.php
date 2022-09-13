<?php
	class LoginCtrl extends LoginView{
		private $userName;
		private $password;
//constructor function
		public function __construct($userName, $password){
			$this->userName = $userName;
			$this->password = $password;
		}

		public function loginUser(){
			if($this->emptyFields() == false){
				header('location:../login.php?error=emptyfields');
				exit();
			}
			$this->credentials($this->userName, $this->password);
		}
										//Error handling for input fields
//balnk fields
		private function emptyFields(){
			$result;
			if(empty($this->userName) || empty($this->password)){
				$result = false;
			}else{
				$result = true;
			}
			return $result;
		}
		
	}