<?php 

include_once '../../../vendor/autoload.php' ;

use App\Admin\Section\Section;
$section = new Section();

$section->set($_POST)->updateSection();


// echo "<pre>";
// var_dump($result);
// die();