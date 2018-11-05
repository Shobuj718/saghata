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
//error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $attend = $_POST['attend'];
//    foreach ($attend as $att_key => $att_value) {
//        echo $att_key."<br />";
//        echo $att_value."<br />";
//    }
//    die();

//insert admin attedance value into tbl_attendance table

//    $currDate = date('Y-m-d');
//    $query = "select distinct att_time from tbl_attendance";
//    $result = $this->db->select($query);
//    while ($getDate = $result->fetch_assoc()) {
//        $dbDate = $getDate['att_time'];
//        if ($currDate == $dbDate) {
//            $msg = "<div class='alert alert-danger'><strong>Erro !</strong>Attendance already taken.</div>";
//            return $msg;
//        }
//    }

    foreach ($attend as $att_key => $att_value) {
        if ($att_value == 'present') {
            $stmt = $db->prepare("insert into tbl_attendance(roll, attend, att_time) values('$att_key', :attend, NOW() )");
            //$stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
            $stmt->bindValue(':attend', 'present', PDO::PARAM_STR);
            //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);


            $result = $stmt->execute();
            header("location:studentAttend.php");


            //$data_insert = $this->db->insert($query);
        } elseif ($att_value == 'absent') {
            $stmt = $db->prepare("insert into tbl_attendance(roll, attend, att_time) values(:roll, :attend, NOW() )");
            $stmt->bindValue(':roll', $att_key, PDO::PARAM_STR);
            $stmt->bindValue(':attend', 'absent', PDO::PARAM_STR);
            //$stmt->bindValue(':att_time', NOW(), PDO::PARAM_STR);


            $result = $stmt->execute();
            header("location:studentAttend.php");

        }
    }

//    if ($result) {
//        $msg = "<div class='alert alert-success'><strong>Success !</strong>Attendance data inserted successfully</div>";
//        //return $msg;
//        header("location:studentAttend.php");
//    } else {
//        $msg = "<div class='alert alert-danger'><strong>Erro !</strong>Attendance data not inserted !</div>";
//        //return $msg;
//        header("location:studentAttend.php");
//    }
}


