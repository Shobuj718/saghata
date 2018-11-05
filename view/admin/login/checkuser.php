<?php 

//$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');

require_once 'class.user.php';
error_reporting(0);
$reg_user = new USER();




if(!empty($_POST['username'])){

	$username = $_POST['username'];

	$stmt = $reg_user->runQuery("select * from tbl_users where userName= '$username' ");
	$stmt->execute();

	if($username == ''){
		echo "<span class='error'>Please Enter Username </span> ";
		exit();
	}
	elseif ($stmt->fetchColumn() > 0) {
	    echo "<span class='error'>Username <b>".$username."</b> not available !!!</span>";
	    exit();
	}
	else{
		echo "<span class='success'>Username <b>".$username."</b> available </span>";
		exit();
	}

}

if(!empty($_POST['email'])){

	$email    = $_POST['email'];

	$stmt = $reg_user->runQuery("select * from tbl_users where userEmail= '$email' ");
	$stmt->execute();

	if($email == ''){
		echo "<span class='error'>Please Enter Email </span> ";
		exit();
	}
	elseif ($stmt->fetchColumn() > 0) {
	    echo "<span class='error'>Email <b>".$email."</b> not available !!!</span>";
	    exit();
	}
	else{
		echo "<span class='success'>Email <b>".$email."</b> available </span>";
		exit();
	}

}