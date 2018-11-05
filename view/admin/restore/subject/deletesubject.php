<?php 

include_once '../../../../vendor/autoload.php' ;

use App\admin\Subject\Subject;

$id = $_GET['del'];

$delete = new Subject();
$delete->paramanentDelete($id);