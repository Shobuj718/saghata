 

<?php
    include_once '../../includes/header.php';
    include_once '../../../../vendor/autoload.php';


?>

<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */



use App\admin\student\Student;
$student = new Student();

$results = $student->selectDeleteStudent();
 
 



?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    All Student befor Parmanently Deleted !
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
                                 
                                <?php
            if(isset($_SESSION['restoreStu'])){
                echo "<div class='alert alert-success'>".$_SESSION['restoreStu']."</div>";
                //session_unset();
            }
            if(isset($_SESSION['deletestudent'])){
                echo "<div class='alert alert-danger'>".$_SESSION['deletestudent']."</div>";
                session_unset();
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
                            <th>Shift</th>
                            <th> Branch</th>
                            <th>Department</th>
                            <th>ID</th>
                            <th>Roll</th>
                            <th>Year</th>
                            <th>Image</th>
                            <th>Action</th>
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
                               <td><?php echo $result['shift']?></td>
                               <td><?php echo $result['branch']?></td>
                               <td><?php echo $result['department']?></td>
                               <td><?php echo $result['student_id']?></td>
                               <td><?php echo $result['class_roll']?></td>
                               <td><?php echo $result['year']?></td>

                               <td>
                                   <img src="view/admin/uploads/<?php echo $result['student_image']?>" width="100" alt="no image">
                               </td>
                               <td>
                                   <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                                   <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                                   <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                                 
 
                        <a  class="text-primary" href="view/admin/restore/student/restore.php?restore=<?php echo $result['unique_id']; ?>">Restore</a> 
                         <br />
                        <a onclick="return confirm('Are you sure to Delete'); " class="text-danger" href="view/admin/restore/student/deletestudent.php?del=<?php echo $result['unique_id']; ?>">Parmanently Deleted</a>


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



<?php  include '../../includes/footer.php' ?>