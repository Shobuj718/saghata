


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

include_once '../includes/header.php'; ?>


<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->

            <form action="view/admin/transferCertificate/findTC.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">ছাড়পত্র তৈরী  করুন   </h3>
                <hr />

            <?php
            
                if(isset($_SESSION['success'])){
                    echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                    echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                    unset($_SESSION['error']);
                }


            ?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">শিক্ষার্থী  আইডি :<font color="red" size="4">*</font> </label>
                            <input type="text" name="student_id" class="form-control" placeholder="Enter Student id.." id="" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                         <div class="form-group">
                            <label for="">ছাত্র/ছাত্রী: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="student" required>
                                <option>সিলেক্ট করুন</option>
                                <option>ছাত্র</option>
                                <option>ছাত্রী</option>                                           
                            </select>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">শ্রেণী: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="class" required>
                                <option>সিলেক্ট করুন</option>
                                <option>১ম</option>
                                <option>২য়</option>
                                <option>৩য়</option>
                                <option>৪র্থ</option>
                                <option>৫ম</option>
                                <option>৬ষ্ঠ</option>
                                <option>৭ম</option>
                                <option>৮ম</option>
                                <option>নবম</option>
                                <option>১০ম</option>
                                <option>একাদশ</option>
                                <option>দ্বাদশ</option>                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">উত্তীর্ণ  শ্রেণী : <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="up_class" required>
                                <option>সিলেক্ট করুন</option>
                                <option>১ম</option>
                                <option>২য়</option>
                                <option>৩য়</option>
                                <option>৪র্থ</option>
                                <option>৫ম</option>
                                <option>৬ষ্ঠ</option>
                                <option>৭ম</option>
                                <option>৮ম</option>
                                <option>নবম</option>
                                <option>১০ম</option>
                                <option>একাদশ</option>
                                <option>দ্বাদশ</option>                                
                            </select>
                           
                        </div>
                        
                    </div>
                    
                </div>
                
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">লেটার গ্রেড: <font color="red" size="4">*</font> </label>
                            <input type="text" name="gpa" class="form-control" placeholder="Enter Grade Number..." id="" required>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">বিদ্যালয়  পরিত্যাগের তারিখ  : <font color="red" size="4">*</font> </label>
                            <input type="text" name="leaving_date" class="form-control" placeholder="Enter Leaving date..."  id="" required>
                           
                        </div>
                        
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="">  বেতন ও অন্যান্য ফি পরিশোধের  তারিখ: <font color="red" size="4">*</font> </label>
                            <input type="text" name="cl_date" class="form-control" placeholder="Enter Clearance date..."  id="" required>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                            <label for="">জন্ম তারিখ  : <font color="red" size="4">*</font> </label>
                            <input type="text" name="birth_date" class="form-control" placeholder="Enter Birth Date..."  id="" required>
                           
                        </div>
                    </div>
                </div>

                                
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit" id="">
                </div>

            </form>
        </div>
    </div>
  </div>
</div>




<?php  include '../includes/footer.php' ?>

