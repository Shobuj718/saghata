


<?php
    include_once '../../includes/header.php';
    include_once '../../../../vendor/autoload.php';

    
    //select all student fee from below file... 
 
    use App\Admin\student\Student;
    $student = new Student();
    $results  = $student->selectAllStudent();

    // echo "<pre>";
    // var_dump($results);
    // die();

 ?>

 


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */

 

?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    বেতন ও অন্যান্য ফি
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
                            <div class="box-header">
                        <?php  
                            if($_SESSION['type'] == 'administrator'){
                        ?>
                                <a href="view/admin/calculation/student/allstudentfee.php"><h3 class="box-title pull-right btn btn-primary">বেতন ও অন্যান্য ফি আদায় </h3></a>
                         <?php } ?>

                            </div>

                <?php
            if(isset($_SESSION['fee'])){
                echo "<div class='alert alert-success'>".$_SESSION['fee']."</div>";
                //session_unset();
                //session_reset();
            }


            ?>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <!-- <th>Student Name</th> -->
                                        <th style="text-align:center;">Class Name </th>
                                        <th style="text-align:center;">Student ID</th>
                                        <th style="text-align:center;">Day/Month/Year</th>
                                        <th style="text-align:center;">Action</th>
                                    </tr>
                                    </thead>
                                   <tbody>
                                <?php
                                $sl = 1;
                                foreach ($results as $result) {
                                    ?>
                                       <tr>
                                           <td><?php echo $sl++?></td>
                                            
                                            <td style="text-align:center;"><?php echo $result['class']?></td>
                                            <td style="text-align:center;"><?php echo $result['student_id']?></td>
                                            <td style="text-align:center;"><?php echo $result['submit_date']?></td>
                                             
                                            <td style="text-align:center;">
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                   <!--  <a class="btn btn-primary" href="javascript(void)">View</a> -->
                <?php  
                    if($_SESSION['type'] == 'user'){
                  ?>
                    <a class="btn btn-danger">Not Allowed</a>
                <?php } ?>
              
                <?php  
                    if($_SESSION['type'] == 'administrator'){
                ?>

        
                    <a  class="btn btn-primary" href="view/admin/calculation/student/showfee.php?show=<?php echo $result['student_id']?>">Show</a>

                    <a  class="btn btn-info" href="view/admin/calculation/student/editfee.php?edit=<?php echo $result['unique_id']?>">Edit</a>
             
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/calculation/student/deletefee.php?del=<?php echo $result['unique_id']?>">Delete</a>
                    
                <?php } ?>

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