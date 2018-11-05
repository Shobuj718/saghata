<?php 

include_once '../../../vendor/autoload.php' ;

use App\Admin\Commitee\Commitee;

$commitee = new Commitee();
$id = $_GET['del'];
echo $id;
$commitee->deleteCommitee($id);