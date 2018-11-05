<?php 


if(!isset($_SESSION)){
    session_start();
}

echo "<pre>";
var_dump($_POST);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	$stmt = $db->prepare("insert into sixtoeightmark(class, shift, section, department, term, student_id ) values(:class, :shift, :section, :department, :term, :student_id )  ");

	$stmt->bindValue(':class', $_POST['class'], PDO::PARAM_STR);
	$stmt->bindValue(':shift', $_POST['shift'], PDO::PARAM_STR);
	$stmt->bindValue(':section', $_POST['section'], PDO::PARAM_STR);
	$stmt->bindValue(':department', $_POST['department'], PDO::PARAM_STR);
	$stmt->bindValue(':term', $_POST['term'], PDO::PARAM_STR);
	$stmt->bindValue(':student_id', $_POST['student_id'], PDO::PARAM_STR);
	
	$stmt->execute();

	if($stmt){
		$_SESSION['success'] = "Data Inserted Successfully ";
		echo "<script>window.location='index.php'</script>";
	}

}
