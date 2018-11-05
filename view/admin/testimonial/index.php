
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

            <form action="view/admin/testimonial/store.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">প্রশংসা পত্র  </h3>
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
                            <label for="">শিক্ষার্থীর নাম  :<font color="red" size="4">*</font> </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Student name.." id="" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">লিঙ্গ :<font color="red" size="4">*</font> </label>
                            <select class="form-control" name="sex" required>
                                <option>সিলেক্ট করুন </option>
                                <option>ছাত্র</option>
                                <option> ছাত্রী</option>
                                <option>অন্যান্য</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">পিতার নাম:<font color="red" size="4">*</font> </label>
                            <input type="text" name="father" class="form-control" placeholder="Enter Father name.." id="" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">মাতার নাম   :<font color="red" size="4">*</font> </label>
                            <input type="text" name="mother" class="form-control" placeholder="Enter Student name.." id="" required="required">
                        </div>
                    </div>
                   
                    
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">গ্রামের নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="village" class="form-control" placeholder="Enter Village name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ডাকঘর : <font color="red" size="4">*</font></label>
                            <input type="text" name="post" class="form-control" placeholder="Enter Postoffice name..." id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">উপজেলা / থানার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="thana" class="form-control" placeholder="Enter Thana name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">জেলার নাম : <font color="red" size="4">*</font> </label>
                            <input type="text" name="district" class="form-control" placeholder="Enter District name..." id="" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">পাশের সাল : <font color="red" size="4">*</font></label>
                            <input type="text" name="year" class="form-control" placeholder="Enter Pass Year..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">লেটার গ্রেড: <font color="red" size="4">*</font> </label>
                            <input type="text" name="gpa" class="form-control" placeholder="Enter Grade Number..." id="" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">বিভাগ : <font color="red" size="4">*</font></label>
                            <input type="text" name="department" class="form-control" placeholder="Enter Department name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">পরীক্ষার রোল: <font color="red" size="4">*</font> </label>
                            <input type="text" name="roll" class="form-control" placeholder="Enter Roll Number..." id="" required>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">রেজিস্ট্রেশন  নাম্বার: <font color="red" size="4">*</font> </label>
                            <input type="text" name="reg" class="form-control" placeholder="Enter Reg: Number..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">জন্ম তারিখ   : <font color="red" size="4">*</font> </label>
                            <input type="text" name="birth_date" class="form-control" placeholder="Enter Birth Date..."  id="" required>
                        </div>
                    </div>
                    
                </div>


                <br />

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit" id="">
                </div>

            </form>
        </div>
    </div>
  </div>
</div>




<?php  include '../includes/footer.php' ?>

