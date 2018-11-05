<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 20-Nov-17
 * Time: 12:51 PM
 */
    if(!isset($_SESSION)){
        session_start();
    }

    error_reporting(0);

    $db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


    $id = $_GET['del'];

    //$stmt = $db->prepare("DELETE FROM student_data WHERE id=:id");
    $stmt = $db->prepare("update student_data set 
      
      status = :status,
	  deleted_at=NOW()
      where unique_id = :id
    
    ");

    $stmt->bindValue(':status', '2', PDO::PARAM_STR);
    $stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $result = $stmt->execute();
    if($result){
        $_SESSION['delete'] = "Data Deleted Succesfully !!!";
        header("location:allstudent.php");
    }

?>