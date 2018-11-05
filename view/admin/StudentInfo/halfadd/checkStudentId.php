<?php 

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');


	if(!empty($_POST['student_id'])){
		$student_id = $_POST['student_id'];
		$stmt = $db->prepare("select * from student_data where student_id = '$student_id' ");
		$stmt->execute();

		if($student_id == ''){
			echo "<span class='error'>Please Enter Username </span> ";
			exit();
		}
		elseif ($stmt->fetchColumn() > 0) {
		    echo "<span class='error'>Username <b>".$student_id."</b> not available !!!</span>";
		    exit();
		}
		else{
			echo "<span class='success'>Username <b>".$student_id."</b> available </span>";
			exit();
		}
	}
	

	if(!empty($_POST['email'])){
		$email    = $_POST['email'];
		$stmt = $db->prepare("select * from tbl_users where userEmail= '$email' ");
		$stmt->execute();

		if($email == ''){
			echo "<span class='error'>Please Enter Username </span> ";
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
