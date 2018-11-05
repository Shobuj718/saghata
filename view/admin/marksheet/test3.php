<?php 

echo "<pre>";
var_dump($_POST);
 echo "<pre>";
 //die();
//error_reporting(0);

if(!isset($_SESSION)){
    session_start();
}

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    	
    	$class = $_POST['class'];
    	$shift = $_POST['shift'];
    	$branch = $_POST['branch'];
    	$department = $_POST['department'];
    	$term = $_POST['term'];
    	$student_id = $_POST['student_id'];
    	$unique_id = $_POST['unique_id'];



}
		echo $class;
    	echo $shift;
    	echo $branch;
    	echo $department;
    	echo $student_id; 

    	$stmt = $db->prepare("update allmarks set

    	 class=:class,
    	 shift=:shift,
    	 branch=:branch,
    	 department=:department,
    	 term=:term
    	 WHERE student_id = :student_id;");


    	$stmt->bindValue(':class', $class, PDO::PARAM_STR);
            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
            $stmt->bindValue(':term', $term, PDO::PARAM_STR);
            $stmt->bindValue(':student_id', $student_id, PDO::PARAM_STR);
            //$stmt->bindValue(':unique_id', $unique_id, PDO::PARAM_STR);
            $result = $stmt->execute();

        if($result){
        	header('Location:editallSubMark.php');
        }
