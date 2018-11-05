
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

$stmt = 'SELECT * FROM student_data where status = "1" ORDER by class_roll ASC ';
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
                            <th>Shift</th>
                            <th> Branch</th>
                            <th>Department</th>
                            <th>ID</th>
                            <th>Roll</th>
                            <th>Attend</th>
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
                               <td>present</td>
                               
                               
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