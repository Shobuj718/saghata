<?php 

include_once '../../../../vendor/autoload.php' ;

use App\admin\Classmain\Classmain;

$id = $_GET['del'];

$restore = new Classmain();
$restore->parmanentDeleteClass($id);