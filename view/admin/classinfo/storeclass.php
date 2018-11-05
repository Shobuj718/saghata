<?php 

include_once '../../../vendor/autoload.php';

use App\admin\Classmain\Classmain;

$class = new Classmain();


 $class->set($_POST)->store();


// echo "<pre>";
// var_dump($class);
// die();

