<?php 

include_once '../../../vendor/autoload.php' ;

use App\admin\Classmain\Classmain;

$id = $_GET['del'];

$class = new Classmain();
$class->tmpDeleteClass($id);