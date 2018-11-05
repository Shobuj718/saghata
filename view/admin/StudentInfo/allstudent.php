
<?php
    

/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */

include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';

use App\admin\student\Student;
$student = new Student();

$stmt = 'SELECT * FROM student_data where person = "student" AND status = "1" ORDER by id DESC';
$results = $student->select($stmt);



?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    সকল শিক্ষার্থী
                    <!-- <small>advanced tables</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Tables</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">শিক্ষার্থীদের সকল তথ্য দেখতে ডানে   view বাটনে ক্লিক করুন </h3>
                            <?php  
                                if($_SESSION['type'] == 'administrator'){
                            ?>
                                <a href="view/admin/StudentInfo/studentInfoAdd.php"><h3 class="box-title pull-right btn btn-primary">নতুন শিক্ষার্থী যোগ  করুন </h3></a>
                            <?php
                              }
                            ?>
                                <?php
            if(isset($_SESSION['msg'])){
                echo "<div class='alert alert-success'>".$_SESSION['msg']."</div>";
                //session_unset();
                unset($_SESSION['msg']);
            }
            if(isset($_SESSION['delete'])){
                echo "<div class='alert alert-danger'>".$_SESSION['delete']."</div>";
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['update'])){
                echo "<div class='alert alert-info'>".$_SESSION['update']."</div>";
                unset($_SESSION['update']);
            }


            ?>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th> No</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Roll</th>
                            <th>Section</th>
                            <th>Shift</th>
                            <th>Department</th>
                            <th>Fa_Phone</th>
							<th>Fa_name</th>
							<th>Ma_name</th>
                            <th>ID</th>
                            <th>Image</th>
							 <th>Action</th>
							 <th>Fa_Image</th>
							  <th>Mo_Image</th>
                          <?php  
                              if($_SESSION['type'] == 'administrator' || $_SESSION['type'] == 'teacher'){
                          ?>


                          <?php } ?>

                        </tr>
                        </thead>
                       <tbody>
                    <?php
                    $sl = 1;
                    foreach ($results as $result) {
                        ?>
                           <tr>
                               <td><?php echo $sl++?></td>
                               <td><?php echo $result['student_name']?></td>
                               <td><?php echo $result['class']?></td>
                               <td><?php echo $result['class_roll']?></td>
                               <td><?php echo $result['branch']?></td>
                               <td><?php echo $result['shift']?></td>
                               <td><?php echo $result['department']?></td>
                               <td><?php echo $result['father_phone']?></td>
							   <td><?php echo $result['father_name']?></td>
                                <td><?php echo $result['mother_name']?></td>

                               <td><?php echo $result['student_id']?></td>

                                <td>
                                   <img src="view/admin/uploads/<?php echo $result['student_image']?>" width="100" alt="no image">
                               </td>
							   
                               <td>
                                   <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                                   <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                                   <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                      
                      <?php  
                          if($_SESSION['type'] == 'teacher'){
                      ?>

                        <a style="color: black" class="text-info" href="view/admin/StudentInfo/showStudent.php?show=<?php echo $result['unique_id']?>">View</a> 

                    <?php
                      }
                    ?>

                      <?php  
                          if($_SESSION['type'] == 'administrator'){
                      ?>

                         <a style="color: black" class="text-info" href="view/admin/StudentInfo/showStudent.php?show=<?php echo $result['unique_id']?>">View</a> 

                       | <a  class="text-primary" href="view/admin/StudentInfo/editStudent.php?edit=<?php echo $result['unique_id']; ?>">Edit</a> |
                        <a onclick="return confirm('Are you sure to Delete'); " class="text-danger" href="view/admin/StudentInfo/deleteStudent.php?del=<?php echo $result['unique_id']; ?>">Delete</a>

                    <?php
                      }
                    ?>

                               </td>
							   
                                <td>
                                   <img src="view/admin/uploads/<?php echo $result['father_image']?>" width="100" alt="no image">
                               </td>
							   
                                <td>
                                   <img src="view/admin/uploads/<?php echo $result['mother_image']?>" width="100" alt="no image">
                               </td>
                           </tr>

                    <?php } ?>

                       </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
            <!-- /.content -->



<?php  include '../includes/footer.php' ?>