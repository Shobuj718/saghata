

<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 25-Nov-17
 * Time: 10:21 AM
 */

if(!isset($_SESSION)){
    session_start();
}

//include_once '../vendor/autoload.php';
//
//
//$student = new \App\Student\Student();
//$student->set($_POST)->store();

error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

//echo "<pre>";
//var_dump($_POST);
//die();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $class      = $_POST['class'];
    $shift      = $_POST['shift'];
    $branch     = $_POST['branch'];
    $department = $_POST['department'];
    $term       = $_POST['term'];
    $roll       = $_POST['roll'];
    $subject    = $_POST['subject'];
    $fullmark   = $_POST['fullmark'];
    $cq         = $_POST['cq'];
    $mcq        = $_POST['mcq'];
    $practical  = $_POST['practical'];
    $subtotal   = $_POST['subtotal'];
 

    $stmt = $db->prepare("insert into marksheet( class, shift, branch, department, term, year, roll, subject, fullmark, cq, mcq, practical, subtotal, created_at ) VALUES (:class, :shift, :branch, :department, :term, :year, :roll, :subject, :fullmark, :cq, :mcq, :practical, :subtotal, NOW() ) ");

    $stmt->bindValue(':class', $class, PDO::PARAM_STR);
    $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
    $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
    $stmt->bindValue(':department', $department, PDO::PARAM_STR);
    $stmt->bindValue(':term', $term, PDO::PARAM_STR);
    $stmt->bindValue(':year', date('Y'), PDO::PARAM_STR);
    $stmt->bindValue(':roll', $roll, PDO::PARAM_STR);
    $stmt->bindValue(':subject', $subject, PDO::PARAM_STR);
    $stmt->bindValue(':fullmark', $fullmark, PDO::PARAM_INT);
    $stmt->bindValue(':cq', $cq, PDO::PARAM_STR);
    $stmt->bindValue(':mcq', $mcq, PDO::PARAM_STR);
    $stmt->bindValue(':practical', $practical, PDO::PARAM_STR);
    $stmt->bindValue(':subtotal', $subtotal, PDO::PARAM_STR);

    $result = $stmt->execute();

    if($result){
        $_SESSION['msg'] = "Number Added Successfully !!!";
        header('location:markAdd.php');
    }



}