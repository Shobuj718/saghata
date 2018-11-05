<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 27-Nov-17
 * Time: 5:51 PM
 */
if(!isset($_SESSION)){
    session_start();
}
//echo "<pre>";
//var_dump($_POST);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $class = $_POST['class'];
    $shift = $_POST['shift'];
    $branch = $_POST['branch'];
    $deparment = $_POST['department'];
    $term    = $_POST['term'];
    $roll = $_POST['roll'];
    $subject = $_POST['subject'];
    $cq  = $_POST['cq'];
    $mcq  = $_POST['mcq'];
    $practical = $_POST['practical'];

    $db = new PDO("mysql:host=localhost;dbname=bangla;charset=utf8;", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $db->prepare("update marksheet set 

              cq  = :cq,
              mcq = :mcq,
              practical = :practical,
              updated_at = NOW()
              where roll = '".$roll."'and subject = '".$subject."' ");

    //$stmt->bindValue(':term', $term, PDO::PARAM_STR);
    //$stmt->bindValue(':roll', $roll, PDO::PARAM_STR);
    //$stmt->bindValue(':subject', $subject, PDO::PARAM_STR);
    $stmt->bindValue(':cq', $cq, PDO::PARAM_STR);
    $stmt->bindValue(':mcq', $mcq, PDO::PARAM_STR);
    $stmt->bindValue(':practical', $practical,PDO::PARAM_STR);
    //$stmt->bindValue(':roll2', $roll, PDO::PARAM_STR);
    //$stmt->bindValue(':subject2', $subject, PDO::PARAM_STR);
    $result = $stmt->execute();
    if($result){
        $_SESSION['msg'] = "Marks Updated Successfully ";
        echo "<script>window.location='markUpdateSuccess.php'</script>";
        //header('Location:markUpdateSuccess.php');
    }
}