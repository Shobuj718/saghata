<?php 

include_once '../../../../vendor/autoload.php' ;

use App\admin\Subject\Subject;

$id = $_GET['restore'];
$restore = new Subject();
$restore->restoreSubject($id);