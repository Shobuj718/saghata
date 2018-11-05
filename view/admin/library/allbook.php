<?php 

    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';

    use App\admin\Library\Library;
    $library = new Library();

    $results = $library->selectAll();



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
                                
                                <a href="view/admin/library/index.php"><h3 class="box-title pull-right btn btn-primary">নতুন বই  যুক্ত করুন </h3></a>
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
                                        <th>Code/ISBN_No</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Class</th>
                                        <th>Type</th>
                                        <th>Quantity</th>
                                        <th>Rack_No</th>
                                        <th>Row_No</th>
                                        <th>Description</th>
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
                                            <td><?php echo $result['code']?></td>
                                            <td><?php echo $result['title']?></td>
                                            <td><?php echo $result['author']?></td>
                                            <td><?php echo $result['class']?></td>
                                            <td><?php echo $result['type']?></td>
                                            <td><?php echo $result['quantity']?></td>
                                            <td><?php echo $result['rack']?></td>
                                            <td><?php echo $result['row']?></td>
                                            <td><?php echo $result['description']?></td>
                                              
                                            <td>
                    
                <?php  
                      if($_SESSION['type'] == 'user'){
                  ?>
                   <a class="btn btn-danger">Not Allowed</a>
                <?php } ?>

                <?php  
                    if($_SESSION['type'] == 'administrator'){
                ?>
                    <a  class="  " href="view/admin/library/editbook.php?edit=<?php echo $result['unique_id']?>">Edit</a>
             
                    <a  class="text-danger" onclick="return confirm('Are you sure to Delete'); "   href="view/admin/library/deletebook.php?del=<?php echo $result['unique_id']?>">Delete</a>
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