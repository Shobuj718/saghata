<?php 

include_once '../../../../vendor/autoload.php' ;

use App\Admin\student\Student;

$id = $_GET['del'];
$student = new Student();

$student->parmanentDeleteStudent($id);