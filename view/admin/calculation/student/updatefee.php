<?php 

	echo "<pre>";
	var_dump($_POST);
	//die(); 

    include_once '../../../../vendor/autoload.php';

	use App\Admin\Calculation\Student\Student;

    $student = new Student();
    $results  = $student->set($_POST)->updateStudentFee();

    // echo "<pre>";
    // var_dump($results);
    // die();

 ?>
