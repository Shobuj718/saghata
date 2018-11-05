<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 21-Nov-17
 * Time: 12:58 PM
 */
// echo "<pre>";
// var_dump($_POST);

// die();

if(!isset($_SESSION)){
    session_start();
}

error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=sphsg;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $attend     = $_POST['attend'];
    $class      = $_POST['class'];
    $shift      = $_POST['shift'];
    $branch     = $_POST['branch'];
    $department = $_POST['department'];
    $insertDate = date("Y/m/d : h:i:sa");
}
//    echo $class."<br />";
//    echo $shift."<br />";
//    echo $branch."<br />";
//    echo $department."<br />";
//
//    foreach ($attend as $att_key => $att_value) {
//        echo $att_key."<br />";
//        echo $att_value."<br />";
//    }
//    die();

//insert admin attedance value into tbl_attendance table
    
   

    $currDate = date('Y-m-d');
    //echo $currDate;
    $query = "select distinct att_time from tbl_attendance";
    $result = $db->prepare($query);
    $result->execute();
    while ($getDate = $result->fetch(PDO::FETCH_ASSOC)) {
        $dbDate = $getDate['att_time'];
        //die();
        if ($dbDate == $currDate) {
            $_SESSION['attTake'] = " Attendance Already Taken !!! ";
            //header("location:attendanceAlreadyTaken.php");
            echo "<script>window.location='searchForTakeAttendance.php'</script>";
            die();
        }
    }
    //die();
//
//    foreach ($class as $class_key => $class_val){
//
//
//    foreach ($shift as $shift_key => $shift_val){
//
//
//    foreach ($branch as $branch_key => $branch_val){
//
//
//    foreach ($department as $department_key => $department_val){


    foreach ($attend as $att_key => $att_value) {
        if ($att_value == 'present') {
            $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time, insertDT) values(:class, :shift, :branch, :department, :roll, :attend, NOW(), NOW() )");
            $stmt->bindValue(':class', $class, PDO::PARAM_STR);
            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
            $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
            $stmt->bindValue(':attend', 'present', PDO::PARAM_STR);
//            $stmt->bindValue(':insertDT', $insertDate, PDO::PARAM_STR);


            $result = $stmt->execute();
            if($result){
                $_SESSION['attTake'] = "Student Attendance Taken Successfully ";
                echo "<script>window.location='searchForTakeAttendance.php</script>";
                //header("location:searchForTakeAttendance.php");                
            }


            //$data_insert = $this->db->insert($query);
        } elseif ($att_value == 'absent') {
            $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time, insertDT) values(:class, :shift, :branch, :department, :roll, :attend, NOW(), NOW() )");
            $stmt->bindValue(':class', $class, PDO::PARAM_STR);
            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
            $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
            $stmt->bindValue(':attend', 'absent', PDO::PARAM_STR);
            //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);


            $result = $stmt->execute();
            if($result){
                $_SESSION['attTake'] = "Student Attendance Taken Successfully ";
                echo "<script>window.location='searchForTakeAttendance.php'</script>";
                //header("location:searchForTakeAttendance.php");                
            }

        }elseif ($att_value == 'leave') {
            $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time, insertDT) values(:class, :shift, :branch, :department, :roll, :attend, NOW(), NOW() )");
            $stmt->bindValue(':class', $class, PDO::PARAM_STR);
            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
            $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
            $stmt->bindValue(':attend', 'leave', PDO::PARAM_STR);
            //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);


            $result = $stmt->execute();
            if($result){
                $_SESSION['attTake'] = "Student Attendance Taken Successfully ";
                echo "<script>window.location='searchForTakeAttendance.php'</script>";
                //header("location:searchForTakeAttendance.php");                
            }

        }
       
    } //}
    //header('location:searchForTakeAttendance.php');

//    foreach ($attend as $att_key => $att_value) {
//        if ($att_value == 'present') {
//            $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time) values($class,$shift,$branch,$department,'$att_key', :attend, NOW() )");
//            //$stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
//            $stmt->bindValue(':attend', 'present', PDO::PARAM_STR);
//            //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);
//
//
//            $result = $stmt->execute();
//            header("location:studentAttend.php");
//
//
//            //$data_insert = $this->db->insert($query);
//        } elseif ($att_value == 'absent') {
//            $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time) values($class,$shift,$branch,$department, :roll, :attend, NOW() )");
//            $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
//            $stmt->bindValue(':attend', 'absent', PDO::PARAM_STR);
//            //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);
//
//
//            $result = $stmt->execute();
//            header("location:studentAttend.php");
//
//        }
//    }

//    if ($result) {
//        $msg = "<div class='alert alert-success'><strong>Success !</strong>Attendance data inserted successfully</div>";
//        //return $msg;
//        header("location:studentAttend.php");
//    } else {
//        $msg = "<div class='alert alert-danger'><strong>Erro !</strong>Attendance data not inserted !</div>";
//        //return $msg;
//        header("location:studentAttend.php");




