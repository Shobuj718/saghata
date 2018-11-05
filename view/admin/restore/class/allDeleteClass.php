<?php 

    include_once '../../includes/header.php';
    include_once '../../../../vendor/autoload.php';

    use App\admin\Classmain\Classmain;
    $class = new Classmain();

    $results = $class->selecttmpDelete();

    // echo "<pre>";
    // var_dump($results);
    // die();


?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                   All Delete Class to Restore...
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
                            <!-- <div class="box-header">
                                <a href="view/admin/classinfo/addclass.php"><h3 class="box-title pull-right btn btn-primary">নতুন ক্লাস যুক্ত করুন </h3></a>
                            </div> -->

                <?php
            if(isset($_SESSION['restoreClass'])){
                echo "<div class='alert alert-success'>".$_SESSION['restoreClass']."</div>";
                //session_unset();
                //session_reset();
            }
            if(isset($_SESSION['classDeleted'])){
                echo "<div class='alert alert-danger'>".$_SESSION['classDeleted']."</div>";
                session_unset();
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
        
                    <a  class="btn btn-info" href="view/admin/restore/class/restore.php?restore=<?php echo $result['unique_id']?>">Restore</a>
             
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/restore/class/deleteclass.php?del=<?php echo $result['unique_id']?>">Permanently Delete</a>
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