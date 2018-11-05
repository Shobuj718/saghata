


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';

use App\admin\Library\Library;

$library = new Library();
$result = $library->selectAllStudentId();
$bookname = $library->selectAllBookName();


/*foreach($result as $data){
  echo $data['student_id'];
}*/

/*echo"<pre>";
var_dump($result);
die();*/
 ?>


<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->

            <form action="view/admin/library/issuebooklist.php" method="post" >

                <h3 class="text-center" style="color: #2559ee">শিক্ষার্থী কর্তৃক নেয়া বই সমূহ </h3>
                <p><font color="red" size="4">*</font>যে কোনো এক বা একাধিক ফিল্ড পুরুন করে খুজুন </p>
                <hr />

            <?php
            
                if(isset($_SESSION['success'])){
                    echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                    echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                    unset($_SESSION['error']);
                }


            ?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Student Id:</label>
                            <select class="form-control select2" name="student_id"  style="width: 100%;">
                              <option>Select Student ID</option>

                            <?php foreach($result as $data){ 

                              echo "<option>".$data['student_id']."</option>";

                            } ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Book Name:</label>
                            <select class="form-control select2" name="title"  style="width: 100%;">
                              <option>Select Book</option>

                            <?php foreach($bookname as $name){ 

                              echo "<option>".$name['title']."</option>";

                            } ?>

                            </select>

                        </div>
                    </div>
                    
                    
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Issue Date:</label>
                            <input type="date" name="issue_date" class="form-control" placeholder="Enter tile name..." id="" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Return Date: </label>
                            <input type="date" name="return_date" class="form-control" placeholder="Enter Return date..." id="" >
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Status </label>
                            <select class="form-control" name="status" >
                                <option>Select</option>
                                <option>Borrowed</option>
                                <option>Returned</option>
                            </select>
                        </div>
                    </div>
                    
                    
                </div>

               
                 <br>

                <div class="form-group">
                    <input type="submit" name="submit"  class="btn btn-primary"  value="Show List" id="">
                </div>

            </form>
        
      </div>
      <!-- /.box -->
      
        </div>
    </div>
  </div>
</div>

<?php  include '../includes/footer.php'; ?>

