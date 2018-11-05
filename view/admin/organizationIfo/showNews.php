

<?php
                 
 // if(isset($_SESSION["username"]))  
 // {  
 //    header('location:view/admin/index.php');
 //      // echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
 //      // echo '<br /><br /><a href="logout.php">Logout</a>';  
 // }  
 // else  
 // {  
 //      header("location:index.php");  
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

$id = $_GET['show'];

$result = $news->newsSelect($id);


//error_reporting(0);




?>

        <br />
         <h2 style="text-align: center;padding-right:50px;color:green;" ><strong>নোটিশ :</strong></h2>

        <h3 style="text-align: center; padding-right:50px;"> <strong style="color:red;">শিরোনাম  : </strong><?php echo $result['news']?></h3>
        <div style="text-align: center; padding-right:50px" class="form-group">
            <img src="view/admin/uploads/news/<?php echo $result['image']?>" class="img-rounded" width="100" alt="no image">

        </div>

        
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <p> <strong style="color:black">বিস্তারিত :</strong> <?= $result['details']; ?></p>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br /> 
                     
                </div>

        </div>
         

<?php  include '../includes/footer.php' ?>