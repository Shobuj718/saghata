<?php 

    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';

    use App\admin\Department\Department;
    $department = new Department();

    $results = $department->selectAllDept();

    // echo "<pre>";
    // var_dump($results);
    // die();


?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    সকল  ডিপার্টমেন্ট
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
                      if($_SESSION['type'] == 'administrator'){
                  ?>
                            <div class="box-header">
                                <a href="view/admin/department/adddepartment.php"><h3 class="box-title pull-right btn btn-primary">নতুন ডিপার্টমেন্ট যুক্ত করুন </h3></a>
                            </div>
                    <?php } ?>

                <?php
            if(isset($_SESSION['deptinsert'])){
                echo "<div class='alert alert-success'>".$_SESSION['deptinsert']."</div>";
                //session_unset();
                //session_reset();
            }
            if(isset($_SESSION['deleteDept'])){
                echo "<div class='alert alert-danger'>".$_SESSION['deleteDept']."</div>";
                //session_unset();
            }
             
            ?>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Class Name</th>
                                        <th>Department Name</th>
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
                                            <td><?php echo $result['class']?></td>
                                            <td><?php echo $result['deptName']?></td>
                                              
                                            <td>
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
                    <a  class="btn btn-info" href="view/admin/department/editdepartment.php?edit=<?php echo $result['unique_id']?>">Edit</a>
             
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/department/deletedepartment.php?del=<?php echo $result['unique_id']?>">Delete</a>
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




<?php  include '../includes/footer.php' ?>