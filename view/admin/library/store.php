<?php 

include_once '../../../vendor/autoload.php';


use App\admin\Library\Library;

$library = new Library();

$library->set($_POST)->insert();
//$data = $library->findAllStudentfees();


// echo "<pre>";
// var_dump($result);
// die();


