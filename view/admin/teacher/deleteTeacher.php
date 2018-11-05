<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 29-Nov-17
 * Time: 12:46 PM
 */

error_reporting(0);

if(!isset($_SESSION)){
    session_start();
}

// include_once '../../../vendor/autoload.php';


// use App\admin\Teacher\Teacher;
// $teacher = new Teacher();

// $id = $_GET['del'];
// $teacher->delete($id);




$id = $_GET['del'];

$db = new PDO("mysql:host=localhost;dbname=kghs;charset=utf8;", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$stmt = $db->prepare("update teacher_data set 
        
        deleted_at = NOW(),
        status = :status
        where unique_id = :id      
        ");
$stmt->bindValue(':status', '2', PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$result = $stmt->execute();

if($result){
    $_SESSION['msg'] = 'Data successfully Deleted !!!';
    echo "<script>window.location= 'allteacher.php'</script>";
}