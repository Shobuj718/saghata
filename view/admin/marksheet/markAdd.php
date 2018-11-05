<?php include_once '../includes/header.php'; ?>


<?php 

    include_once '../../../vendor/autoload.php';

    use App\admin\Subject\Subject;
    $subject = new Subject();
    $result  = $subject->selectAllSub();

    // echo "<pre>";
    // var_dump($result);
    //die();

 ?>


<div class="col-md-12">

  <div class="row">
    <div class="content">
        <form action="view/admin/marksheet/markStore.php" method="post">

        <!-- <div class="form-inline">
            <div class="form-group col-lg-12">
                 -->
                 <br />
                <label style="font-size: 20px;color: green;">শিক্ষার্থীদের নম্বর যোগ (বিষয় ভিত্তিক)</label><br>
                <br />
                <?php
            if(isset($_SESSION['msg'])){
                echo "<div class='alert alert-success'>".$_SESSION['msg']."</div>";
                //session_unset();
            }
            if(isset($_SESSION['error'])){
                echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                //session_unset();
            }
             


            ?>
   
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শিফট:</strong>
                        <select class="form-control" name="shift" required>
                            <option>সিলেক্ট করুন</option>
                            <option>প্রভাতী</option>
                            <option>দিবা</option>
                            <option>সান্ধ্যকালীন</option>
                            <option>রাত্রিকালীন</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শাখা:</strong>
                        <select class="form-control" name="branch" required>
                            <option>সিলেক্ট করুন</option>
                            <option>ক</option>
                            <option>খ</option>
                            <option>গ</option>
                            <option>ঘ</option>
                            <option>ঙ</option>
                            <option>চ</option>
                            <option>ছ</option>
                            <option>জ</option>
                            <option>ঝ</option>
                            <option>ঞ</option>
                            <option>ট</option>
                            <option>ঠ</option>
                        </select>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>বিভাগ:</strong>
                        <select class="form-control" name="department" required>
                            <option>সিলেক্ট করুন</option>
                            <option>জেনারেল</option>
                            <option>বিজ্ঞান</option>
                            <option>মানবিক</option>
                            <option>বানিজ্য  </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>পরীক্ষা :</strong>
                        <select class="form-control" name="term" required>
                            <option>Mid Term</option>
                            <option>Final</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">                        
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর আইডি নম্বর :</label>
                        <input type="text" name="roll" class="form-control" placeholder="Enter roll" id="">
                    </div>

                </div>
            </div>  

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">বিষয় :</label>
                        <select class="form-control" name="subject" required>
                    <?php 
                        
                        if($result){
                            foreach($result as $data){

                            echo "<option>".$data['subject']."</option>";
                            }
                        }

                     ?>            
                       <!--  <option>বাংলা ১ম পত্র</option> -->

                        <!-- <option>বাংলা ২য় পত্র</option>
                        <option>ইংরেজী ১ম পত্র</option>
                        <option>ইংরেজী ২য় পত্র</option>
                        <option>গণিত</option>
                        <option>বাংলাদেশ ও বিশ্ব পরিচয়</option>
                        <option>বিজ্ঞান</option>
                        <option>ধর্ম ও নৈতিক শিক্ষা</option>
                        <option>তথ্য ও যোগাযোগ প্রযুক্তি</option>
                        <option>গার্হস্থ্যবিজ্ঞান 4th</option>
                        <option>শারীরিক শিক্ষা ও স্বাস্থ্য</option>
                        <option>কর্ম ও জীবনমূখী শিক্ষা</option>
                        <option>চারু ও কারুকলা</option> -->
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">বিষয়ের  নম্বর:</label>
                        <input type="text" name="fullmark" placeholder=" Full marks" class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">লিখিত :</label>
                        <input type="text" name="cq" class="form-control" placeholder="Enter CQ.." id="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">এম সি কিউ :</label>
                        <input type="text" name="mcq" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">ব্যাবহারিক :</label>
                        <input type="text" name="practical" class="form-control" placeholder="Practical mark" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="hidden" name="subtotal" class="form-control" placeholder="Sub total mark" id="">
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






<?php  include '../includes/footer.php' ?>
