<?php
if(isset($_POST['submit'])){
	$userName = $_POST['name'];
	$password = $_POST['password'];
}
include('../classes/dbh.class.php');
include('../classes/login.view.class.php');
include('../classes/login.ctrl.class.php');

$loginObj = new LoginCtrl($userName, $password);
$loginObj->loginUser();
header('location:../login.php?error=none');
exit();