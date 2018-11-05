<?php 

// echo "<pre>";
// var_dump($_POST);
// die();

include_once '../../../vendor/autoload.php';

use App\admin\Library\Library;

$library = new Library();

$library->set($_POST)->update();

/*echo "<pre>";
var_dump($result);
die();*/


