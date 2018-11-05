<?php 

    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';

    use App\admin\Library\Library;
    $library = new Library();

    /*echo "<pre>";
    var_dump($_POST);
    die();*/

    $status = $_POST['status'];
    $results = $library->borrowBookList($_POST);



?>
            <section class="content-header">
                <h1>
                    সকল বই সমূহ 
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
                                
                                <a href="view/admin/library/issuebooksearch.php"><h3 class="box-title pull-right btn btn-primary">Again Search </h3></a>
                            </div>
                    <?php } ?>

                <?php
            if(isset($_SESSION['success'])){
                echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                unset($_SESSION['success']);
            }
            if(isset($_SESSION['error'])){
                echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                unset($_SESSION['error']);
            }
            
            if(isset($_SESSION['update'])){
                echo "<div class='alert alert-info'>".$_SESSION['update']."</div>";
                unset($_SESSION['update']);
            }
            


            ?>

                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Student_ID</th>
                                        <th>Issue_Date</th>
                                        <th>Return_Date</th>
                                        <th>Quantity</th>
                                        <th>Fine</th>
                                        <th>Status</th>
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
                                            <td><?php echo $result['student_id']?></td>
                                            <td><?php echo $result['issue_date']?></td>
                                            <td><?php echo $result['return_date']?></td>
                                            <td><?php echo $result['quantity']?></td>
                                            <td><?php echo $result['fine']?></td>
                                            <td><?php echo $result['status']?></td>
                                              
                                            <td>
                    
                <?php  
                      if($_SESSION['type'] == 'user'){
                  ?>
                   <a class="btn btn-danger">Not Allowed</a>
                <?php } ?>

                <?php  
                    if($_SESSION['type'] == 'administrator'){
                ?>
                    <a  class="btn btn-success" href="view/admin/library/editissuebook.php?edit=<?php echo $result['unique_id']?>">Edit</a>
             
                    <a  class="btn btn-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/library/deleteissuebook.php?del=<?php echo $result['unique_id']?>">Delete</a>
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