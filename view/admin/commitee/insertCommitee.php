<?php 

echo "<pre>";
var_dump($_POST);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	$stmt = $db->prepare("insert into commitee(name, sex, designation, eduquali, join_date, status, unique_id, created_at ) values(:name, :sex, :designation, :eduquali, :join_date, :status, :unique_id, NOW() )  ");

	$stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
	$stmt->bindValue(':sex', $_POST['sex'], PDO::PARAM_STR);
	$stmt->bindValue(':designation', $_POST['designation'],  PDO::PARAM_STR);
	$stmt->bindValue(':eduquali', $_POST['eduquali'],  PDO::PARAM_STR);
	$stmt->bindValue(':join_date', $_POST['join_date'],  PDO::PARAM_STR);
	$stmt->bindValue(':status', 1, PDO::PARAM_STR);
	$stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);
	$stmt->execute();
	if($stmt){
		$_SESSION['commitee'] = "Data Inserted Successfully ";
		echo "<script>window.location='index.php'</script>";
	}

}
