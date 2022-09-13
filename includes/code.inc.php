<?php
if(isset($_POST['submit'])){
	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$userName = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
}
include('../classes/dbh.class.php');
include('../classes/create.view.class.php');
include('../classes/create.ctrl.class.php');
$signupObj = new CreateCtrl($firstName, $lastName, $userName, $email, $password, $password2);
$signupObj->createUser();
header('location:../index.php?error=none');
exit();