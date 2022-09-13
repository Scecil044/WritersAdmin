<?php
class LoginView extends Dbh{
	public function credentials($userName, $password){
		$sql = "SELECT password FROM users WHERE userName = ? OR email = ?";
		$stmt = $this->connection()->prepare($sql);
		if(!$stmt->execute(array($userName, $password))){
			$stmt = null;
			header('location:../login.php?stmtfailled');
			exit();
		}
		if($stmt->rowCount() == 0){
			$stmt = null;
			header('location:../login.php?usernotfound');
			exit();
		}
			$hashedPassword = $stmt->fetchAll();
			$checkPass = password_verify($password, $hashedPassword->password);

			if($checkPass == false){
			header('location:../login.php?wrongpassword');
			exit();
			}elseif($checkPass == true){
				$sql = "SELECT * FROM users WHERE userName = ? OR email = ? AND password = ?";

				if(!$stmt->execute(array($userName, $userName, $password))){
				$stmt = null;
				header('location:../login.php?stmtfailled');
				exit();
			}
				if($stmt->rowCount() == 0){
				$stmt = null;
				header('location:../login.php?usernotfound');
				exit();
			}
			$user = $stmt->fetchAll();
			session_start();
			$_SESSION['userId'] = $user->id;
			$_SESSION['userName'] = $user->userName;
			$stmt = null;
		}

	}
}