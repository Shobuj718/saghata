<?php 

include_once '../../../vendor/autoload.php' ;

use App\admin\Auth\Auth;

$auth = new Auth();

$auth->set($_POST)->store();

// echo "<pre>";
// var_dump($result);