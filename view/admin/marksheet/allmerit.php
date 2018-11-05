<?php include_once '../includes/header.php'; ?>



<div class="col-md-12">

  <div class="row">
    <div class="content">

        <form action="view/admin/marksheet/allmarksheet.php" method="post">

        <!-- <form action="view/admin/marksheet/findmeritposition3.php" method="post"> -->

        <!-- <div class="form-inline">
            <div class="form-group col-lg-12">
                 -->
                 <br />
                <h3 style="font-size: 20px; text-align: center; color: green;">শিক্ষার্থীদের মার্কশীট  (শ্রেণী ভিত্তিক )</h3>
                <h3 style="text-align:center;color:green;">শিক্ষার্থীদের মার্কশীট (৬ষ্ঠ শ্রেণী )</h3>

                <br />
                <?php
            if(isset($_SESSION['success'])){
                //echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                //session_unset();
            }
            if(isset($_SESSION['delete'])){
                //echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                //session_unset();
                echo "<div style='font-size:20px'; class='alert alert-danger'>".$_SESSION['delete']."</div>";
                unset($_SESSION['delete']);
            }
             


            ?>
   
           
                
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শ্রেণী:</strong>
                        <select class="form-control" name="class" required>
                            <option>সিলেক্ট করুন</option>
                           
                            <option>৬ষ্ঠ</option>
                            <option>৭ম</option>
                            <option>৮ম</option>

                        </select>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>পরীক্ষা :</strong>
                        <select class="form-control" name="term" required>
                            <option>মধ্যবর্তি   </option>
                            <option>বার্ষিক </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শিক্ষাবর্ষ:</strong>
                        <select class="form-control" name="year" required>
                            <option>সিলেক্ট করুন</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020  </option>
                        </select>
                    </div>
                </div>
                
            </div> 

             <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div> 

            </form>
        </div>  
    </div>  
</div>  


<?php include_once '../includes/footer.php'; ?>
