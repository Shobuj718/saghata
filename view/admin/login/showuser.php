

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

$stmt = 'SELECT * FROM tbl_users where userStatus="N" AND status="1" ';
$results = $student->select($stmt);


?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    All User Registration Information 
                    <!-- <small>advanced tables</small> -->
                </h1>
                
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                
                                <?php
            if(isset($_SESSION['success'])){
                echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                unset($_SESSION['success']);
            }
            if(isset($_SESSION['delete'])){
                echo "<div class='alert alert-danger'>".$_SESSION['delete']."</div>";
                unset($_SESSION['delete']);
            }
            

            ?>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>User_Name</th>
                            <th>User_Email</th>                            
                            <th>User_Role</th>
                        <?php  
                            if($_SESSION['type'] == 'administrator' AND ($_SESSION['username'] == 'ehsansoft' or $_SESSION['username'] == 'shobuj') ){
                        ?>
                            <th>Action</th>

                        <?php } ?>

                        </tr>
                        </thead>
                       <tbody>
                    <?php
                    $sl = 1;
                    foreach ($results as $result) {
                        ?>
                           <tr>
                               <td><?php echo $sl++?></td>
                               <td><?php echo $result['userName']?></td>
                               <td><?php echo $result['userEmail']?></td>
                               <td><?php echo $result['type']?></td>
                           
                               <td>
                                 
                       
                      <?php  
                            if($_SESSION['type'] == 'administrator' AND ($_SESSION['username'] == 'ehsansoft' or $_SESSION['username'] == 'shobuj') ){
                        ?>

                      <a  class="btn btn-primary" href="view/admin/login/rolechange.php?edit=<?php echo $result['tokenCode']; ?>">Edit</a> 

                      <a onclick="return confirm('Are you sure to Delete'); " class="btn btn-danger" href="view/admin/login/roledelete.php?del=<?php echo $result['tokenCode']; ?>">Delete</a>

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