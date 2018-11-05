<?php 

// echo "<pre>";
// var_dump($_POST);
// die();


include_once '../../../vendor/autoload.php' ;

use App\Admin\Marksheet\Allmarkstore;

$marksheet = new Allmarkstore();

$unique_id = $_POST['unique_id'];


$marksheet->deleteMarksheet($unique_id);

// echo "<pre>";
// var_dump($delete);
//die();
