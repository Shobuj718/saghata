<?php 

include_once '../../../../vendor/autoload.php' ;

use App\Admin\Teacher\Teacher;

$teacher = new Teacher();

$id = $_GET['del'];
$teacher->parmanentDelete($id);