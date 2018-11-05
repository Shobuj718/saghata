<?php 

include_once '../../../../../vendor/autoload.php' ;

use App\admin\Onetofive\Onetofive;

// var_dump($_POST);
// die();

$class 		= $_POST['class'];
$term    	= $_POST['term'];
$year    	= $_POST['year'];
$student_id = $_POST['student_id'];

$onetofive = new Onetofive();

$onetofive->restoreOnetofiveMarksheet($class, $term, $year, $student_id);

