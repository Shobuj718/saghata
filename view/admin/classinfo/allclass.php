<?php 

    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';

    use App\admin\Classmain\Classmain;
    $class = new Classmain();

    $results = $class->selectAllClass();

    // echo "<pre>";
    // var_dump($results);
    // die();


?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    সকল ক্লাস 
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
                                <a href="view/admin/classinfo/addclass.php"><h3 class="box-title pull-right btn btn-primary">নতুন ক্লাস যুক্ত করুন </h3></a>
                            </div>
                    <?php } ?>

                <?php
            if(isset($_SESSION['classadd'])){
                echo "<div class='alert alert-success'>".$_SESSION['classadd']."</div>";
                //session_unset();
                //session_reset();
            }
            if(isset($_SESSION['deleteClass'])){
                echo "<div class='alert alert-danger'>".$_SESSION['deleteClass']."</div>";
                session_unset();
            }
            if(isset($_SESSION['updateClass'])){
                echo "<div class='alert alert-info'>".$_SESSION['updateClass']."</div>";
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
                                        <th>Class_Name</th>
                                        <th>Numeric_Name </th>
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
                                            <td><?php echo $result['nuname']?></td>
                                              
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
                    <a  class="btn btn-info" href="view/admin/classinfo/editclass.php?edit=<?php echo $result['unique_id']?>">Edit</a>
             
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/classinfo/deleteclass.php?del=<?php echo $result['unique_id']?>">Delete</a>
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