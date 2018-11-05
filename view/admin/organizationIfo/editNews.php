
<?php
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';


?>

<?php 
    
    use App\admin\News\News;
    $news = new News();

    $id = $_GET['edit'];
    $result = $news->editnews($id);

 ?>



<div class="col-md-12">

  <div class="container" style="width: 100%; background: 374850">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->
            <form action="view/admin/organizationIfo/updateNews.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">স্কুলের  নোটিশ সংশোধন করুন   </h3>
                <hr />
                   


 				<div class="row">
 					<div class="col-lg-8 col-md-offset-2">
 						 <?php
            
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                //session_unset();
            }
            if(isset($_SESSION['fileext'])){
                echo "<div class='alert alert-danger'>".$_SESSION['fileext']."</div>";
                //session_unset();
            }


            ?>
 					</div>
                   
                    <div class="col-lg-8 col-md-offset-2">
                        <div class="form-group">
                            <label for="">নোটিশ :<font color="red" size="4">*</font> </label>
                            <input type="text" name="news" class="form-control" value="<?= $result['news']; ?>" id="" required="required">

                            <input type="hidden" name="image" class="form-control" value="<?= $result['image']; ?>" id=""  >

                            <input type="hidden" name="unique_id" class="form-control" value="<?= $result['unique_id']; ?>" id=""  >

                        </div>

                         <div class="form-group">
                            <label for="">বিস্তারিত  : </label>
                            <textarea class="form-control" name="details" rows="5" id=""><?= $result['details']; ?></textarea>
                        </div>
 
                        <div class="form-group">
                            <label for="">ছবি আপলোড : </label>
                            <input type='file' name="image"   onchange="readURL(this);"   />
                            <img width="120" id="blah" src="view/admin/uploads/news/<?= $result['image']; ?>" alt=" " />
                        </div>


             

                        <br />

                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="সংশোধন  করুন " id="">
                        </div>
                        
                      </div>
                    </div>
                </form>
            </div>
        </div>
	</div>
</div>





<?php  include '../includes/footer.php' ?>