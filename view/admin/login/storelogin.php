<?php 

include_once '../../../vendor/autoload.php' ;

use App\Admin\Auth\Auth;

$auth = new Auth();
//$auth->userEmailExist();
$auth->set($_POST)->login();

echo "<pre>";
var_dump($_POST);