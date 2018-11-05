<?php 

include_once '../../../../vendor/autoload.php' ;

use App\Admin\student\Student;

$id = $_GET['restore'];

$student = new Student();
$student->restoreStudent($id);