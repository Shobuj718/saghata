<?php 


include_once '../../../vendor/autoload.php' ;
use App\admin\Onetofive\Onetofive;

$ontofive  = new Onetofive();

$class = $_POST['class'];
$term  = $_POST['term'];
$year  = $_POST['year'];
$student_id = $_POST['student_id'];

$ontofive->deleteMarksheet($class, $term, $year, $student_id);

