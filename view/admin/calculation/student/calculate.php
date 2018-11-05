<?php 

// echo "<pre>";
// var_dump($_POST);
//die();

include_once '../../../../vendor/autoload.php' ;

use App\Admin\Calculation\Student\Student;

$calculate = new Student();
$calculate->set($_POST)->store();

// echo "<pre>";
// var_dump($result);

