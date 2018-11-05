<?php 

include_once '../../../../../vendor/autoload.php';

use App\admin\Ninetenscience\Ninetenscience;

$ssc = new Ninetenscience();

// var_dump($_POST);
// die();
$class   = $_POST['class'];
$dept    = $_POST['department'];
$term    = $_POST['term'];
$year    = $_POST['year'];
$student_id = $_POST['student_id'];

$ssc->restoreSSCMarksheet($class, $dept, $term, $year, $student_id);
