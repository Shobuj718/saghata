<?php 

include_once '../../../vendor/autoload.php';

use App\admin\Library\Library;

$library = new Library();
$library->insertBook($_POST);