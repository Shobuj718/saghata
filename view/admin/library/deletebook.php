<?php 

include_once '../../../vendor/autoload.php';

use App\admin\Library\Library;

$library = new Library();

$id = $_GET['del'];

$library->deleteBook($id);