
<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */
 include_once '../includes/header.php' ;
 include_once '../../../vendor/autoload.php' ;


use App\Admin\Commitee\Commitee;
$commitee = new Commitee();

$stmt = 'SELECT * FROM teacher_data where status = "1" ORDER by id ASC ';
$results = $commitee->allMemberSelect();





?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    All Commitee Member
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
                               
                                 <div class="box-header">
                                	 সকল তথ্য দেখতে ডানে   view বাটনে ক্লিক করুন<a href="view/admin/commitee/addcommitee.php"><h3 class="box-title pull-right btn btn-primary">New Member Add </h3></a>
                            	</div>
                            </div>

                <?php
            if(isset($_SESSION['commitee'])){	
                echo "<div class='alert alert-info'>".$_SESSION['commitee']."</div>";
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
                                        <th>Member_Name</th>
                                        <th>Designation </th>
                                        <th>Qualification</th>
                                        <th>Join_Date</th>
                                        <th>Retired_Date</th>
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
                                            <td><?php echo $result['name']?></td>
                                            <td><?php echo $result['designation']?></td>
                                            <td><?php echo $result['eduquali']?></td>
                                            <td><?php echo $result['join_date']?></td>
                                            <td><?php echo $result['retire_date']?></td>

                                            <td>
                                                <img class="img-rounded" src="view/admin/uploads/commitee/<?php echo $result['image']?>" width="80" alt="no image">
                                            </td>
                                            <td>
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                    <a style="color: black" class="text-info" href="view/admin/commitee/showCommitee.php?show=<?php echo $result['unique_id']?>">View</a>
                    
                 <?php  
                      if($_SESSION['type'] == 'administrator'){
                  ?>
                  
                  <br />  <a  class="text-primary" href="view/admin/commitee/editCommitee.php?edit=<?php echo $result['unique_id']?>">Edit</a>
                     <br />
                    <a onclick="return confirm('Are you sure to Delete'); " class="text-danger" href="view/admin/commitee/deleteCommitee.php?del=<?php echo $result['unique_id']?>">Delete</a>
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