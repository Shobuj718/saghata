<?php 

include_once '../../../../vendor/autoload.php' ;

use App\admin\Classmain\Classmain;

$id = $_GET['restore'];
$restore = new Classmain();
$restore->restoreClass($id);