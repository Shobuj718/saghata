
<?php
                 
 // if(isset($_SESSION["username"]))  
 // {  
 //    header('location:view/admin/index.php');
 //      // echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
 //      // echo '<br /><br /><a href="logout.php">Logout</a>';  
 // }  
 // else  
 // {  
 //      header("location:../../../index.php");  
 // }
 ?>

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

include_once '../../../includes/header.php' ;
include_once '../../../../vendor/autoload.php';

use App\Admin\Teacher\Teacher;

$teacher = new Teacher();
$results = $teacher->selectDeletedTeacher();



?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    All Teacher before parmanently deleted
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Data tables</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                             
                <?php
            if(isset($_SESSION['restoreteacher'])){
                echo "<div class='alert alert-success'>".$_SESSION['restoreteacher']."</div>";
                //session_unset();
                //session_reset();
            }
            if(isset($_SESSION['deleteteacher'])){
                echo "<div class='alert alert-danger'>".$_SESSION['deleteteacher']."</div>";
                //session_unset();
            } 


            ?>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Teacher_Name</th>
                                        <th>Designation </th>
                                        <th>Work</th>
                                        <th>Qualification</th>
                                        <th>Training</th>
                                        <th>Join_Date</th>
                                        <th>Index_No</th>
                                        <th>MPO_Date</th>
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
                                            <td><?php echo $result['teacher_name']?></td>
                                            <td><?php echo $result['designation']?></td>
                                            <td><?php echo $result['what_work']?></td>
                                            <td><?php echo $result['eduquali']?></td>
                                            <td><?php echo $result['training']?></td>
                                            <td><?php echo $result['join_date']?></td>
                                            <td><?php echo $result['index_number']?></td>
                                            <td><?php echo $result['mpo_date']?></td>

                                            <td>
                                                <img class="img-rounded" src="view/admin/uploads/teacher/<?php echo $result['image']?>" width="80" alt="no image">
                                            </td>
                                            <td>
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
           
                    <a  class="text-primary" href="view/admin/restore/teacher/restore.php?restore=<?php echo $result['unique_id']?>">Restore</a>
                     <br />
                    <a onclick="return confirm('Are you sure to Delete'); " class="text-danger" href="view/admin/restore/teacher/deleteteacher.php?del=<?php echo $result['unique_id']?>">Parmanent Delete</a>
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