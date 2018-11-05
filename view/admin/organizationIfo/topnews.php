
<?php
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';


?>



<div class="col-md-12">

  <div class="container" style="width: 100%; background: 374850">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->
            <form action="view/admin/organizationIfo/noticeInsert.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">স্কুলের  নোটিশ লিখুন  </h3>
                <hr />
                   


 				<div class="row">
 					<div class="col-lg-8 col-md-offset-2">
 						 <?php
            
            if(isset($_SESSION['notice'])){
                echo "<div class='alert alert-success'>".$_SESSION['notice']."</div>";
                unset($_SESSION['notice']);
            }
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                unset($_SESSION['imgSize']);
            }
            if(isset($_SESSION['fileext'])){
                echo "<div class='alert alert-danger'>".$_SESSION['fileext']."</div>";
                unset($_SESSION['fileext']);
            }
            ?>
 					</div>
                   
                    <div class="col-lg-8 col-md-offset-2">
                        <div class="form-group">
                            <label for="">নোটিশ :<font color="red" size="4">*</font> </label>
                            <input type="text" name="notice" class="form-control" placeholder="Enter notice..." id="" required="required">
                        </div>

                         <div class="form-group">
                            <label for="">বিস্তারিত  : </label>
                            <textarea class="form-control" name="details" rows="5" id=""></textarea>
                        </div>
 
                        <div class="form-group">
                            <label for="">ছবি আপলোড : </label>
                            <input type='file' name="image"   onchange="readURL(this);"   />
                            <img id="blah" src="#" alt=" " />
                        </div>


             

                        <br />

                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="যোগ করুন " id="">
                        </div>
                        
                      </div>
                    </div>
                </form>
            </div>
        </div>
	</div>
</div>





<?php  include '../includes/footer.php' ?>