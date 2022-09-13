<?php
	class CreateCtrl extends CreateView{
		private $firstName;
		private $lastName;
		private $userName;
		private $email;
		private $password;
		private $password2;
//constructor function
		public function __construct($firstName, $lastName, $userName, $email, $password, $password2){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->userName = $userName;
			$this->email = $email;
			$this->password = $password;
			$this->password2 = $password2;
		}
		public function createUser(){
			if($this->emptyFields() == false){
				header('location:../index.php?error=emptyfields');
				exit();
			}
			if($this->matchingPasswords() == false){
				header('location:../index.php?error=passwordsdontmatch');
				exit();
			}
			if($this->validEmail() == false){
				header('location:../index.php?error=invalidemail');
				exit();
			}
			if($this->passwordValidation() == false){
				header('location:../index.php?error=invalidpassword');
				exit();
			}
			if($this->fnameValidation() == false){
				header('location:../index.php?error=invalidfirstname');
				exit();
			}
			if($this->lnameValidation() == false){
				header('location:../index.php?error=invalidlastname');
				exit();
			}
			if($this->unameValidation() == false){
				header('location:../index.php?error=invalidusername');
				exit();
			}
			if($this->userExists() == false){
				header('location:../index.php?error=usernamealreadytaken');
				exit();
			}
			$this->saveUser($this->firstName, $this->lastName, $this->userName, $this->email, $this->password);
		}
										//Error handling for input fields
//balnk fields
		private function emptyFields(){
			$result;
			if(empty($this->firstName) || empty($this->lastName) || empty($this->userName) || empty($this->email) || empty($this->password) || empty($this->password2)){
				$result = false;
			}else{
				$result = true;
			}
			return $result;
		}
//passwords matching
		private function matchingPasswords(){
			$result;
			if($this->password !== $this->password2){
				$result = false;
			}else{
				$result = true;
			}
			return $result;
		}
//email validation
		private function validEmail(){
			$result;
			if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
				$result = false;
			}else{
				$result = true;
			}
			return $result;
		}
//password validation
		private function passwordValidation(){
			$result;
			if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,50}$/', $this->password)){
				$result = false;
			}else{
				$result = true;
			}
			return $result;
		}
//unamevalidations
		private function fnameValidation(){
			$result;
			if(!preg_match("/^[a-zA-Z]*$/", $this->firstName)){
				$result = false;
			}else{
				$result = true;
			}
			return $result;
		}
		private function lnameValidation(){
			$result;
			if(!preg_match("/^[a-zA-Z]*$/", $this->firstName)){
				$result = false;
			}else{
				$result = true;
			}
			return $result;
		}
		private function unameValidation(){
			$result;
			if(!preg_match("/^[a-zA-Z0-9]*$/", $this->firstName)){
				$result = false;
			}else{
				$result = true;
			}
			return $result;
		}
//user exists in database
		private function userExists(){
			$result;
			if(!$this->checkUser($this->userName, $this->email)){
				$result = false;
			}else{
				$result = true;
			}
			return $result;
		}
	}