<?php 



include_once '../../../vendor/autoload.php' ;

use App\Admin\Department\Department;

$department = new Department();

$department->set($_POST)->store();

// echo "<pre>";
// var_dump($result);