<?php include_once '../../includes/header.php'; ?>



<div class="col-md-12">

  <div class="row">
    <div class="content">
        <form action="view/admin/ninetenmarksheet/commerce/deleteStuMarkAction.php" method="post">

        <!-- <div class="form-inline">
            <div class="form-group col-lg-12">
                 -->
                 <br />
                <h3 style="font-size: 20px; text-align: center; color: green;">শিক্ষার্থীদের মার্কশীট   ডিলিট  ( বানিজ্য - নবম থেকে দশম )</h3>
                <br />
                <?php
            if(isset($_SESSION['ninetenmarkdelete'])){
                echo "<div class='alert alert-success'>".$_SESSION['ninetenmarkdelete']."</div>";
                //session_unset();
            }
            if(isset($_SESSION['deleteErr'])){
                //echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                //session_unset();
                echo "<div style='font-size:18px'; class='alert alert-danger'>".$_SESSION['deleteErr']."</div>";
                //session_destroy();
            }
             


            ?>
   
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>শ্রেণী:</strong>
                        <select class="form-control" name="class" required>
                            <option>সিলেক্ট করুন</option>
                            
                            <option>নবম</option>
                            <option>১০ম</option>
                            
                        </select>
                    </div>
                </div>
                  
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>পরীক্ষা :</strong>
                        <select class="form-control" name="term" required>
                            <option>মধ্যবর্তি   </option>
                            <option>বার্ষিক </option>
                        </select>
                    </div>
                </div>
            </div>
                
            <div class="row">
              

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Year:</strong>
                        <select class="form-control" name="year" required>
                            <option>সিলেক্ট করুন</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020  </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">                        
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর আইডি নম্বর :</label>
                        <input type="text" name="student_id" pattern="^[0-9]+" class="form-control" placeholder="Enter id..." id="" required="">
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


<?php include_once '../../includes/footer.php'; ?>
