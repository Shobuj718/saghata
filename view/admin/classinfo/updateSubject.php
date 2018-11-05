<?php 

include_once '../../../vendor/autoload.php';

use App\admin\Subject\Subject;

$subject = new Subject();

 
$subject->set($_POST)->update();


/*
echo "<pre>";
var_dump($subject);
die();

*/