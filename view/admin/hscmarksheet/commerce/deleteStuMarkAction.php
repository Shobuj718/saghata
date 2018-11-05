<?php 

// echo "<pre>";
// var_dump($_POST);
// die();

include_once '../../../../vendor/autoload.php' ;

use App\Admin\Ninetenscience\Ninetenscience;

$ninetenscience = new Ninetenscience();

$class = $_POST['class'];
$term  = $_POST['term'];
$year  = $_POST['year'];
$student_id = $_POST['student_id'];

$ninetenscience->deleteNineTenMarkCommerce($class, $term, $year, $student_id);

// echo "<pre>";
// var_dump($delete);
//die();

?>
<?php //include_once '../includes/header.php'; ?>
<!-- 



<div class="col-md-12">

  <div class="row">
    <div class="content">
        <form action="view/admin/marksheet/deleteStuMarkAction2.php" method="post">

        <br />
                <h3 style="font-size: 20px; text-align: center; color: green;">Delete Students Marksheet or All Mark</h3>
                <br />

                
   
 
            <div class="row">                
                <div class="col-md-6 col-md-offset-3">                        
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর আইডি নম্বর :</label>
                        <input type="text" name="student_id" value="<?= $delete['student_id']; ?>"  class="form-control" placeholder="Enter id..." id="" required="">
                        <input type="hidden" name="unique_id" value="<?= $delete['unique_id']; ?>"  class="form-control" placeholder="Enter id..." id="" required="">
                    </div>

                </div>
            </div> 

             <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div> 

            </form>
        </div>  
    </div>  
</div>  


 -->
<?php //include_once '../includes/footer.php'; ?>
