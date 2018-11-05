<?php 

	

    include_once '../../../../vendor/autoload.php';

	use App\Admin\Calculation\Student\Student;

    $id = $_GET['del'];

    $student = new Student();
    $student->deleteStudentFee($id);

    // echo "<pre>";
    // var_dump($results);
    // die();

 ?>
