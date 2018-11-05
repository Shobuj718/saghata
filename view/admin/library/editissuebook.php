


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

$id = $_GET['edit'];

$result = $library->selectBorrowStudent($id);


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

            <form action="view/admin/library/updateissuebook.php" method="post" >

                <h3 class="text-center" style="color: #2559ee">Book Issue Details </h3>
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
                            <label for="">Student Id:<font color="red" size="4">*</font> </label>
                             <input type="text" name="student_id" class="form-control" value="<?= $result['student_id']; ?>" id="" required="required">
                             <input type="hidden" name="unique_id" class="form-control" value="<?= $result['unique_id']; ?>" id="" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Book Name:<font color="red" size="4">*</font> </label>
                            <input type="text" name="title" class="form-control" value="<?= $result['title']; ?>" id="" required="required">

                        </div>
                    </div>
                    
                    
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Issue Date:<font color="red" size="4">*</font> </label>
                            <input type="date" name="issue_date" class="form-control" value="<?= $result['issue_date']; ?>" id="" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Return Date:<font color="red" size="4">*</font> </label>
                            <input type="date" name="return_date" class="form-control" value="<?= $result['return_date']; ?>"  id="" required="required">
                        </div>
                    </div>
                    
                    
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Quantity:<font color="red" size="4">*</font> </label>
                            <input type="text" name="quantity" class="form-control" value="<?= $result['quantity'];  ?>" id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Fine:<font color="red" size="4">*</font> </label>
                            <input type="text" name="fine" class="form-control" value="<?= $result['fine'];  ?>" id="" required="required">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Status<font color="red" size="4">*</font> </label>
                            <select class="form-control" name="status" >
                                <option <?= $result['status']=='Borrowed'?'selected':'' ?> value="Borrowed">Borrowed</option>
                                <option <?= $result['status']=='Returned'?'selected':'' ?> value="Returned">Returned</option>
                            </select>
                        </div>
                    </div>
                    
                    
                </div>

               
                 <br>

                <div class="form-group">
                    <input type="submit" name="submit"  class="btn btn-primary"  value="Update" id="">
                </div>

            </form>
        
      </div>
      <!-- /.box -->
      
        </div>
    </div>
  </div>
</div>

<?php  include '../includes/footer.php'; ?>

