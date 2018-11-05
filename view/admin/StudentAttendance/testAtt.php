<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 21-Nov-17
 * Time: 12:58 PM
 */
//echo "<pre>";
//var_dump($_POST);

//die();
error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $attend = $_POST['attend'];
    $class = $_POST['class'];
    $shift = $_POST['shift'];
    $branch = $_POST['branch'];
    $department = $_POST['department'];
    //$value = "check";

//    echo $class."<br />";
//    echo $shift."<br />";
//    echo $branch."<br />";
//    echo $department."<br />";
//
//    foreach ($attend as $att_key => $att_value) {
//        echo $att_key."<br />";
//        echo $att_value."<br />";
//    }
////    die();

//insert admin attedance value into tbl_attendance table

    $currDate = date('Y-m-d');
    $query = "select distinct att_time, class, shift, branch, department from tbl_attendance";
    $result = $db->prepare($query);
    $result->execute();
    while ($getDate = $result->fetch(PDO::FETCH_ASSOC)) {
        $dbDate = $getDate['att_time'];
        $class2 = $getDate['class'];
        $shift2 = $getDate['shift'];
        $branch2 = $getDate['branch'];
        $depart2 = $getDate['department'];


        if ($class == $class2 AND $shift == $shift2 AND $branch == $branch2 AND $department == $depart2 AND $dbDate == $currDate) {
            header("location:attendanceAlreadyTaken.php");

        }
    }
       // else{
            foreach ($attend as $att_key => $att_value) {
                if ($att_value == 'present') {
                    $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time) values(:class, :shift, :branch, :department, :roll, :attend, NOW() )");
                    $stmt->bindValue(':class', $class, PDO::PARAM_STR);
                    $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
                    $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
                    $stmt->bindValue(':department', $department, PDO::PARAM_STR);
                    $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
                    $stmt->bindValue(':attend', 'present', PDO::PARAM_STR);


                    $result = $stmt->execute();
                    header("location:attendanceTakenSuccess.php");


                    //$data_insert = $this->db->insert($query);
                } elseif ($att_value == 'absent') {
                    $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time) values(:class, :shift, :branch, :department, :roll, :attend, NOW() )");
                    $stmt->bindValue(':class', $class, PDO::PARAM_STR);
                    $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
                    $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
                    $stmt->bindValue(':department', $department, PDO::PARAM_STR);
                    $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
                    $stmt->bindValue(':attend', 'absent', PDO::PARAM_STR);
                    //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);


                    $result = $stmt->execute();
                    header("location:attendanceTakenSuccess.php");

                }elseif ($att_value == 'leave') {
                    $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time) values(:class, :shift, :branch, :department, :roll, :attend, NOW() )");
                    $stmt->bindValue(':class', $class, PDO::PARAM_STR);
                    $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
                    $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
                    $stmt->bindValue(':department', $department, PDO::PARAM_STR);
                    $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
                    $stmt->bindValue(':attend', 'leave', PDO::PARAM_STR);
                    //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);


                    $result = $stmt->execute();
                    header("location:attendanceTakenSuccess.php");

                }
            }
        }

//        echo $dbDate."<br />";
//        echo $class2."<br />";
//        echo $shift2."<br />";
//        echo $branch2."<br />";
//        echo $depart2."<br />";



//        if ($currDate == $dbDate) {
////            $msg = "<div class='alert alert-danger'><strong>Erro !</strong>Attendance already taken.</div>";
////            return $msg;
//            header("location:attendanceAlreadyTaken.php");
//        }


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


    //}
//}
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




