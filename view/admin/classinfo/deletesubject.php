<?php 

include_once '../../../vendor/autoload.php';

use App\admin\Subject\Subject;

$subject = new Subject();

$id = $_GET['del'];
 
$subject->tmpDeleteSubject($id);