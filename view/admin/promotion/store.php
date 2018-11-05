<?php 

include_once '../../../vendor/autoload.php';

use App\admin\Promotion\Promotion;

$promotion = new Promotion();

$result = $promotion->set($_POST);

echo "<pre>";
var_dump($result);
//die();