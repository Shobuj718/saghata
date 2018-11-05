<?php 

include_once '../../../../vendor/autoload.php' ;

use App\Admin\Section\Section;
$section = new Section();

$id = $_GET['restore'];
$section->restoreSection($id);