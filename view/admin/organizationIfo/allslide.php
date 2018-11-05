
<?php
                 
 // if(isset($_SESSION["username"]))  
 // {  
 //    header('location:view/admin/index.php');
 //      // echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
 //      // echo '<br /><br /><a href="logout.php">Logout</a>';  
 // }  
 // else  
 // {  
 //      header("location:../../../index.php");  
 // }
 ?>

<?php
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';


?>

<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */



use App\admin\News\News;
$news = new News();

$stmt = 'SELECT * FROM slide where status = "1" ORDER by id DESC ';
$results = $news->select($stmt);


//error_reporting(0);
//
//$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
//$stmt = $db->query('SELECT * FROM student_data where status = "1" ORDER by id ASC ');
//$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//use $results



?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                   সকল স্লাইডার
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
                                <a href="view/admin/organizationIfo/slideadd.php"><h3 class="box-title pull-right btn btn-primary">স্লাইডার ছবি যুক্ত করুন </h3></a>
                            </div>

                <?php
            if(isset($_SESSION['notice'])){
                echo "<div class='alert alert-success'>".$_SESSION['notice']."</div>";
               unset($_SESSION['notice']);
            }if(isset($_SESSION['newsUpdate'])){
                echo "<div class='alert alert-info'>".$_SESSION['newsUpdate']."</div>";
                unset($_SESSION['newsUpdate']);
            }
            if(isset($_SESSION['delete'])){
                echo "<div class='alert alert-danger'>".$_SESSION['delete']."</div>";
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['newsDelete'])){
                echo "<div class='alert alert-danger'>".$_SESSION['newsDelete']."</div>";
                unset($_SESSION['newsDelete']);
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
                                        <th>Notice</th>
                                        <th>Details </th> 
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
                                            <td><?php echo $result['news']?></td>
                                            <td><?php echo $result['details']?></td> 

                                            <td>
                                                <img class="img-rounded" src="view/admin/uploads/slide/<?php echo $result['image']?>" width="80" alt="no image">
                                            </td>
                                            <td>
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                    <a style="color: black" class="text-info" href="view/admin/organizationIfo/showNews.php?show=<?php echo $result['unique_id']?>">View</a>

                <?php  
                    if($_SESSION['type'] == 'administrator'){
                ?>

                    <br />
                    <a  class="text-primary" href="javascript:void();">Edit</a>
                     <br />
                    <a onclick="return confirm('Are you sure to Delete'); " class="text-danger" href="view/admin/organizationIfo/deleteslide.php?del=<?php echo $result['unique_id']?>">Delete</a>

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