<?php
class Dbh{
	protected function connection(){
		try{
			$user = 'root';
			$pwd = '';
			$pdo = new PDO('mysql:host=localhost;dbname=writers_admin', $user, $pwd);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			return $pdo;
		}catch(PDOException $e){
			echo 'An error was encountered'. $e->getMessage();
		}
	}
}