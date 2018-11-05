<?php
    include_once '../../includes/header.php';
    include_once '../../../../vendor/autoload.php';

 
 
    use App\admin\Subject\Subject;
    $subject = new Subject();
    $results  = $subject->selecttmpDelete();

    // echo "<pre>";
    // var_dump($result);
    //die();

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
                    সকল বিষয় 
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
             
            if(isset($_SESSION['restoresubject'])){
                echo "<div class='alert alert-success'>".$_SESSION['restoresubject']."</div>";
                //session_unset();
            }
            if(isset($_SESSION['deletesubject'])){
                echo "<div class='alert alert-danger'>".$_SESSION['deletesubject']."</div>";
                session_unset();
                //session_reset();
            }


            ?>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Subject_Name</th>
                                        <th>Department </th>
                                        <th>Subject_Code</th>
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
                                            <td><?php echo $result['subject']?></td>
                                            <td><?php echo $result['department']?></td>
                                            <td><?php echo $result['subcode']?></td>
                                             
                                            <td>
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                   <!--  <a class="btn btn-primary" href="javascript(void)">View</a> -->
        
                    <a  class="btn btn-info" href="view/admin/restore/subject/restoresubject.php?restore=<?php echo $result['unique_id']?>">Restore</a>
             
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/restore/subject/deletesubject.php?del=<?php echo $result['unique_id']?>">Parmanently Delete</a>
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