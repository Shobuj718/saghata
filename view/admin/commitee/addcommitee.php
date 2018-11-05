
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

            <form action="view/admin/commitee/insertCommitee.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">Commitee   তথ্যাবলী যোগ করুন </h3>
                <hr />

                         <?php
            
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                //session_unset();
            }
            // if(isset($_SESSION['fileext'])){
            //     echo "<div class='alert alert-danger'>".$_SESSION['fileext']."</div>";
                //session_unset();
            //}


            ?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Member নাম :<font color="red" size="4">*</font> </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name.." id="" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">লিঙ্গ <font color="red" size="4">*</font></label>
                            <select class="form-control" name="sex" required>
                                <option>সিলেক্ট করুণ</option>
                                <option>ছেলে</option>
                                <option> মেয়ে</option>
                                <option>অন্যান্য</option>
                            </select>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> পদবী: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="designation" required>
                                <option>সিলেক্ট করুণ</option>
                                <option>sovapoti </option>
                                <option>soho sovapoti  </option>
                                <option> secretery  </option>
                                <option>member</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">শিক্ষাগত যোগ্যতা : <font color="red" size="4">*</font> </label>
                            <input type="text" name="eduquali" class="form-control" placeholder="Education Qualification..." id="" required="required">
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">যোগদানের তারিখ : <font color="red" size="4">*</font> </label>
                            <input type="date" name="join_date" class="form-control" placeholder="attend time..."  id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Meyad Uttirner তারিখ : </label>
                            <input type="date" name="retire_date" class="form-control" placeholder="Obb.." id="" >
                        </div>
                    </div>
                </div>

                
                <h3 class="text-center" style="color: #2559ee">ব্যক্তিগত তথ্যাবলী</h3>
                <hr />

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">জন্ম তারিখ: <font color="red" size="4">*</font></label>
                            <input type="date" name="birth_date" class="form-control" required id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">রক্তের গ্রুপ:</label>
                            <select class="form-control" name="blood" >
                                <option>সিলেক্ট করুণ</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>o+</option>
                                <option>o-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">ধর্ম: <font color="red" size="4">*</font></label>
                            <select class="form-control" name="religion" required>
                                <option>সিলেক্ট করুণ</option>
                                <option>ইসলাম</option>
                                <option>হিন্দু</option>
                                <option>খ্রিষ্ঠান</option>
                                <option>বৌদ্ধ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">ইমেইল:</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter email.." id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">মোবাইল নম্বর  : <font color="red" size="4">*</font></label>
                            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number..." required id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">জাতীয় পরিচয় পত্র : <font color="red" size="4">*</font></label>
                            <input type="text" name="nid" class="form-control" placeholder="Enter NID Number..." required id="">
                        </div>
                    </div>
                </div>

                

                

                <h3 class="text-center" style="color: #2559ee">  বর্তমান ঠিকানা  </h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ির নাম:</label>
                            <input type="text" name="homeName" class="form-control" placeholder="Home name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ি / হোল্ডিং নাম্বার:</label>
                            <input type="text" name="holdingNum" class="form-control" placeholder="Holding number..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">রোড নাম্বার:</label>
                            <input type="text" name="roadName" class="form-control" placeholder="Road number..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">গ্রাম / পাড়া / মহল্লার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="village" class="form-control" placeholder="Village name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ডাকঘর : <font color="red" size="4">*</font></label>
                            <input type="text" name="postoffice" class="form-control" placeholder="Postoffice name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ইউনিয়ন / পৌরসভার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="unione" class="form-control" placeholder="Unione name..." id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">উপজেলা / থানার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="thana" class="form-control" placeholder="Thana name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">জেলার নাম : <font color="red" size="4">*</font> </label>
                            <input type="text" name="district" class="form-control" placeholder="District name..." id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পোষ্ট কোড নাম্বার:</label>
                            <input type="text" name="postcode" class="form-control" placeholder="Post Code..." id="">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="">ছবি আপলোড : <font color="red" size="4">*</font></label>
                    <input type='file' name="image"   onchange="readURL(this);" required="required" />
                            <img id="blah" src="#" alt=" " />
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

