<?php
	class CreateView extends Dbh{
		protected function saveUser($firstName, $lastName, $userName, $email, $password){
			$sql = "INSERT INTO users(firstName, lastName, userName, email, password) VALUES(?,?,?,?,?)";
			$stmt = $this->connection()->prepare($sql);
			$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
			if(!$stmt->execute(array($firstName, $lastName, $userName, $email, $hashedPwd))){
				$stmt = null;
				header('location:../index.php?error=failedtosaveuser');
				exit();
			}
			$stmt = null;
		}
		protected function checkUser($userName, $email){
			$sql = "SELECT userName FROM users WHERE userName = ? OR email = ?";
			$stmt = $this->connection()->prepare($sql);
			if(!$stmt->execute(array($userName, $email))){
				$stmt = null;
				header('location:../index.php?error=stmtfailled');
				exit();
			}else{
				$checkUser;
				if($stmt->rowCount() > 0){
					$checkUser = false;
				}else{
					$checkUser = true;
				}
				return $checkUser;
			}

		}
	}