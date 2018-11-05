<?php 

include_once '../../../vendor/autoload.php';

use App\admin\Subject\Subject;

$subject = new Subject();

 $subject->set($_POST)->store();




// echo "<pre>";
// var_dump($result);