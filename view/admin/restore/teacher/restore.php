<?php 

include_once '../../../../vendor/autoload.php' ;

use App\admin\Teacher\Teacher;

$teacher = new Teacher();

$id = $_GET['restore'];
$teacher->restoreTeacher($id);