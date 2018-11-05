<?php

include_once '../../../vendor/autoload.php' ;

use App\admin\Section\Section;

$section = new Section();
$section->set($_POST)->store();






// echo "<pre>";
// var_dump($result);