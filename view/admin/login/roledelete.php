<?php 

if(!isset($_SESSION)){
    session_start();
}

error_reporting(0);

require_once 'class.user.php';
$reg_user = new USER();


if($_SERVER['REQUEST_METHOD'] == 'GET')
{
	$token = trim($_GET['del']);
	$data = $reg_user->runQuery("update tbl_users set userStatus=:status where tokenCode=:token ");
    $data->bindValue(':status', 'Y', PDO::PARAM_STR);
    $data->bindValue(':token', $token, PDO::PARAM_STR);
    $data->execute();
    if($data){
      $_SESSION['delete'] = "User Deleted Successfully !!!";
      echo "<script>window.location='showuser.php'</script>";
    }
    //$result = $data->fetch(PDO::PARAM_STR);
    //var_dump($result);
    //die();

}
