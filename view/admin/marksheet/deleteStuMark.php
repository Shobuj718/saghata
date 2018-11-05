<?php include_once '../includes/header.php'; ?>



<div class="col-md-12">

  <div class="row">
    <div class="content">
        <form action="view/admin/marksheet/deleteStuMarkAction.php" method="post">

        <!-- <div class="form-inline">
            <div class="form-group col-lg-12">
                 -->
                 <br />
                <h3 style="font-size: 20px; text-align: center; color: green;">Delete Students Marksheet or All Mark</h3>
                <br />
                <?php
            if(isset($_SESSION['deleteMarsheet'])){
                echo "<div class='alert alert-success'>".$_SESSION['deleteMarsheet']."</div>";
                unset($_SESSION['deleteMarsheet']);


            }
            if(isset($_SESSION['delmark'])){
                echo "<div style='font-size:18px'; class='alert alert-danger'>".$_SESSION['delmark']."</div>";
                unset($_SESSION['delmark']);
            }
             


            ?>
   
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>শ্রেণী:</strong>
                        <select class="form-control" name="class" required>
                            <option>সিলেক্ট করুন</option>
                            <option>প্লে</option>
                            <option> নার্সারি </option>
                            <option>কে জি</option>
                            <option>১ম</option>
                            <option>২য়</option>
                            <option>৩য়</option>
                            <option> ৪র্থ</option>
                            <option>৫ম</option>
                            <option>৬ষ্ঠ</option>
                            <option>৭ম</option>
                            <option>৮ম</option>
                            <option>নবম</option>
                            <option>১০ম</option>
                            <option>একাদশ</option>
                            <option>দ্বাদশ</option>
                            <option>ডিগ্রী ১ম বর্ষ</option>
                            <option>ডিগ্রী ২য় বর্ষ</option>
                            <option>ডিগ্রী ৩য় বর্ষ</option>
                            <option>ডিগ্রী প্রিভিয়াস মাস্টার্স</option>
                            <option>ডিগ্রী  মাস্টার্স</option>
                            <option>অনার্স ১ম বর্ষ</option>
                            <option>অনার্স ২য় বর্ষ</option>
                            <option>অনার্স ৩য় বর্ষ</option>
                            <option>অনার্স  ৪র্থ বর্ষ</option>
                            <option>মাস্টার্স</option>
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


<?php include_once '../includes/footer.php'; ?>
