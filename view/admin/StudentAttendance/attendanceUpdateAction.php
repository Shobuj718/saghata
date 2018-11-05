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

if(!isset($_SESSION)){
    session_start();
}

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
    $dateSelect = $_POST['dateSelect'];

    $str = date('m-d-Y');
     $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
     /*echo $dt->format('F j, Y, g:i a'); 
     echo $dt->format('g:i a');
*/
     if ($dt->format('g:i a') > '4:00 pm') {
         $_SESSION['attUpErr'] = " Attendance Update time end !!! ";
         //header("location:attendanceAlreadyTaken.php");
         echo "<script>window.location='searchByDateWise.php'</script>";
         die();
     }


    foreach ($attend as $att_key => $att_value){
        if($att_value == 'present'){
            $update = $db->prepare("update tbl_attendance set 
                        attend = :present,
                        updated_at = NOW()
                        where roll = '".$att_key."'and att_time = '".$dateSelect."' ");
            $update->bindValue(':present', 'present', PDO::PARAM_STR);
            $result = $update->execute();
            if($result){
                $_SESSION['attUpdate'] = "Attendance Update Successfully";
                echo "<script>window.location='searchByDateWise.php'</script>";
                //header('Location:searchByDateWise.php');
            }
        }

        elseif($att_value == 'absent'){
            $update = $db->prepare("update tbl_attendance set 
                        attend = :absent,
                        updated_at = NOW()
                        where roll = '".$att_key."'and att_time = '".$dateSelect."' ");
            $update->bindValue(':absent', 'absent', PDO::PARAM_STR);
            $result = $update->execute();
            if($result){
                $_SESSION['attUpdate'] = "Attendance Update Successfully";
                echo "<script>window.location='searchByDateWise.php'</script>";
                //header('location:searchByDateWise.php');
            }
        }

        elseif($att_value == 'leave'){
            $update = $db->prepare("update tbl_attendance set
             attend = :leave,
             updated_at = NOW()
             where roll = '".$att_key."' and att_time = '".$dateSelect."' ");
            $update->bindValue(':leave', 'leave', PDO::PARAM_STR);
            $result = $update->execute();
            if($result){
                $_SESSION['attUpdate'] = "Attendance Update Successfully";
                echo "<script>window.location='searchByDateWise.php'</script>";
                //header('location:searchByDateWise.php');
            }
        }
    }


}

    //header('location:searchByDateWise.php');
//echo "this is simple page";
//    die();
//
////insert admin attedance value into tbl_attendance table
//
////    $currDate = date('Y-m-d');
////    $query = "select distinct att_time from tbl_attendance";
////    $result = $this->db->select($query);
////    while ($getDate = $result->fetch_assoc()) {
////        $dbDate = $getDate['att_time'];
////        if ($currDate == $dbDate) {
////            $msg = "<div class='alert alert-danger'><strong>Erro !</strong>Attendance already taken.</div>";
////            return $msg;
////        }
////    }
////
////    foreach ($class as $class_key => $class_val){
////
////
////    foreach ($shift as $shift_key => $shift_val){
////
////
////    foreach ($branch as $branch_key => $branch_val){
////
////
////    foreach ($department as $department_key => $department_val){
//
//
//    foreach ($attend as $att_key => $att_value) {
//        if ($att_value == 'present') {
//
//        $stmt = $db->prepare("UPDATE tbl_attendance SET
//        class      = :class,
//        shift      = :shift,
//        branch     = :branch,
//        department = :department,
//        roll       = :roll,
//        attend     = :attend,
//        att_time   = :NOW()
//
//        where currentdate = :dbDate");
//
//            $stmt->bindValue(':class', $class, PDO::PARAM_STR);
//            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
//            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
//            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
//            $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
//            $stmt->bindValue(':attend', 'present', PDO::PARAM_STR);
//
//
//            $result = $stmt->execute();
//            header("location:attendanceTakenSuccess.php");
//
////            $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time) values(:class, :shift, :branch, :department, :roll, :attend, NOW() )");
////            $stmt->bindValue(':class', $class, PDO::PARAM_STR);
////            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
////            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
////            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
////            $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
////            $stmt->bindValue(':attend', 'present', PDO::PARAM_STR);
////
////
////            $result = $stmt->execute();
//
//
//            //$data_insert = $this->db->insert($query);
//        } elseif ($att_value == 'absent') {
//            $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time) values(:class, :shift, :branch, :department, :roll, :attend, NOW() )");
//            $stmt->bindValue(':class', $class, PDO::PARAM_STR);
//            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
//            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
//            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
//            $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
//            $stmt->bindValue(':attend', 'absent', PDO::PARAM_STR);
//            //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);
//
//
//            $result = $stmt->execute();
//            header("location:attendanceTakenSuccess.php");
//
//        }elseif ($att_value == 'leave') {
//            $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time) values(:class, :shift, :branch, :department, :roll, :attend, NOW() )");
//            $stmt->bindValue(':class', $class, PDO::PARAM_STR);
//            $stmt->bindValue(':shift', $shift, PDO::PARAM_STR);
//            $stmt->bindValue(':branch', $branch, PDO::PARAM_STR);
//            $stmt->bindValue(':department', $department, PDO::PARAM_STR);
//            $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
//            $stmt->bindValue(':attend', 'leave', PDO::PARAM_STR);
//            //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);
//
//
//            $result = $stmt->execute();
//            header("location:attendanceTakenSuccess.php");
//
//        }
//    //} //}
//
////    foreach ($attend as $att_key => $att_value) {
////        if ($att_value == 'present') {
////            $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time) values($class,$shift,$branch,$department,'$att_key', :attend, NOW() )");
////            //$stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
////            $stmt->bindValue(':attend', 'present', PDO::PARAM_STR);
////            //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);
////
////
////            $result = $stmt->execute();
////            header("location:studentAttend.php");
////
////
////            //$data_insert = $this->db->insert($query);
////        } elseif ($att_value == 'absent') {
////            $stmt = $db->prepare("insert into tbl_attendance(class, shift, branch, department, roll, attend, att_time) values($class,$shift,$branch,$department, :roll, :attend, NOW() )");
////            $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
////            $stmt->bindValue(':attend', 'absent', PDO::PARAM_STR);
////            //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);
////
////
////            $result = $stmt->execute();
////            header("location:studentAttend.php");
////
////        }
////    }
//
////    if ($result) {
////        $msg = "<div class='alert alert-success'><strong>Success !</strong>Attendance data inserted successfully</div>";
////        //return $msg;
////        header("location:studentAttend.php");
////    } else {
////        $msg = "<div class='alert alert-danger'><strong>Erro !</strong>Attendance data not inserted !</div>";
////        //return $msg;
////        header("location:studentAttend.php");
//
//}
//

?>

