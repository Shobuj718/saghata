<?php 

include_once '../../../vendor/autoload.php' ;

use App\Admin\Section\Section;

$id = $_GET['del'];

$section = new Section();
$section->tmpDeleteSection($id);