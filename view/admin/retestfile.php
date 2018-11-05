
<?php
include_once '../includes/header.php';

/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */


?>


<?php
                  error_reporting(0);
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



<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
             <!--   <form action="#" method="post" enctype="multipart/form-data">  -->

         <form action="view/admin/teacher/storeTeacher.php" method="post" enctype="multipart/form-data"> 

                <h3 class="text-center" style="color: #2559ee">শিক্ষকের  তথ্যাবলী যোগ করুন </h3>
                <hr />
                <div class="row">
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
                    <div class="col-lg-6">
                    <div class="form-group">
                            <label for="">শিক্ষকের নাম :<font color="red" size="4">*</font> </label>
                            <input type="text" name="teacher_name" class="form-control" placeholder="Enter name.." id="" required="required">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">প্রতিষ্ঠানে পদবী: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="designation" required>
                                <option>সিলেক্ট করুণ</option>
                                <option>প্রধান শিক্ষক  </option>
                                <option>সহকারী প্রধান শিক্ষক  </option>
                                <option> শিক্ষক  </option>
                                <option>সহকারী শিক্ষক</option>
                                <option>পিয়ন</option>
                                <option>অন্যান্য</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">যে কাজের জন্য নিয়োগ পেয়েছেন : <font color="red" size="4">*</font> </label>
                            <input type="text" name="what_work" class="form-control" placeholder="what's work.." id="" required="required">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">শিক্ষাগত যোগ্যতা : <font color="red" size="4">*</font> </label>
                            <input type="text" name="eduquali" class="form-control" placeholder="Education Qualification..." id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ট্রেনিং : </label>
                            <input type="text" name="training" class="form-control" placeholder="Training..." id="">
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
                            <label for="">অবসরের তারিখ : </label>
                            <input type="date" name="retire_date" class="form-control" placeholder="Obb.." id="" >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ইনডেক্স নাম্বার : </label>
                            <input type="text" name="index_number" class="form-control" placeholder="Index number..." id="" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">এমপিও  ভূক্তির তারিখ  </label>
                            <input type="date" name="mpo_date" class="form-control" placeholder="mpo date..." id="" >
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">জাতীয় পরিচয় পত্র : <font color="red" size="4">*</font></label>
                            <input type="text" name="nid" class="form-control" placeholder="Enter NID Number..." required id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">সর্বশেষ সার্ভিস প্রতিষ্ঠানের নাম  : </label>
                            <input type="text" name="lastorga" class="form-control" placeholder="Last services oraganization..." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ছেড়ে আসার কারন:</label>
                            <input type="text" name="whyleft" class="form-control" placeholder="why left..." id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">প্রতিষ্ঠানের ঠিকানা (ফোন নাম্বার  সহ):</label>
                            <input type="text" name="orgaarea" class="form-control" placeholder="Organizatin area with phone number" id="">
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

                <h3 class="text-center" style="color: #2559ee">  স্থায়ী ঠিকানা  </h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ির নাম:</label>
                            <input type="text" name="lasting_homeName" class="form-control" placeholder="Home name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ি / হোল্ডিং নাম্বার:</label>
                            <input type="text" name="lasting_holdingNum" class="form-control" placeholder="Holding number..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">রোড নাম্বার:</label>
                            <input type="text" name="lasting_roadName" class="form-control" placeholder="Road number..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">গ্রাম / পাড়া / মহল্লার নাম:</label>
                            <input type="text" name="lasting_village" class="form-control" placeholder="Village name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ডাকঘর:</label>
                            <input type="text" name="lasting_postoffice" class="form-control" placeholder="Postoffice name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ইউনিয়ন / পৌরসভার নাম:</label>
                            <input type="text" name="lasting_unione" class="form-control" placeholder="Unione name..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">উপজেলা / থানার নাম:</label>
                            <input type="text" name="lasting_thana" class="form-control" placeholder="Thana name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">জেলার নাম:</label>
                            <input type="text" name="lasting_district" class="form-control" placeholder="District name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পোষ্ট কোড নাম্বার:</label>
                            <input type="text" name="lasting_postcode" class="form-control" placeholder="Post Code..." id="">
                        </div>
                    </div>
                </div>

                <h3 class="text-center" style="color: #2559ee">  পারিবারিক তথ্যাবলী   </h3>
                <hr />

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">পিতার নাম:<font color="red" size="4">*</font></label>
                            <input type="text" name="father_name" class="form-control" placeholder="Enter Father name.." id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পেশা:<font color="red" size="4">*</font></label>
                            <input type="text" name="fa_occupation" class="form-control" placeholder="Enter Occupation.." id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">মাসিক আয়:</label>
                            <input type="text" name="fa_monthly_income" class="form-control" placeholder="Monthly income.." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">শিক্ষাগত যোগ্যতা:</label>
                            <input type="text" name="fa_edu_quli" class="form-control" placeholder="Education Qualification.." id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ফোন নাম্বার:</label>
                            <input type="text" name="fa_phone" class="form-control" placeholder="Enter phone number.." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ইমেইল:</label>
                            <input type="text" name="fa_email" class="form-control" placeholder="Enter email.." id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="">জাতীয় পরিচয় পত্র</label>
                        <input type="text" name="fa_nid" class="form-control" placeholder="Enter father NID..." id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">মাতার নাম:<font color="red" size="4">*</font></label>
                            <input type="text" name="mother_name" class="form-control" placeholder="Enter Father name.." id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পেশা:<font color="red" size="4">*</font></label>
                            <input type="text" name="ma_occupation" class="form-control" placeholder="Enter Occupation.." id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">মাসিক আয়:</label>
                            <input type="text" name="ma_monthly_income" class="form-control" placeholder="Monthly income.." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">শিক্ষাগত যোগ্যতা:</label>
                            <input type="text" name="ma_edu_quli" class="form-control" placeholder="Education Qualification.." id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ফোন নাম্বার:</label>
                            <input type="text" name="ma_phone" class="form-control" placeholder="Enter phone number.." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ইমেইল:</label>
                            <input type="text" name="ma_email" class="form-control" placeholder="Enter email.." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">জাতীয় পরিচয় পত্র নাম্বার : </label>
                        <input type="text" name="ma_nid" class="form-control" placeholder="Enter father NID..." id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">বিবাহিতদের ক্ষেত্রে স্বামী/স্ত্রী'র নাম :</label>
                            <input type="text" name="marriage_person" class="form-control" placeholder="Husband or Wife name..." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">পেশা : </label>
                            <input type="text" name="marriage_occu" class="form-control" placeholder="Occupatin..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">বিবাহের তারিখ : </label>
                            <input type="date" name="marriage_date" class="form-control" placeholder="Merit date..." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">শিক্ষাগত যোগ্যতা : </label>
                            <input type="text" name="marriage_edu_quali" class="form-control" placeholder="Education qualification..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">মোবাইল নাম্বার  : </label>
                            <input type="text" name="marriage_mobile" class="form-control" placeholder="Mobile number..." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ইমেইল : </label>
                            <input type="text" name="marriage_email" class="form-control" placeholder="Enter email..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="">ছেলে ও মেয়ে কতজন এবং কে কি করে লিখুন  : </label>
                        <textarea class="form-control" name="children" rows="5" id=""></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">ছবি আপলোড : <font color="red" size="4">*</font></label>
                    <input type="file" name="image" class="form-control" required id="">
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

//end addteacherinfo file


//start store teacher  file


<?php
//echo "<pre>";
//var_dump($_POST);
//var_dump($_FILES);
//echo "<pre>";
//die();
//if(!isset($_SESSION)){
//    session_start();
//}
//error_reporting(0);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$name = $_POST['text'];

//    $sex = $_POST['sex'];
//    $student_name = $_POST['student_name'];
//    $class = $_POST['class'];
    //$class = $_POST['class'];

    $sex                =  $_POST['sex'];
    $teacher_name       =  $_POST['teacher_name'];
    $designation        =  $_POST['designation'];
    $what_work          =  $_POST['what_work'];
    $eduquali           =  $_POST['eduquali'];
    $training           =  $_POST['training'];
    $join_date          =  $_POST['join_date'];
    $retire_date       =  $_POST['retire_date'];
    $index_number       =  $_POST['index_number'];
    $mpo_date           =  $_POST['mpo_date'];
    $birth_date         =  $_POST['birth_date'];
    $blood              =  $_POST['blood'];
    $religion           =  $_POST['religion'];
    $email              =  $_POST['email'];
    $nid                =  $_POST['nid'];
    $lastorga           =  $_POST['lastorga'];
    $whyleft            =  $_POST['whyleft'];
    $orgaarea           =  $_POST['orgaarea'];
    $homeName           =  $_POST['homeName'];
    $holdingNum         =  $_POST['holdingNum'];
    $roadName           =  $_POST['roadName'];
    $village            =  $_POST['village'];
    $postoffice         =  $_POST['postoffice'];
    $unione             =  $_POST['unione'];
    $thana              =  $_POST['thana'];
    $district           =  $_POST['district'];
    $postcode           =  $_POST['postcode'];
    $lasting_homeName   = $_POST['lasting_homeName'];
    $lasting_holdingNum =  $_POST['lasting_holdingNum'];
    $lasting_roadName   =  $_POST['lasting_roadName'];
    $lasting_village    =  $_POST['lasting_village'];
    $lasting_postoffice =  $_POST['lasting_postoffice'];
    $lasting_unione     =  $_POST['lasting_unione'];
    $lasting_thana      =  $_POST['lasting_thana'];
    $lasting_district   =  $_POST['lasting_district'];
    $lasting_postcode   =  $_POST['lasting_postcode'];
    $father_name        =  $_POST['father_name'];
    $fa_occupation      =  $_POST['fa_occupation'];
    $fa_monthly_income  =  $_POST['fa_monthly_income'];
    $fa_edu_quli        =  $_POST['fa_edu_quli'];
    $fa_phone           =  $_POST['fa_phone'];
    $fa_email           =  $_POST['fa_email'];
    $fa_nid             =  $_POST['fa_nid'];
    $mother_name        =  $_POST['mother_name'];
    $ma_occupation      =  $_POST['ma_occupation'];
    $ma_monthly_income  =  $_POST['ma_monthly_income'];
    $ma_edu_quli        =  $_POST['ma_edu_quli'];
    $ma_phone           =  $_POST['ma_phone'];
    $ma_email           =  $_POST['ma_email'];
    $ma_nid             =  $_POST['ma_nid'];
    $marriage_person    =  $_POST['marriage_person'];
    $marriage_occu      =  $_POST['marriage_occu'];
    $marriage_date      =  $_POST['marriage_date'];
    $marriage_edu_quali =  $_POST['marriage_edu_quali'];
    $marriage_mobile    =  $_POST['marriage_mobile'];
    $marriage_email     =  $_POST['marriage_email'];
    $children           =  $_POST['children'];
    //$local_national_id   =  $_POST['local_national_id'];
    //$student_image       =  $_POST['student_image'];
    //$father_image        =  $_POST['father_image'];
    //$mother_image        =  $_POST['mother_image'];

}

$db = new PDO('mysql:host=localhost;dbname=faporehi_db;charset=utf8', 'faporehi_user', 'fvA+Lr~g5+Zw');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);






$uploadSecondTo = null;
if (isset($_FILES['image'])) {
    $image = $_FILES['image']['name'];
    $second_image_size = $_FILES['image']['size'];
    $second_image_tmp = $_FILES['image']['tmp_name'];

    $name =  substr(md5(time()),'0','10');
    $data = explode('.',$image);
    $image = $name.'.'.end($data);

    $permited = array('jpg', 'jpeg', 'png', 'gif');
    $file_size = $_FILES['image']['size'];
    $div2 = explode('.', $image);
    $file_ext = strtolower(end($div2));


    $uploadSecondTo = "../uploads/teacher/" . $image;
    $moveSecond = move_uploaded_file($second_image_tmp, $uploadSecondTo);
}



if($file_size > 1048576){
    echo "<span class='error' style='color: red;'>Image size should be less then 1MB !</span>";
    //$_SESSION['imgSize'] = $imgSize;
    //die();
}
elseif (in_array($file_ext, $permited) == false) {
    echo "<span class='error' style='color: red;'>You can upload only:-".implode(', ', $permited)."</span>";
}
else{


    $stmt = $db->prepare("insert into teacher_data(sex, teacher_name, designation, what_work, eduquali, training, join_date, retire_date,index_number, mpo_date, birth_date, blood, religion, email, nid, lastorga, whyleft, orgaarea, homeName, holdingNum, roadName, village, postoffice, unione, thana, district, postcode, lasting_homeName, lasting_holdingNum, lasting_roadName, lasting_village, lasting_postoffice, lasting_unione, lasting_thana, lasting_district, lasting_postcode, father_name, fa_occupation, fa_monthly_income, fa_edu_quli, fa_phone, fa_email, fa_nid, mother_name, ma_occupation, ma_monthly_income, ma_edu_quli, ma_phone, ma_email, ma_nid, marriage_person, marriage_occu, marriage_date, marriage_edu_quali, marriage_mobile, marriage_email,children,  image )

VALUES(:sex, :teacher_name, :designation, :what_work, :eduquali, :training, :join_date, :retire_date, :index_number, :mpo_date, :birth_date, :blood, :religion, :email, :nid, :lastorga, :whyleft, :orgaarea, :homeName, :holdingNum, :roadName, :village, :postoffice, :unione, :thana, :district, :postcode, :lasting_homeName, :lasting_holdingNum, :lasting_roadName, :lasting_village, :lasting_postoffice, :lasting_unione, :lasting_thana, :lasting_district, :lasting_postcode, :father_name, :fa_occupation, :fa_monthly_income, :fa_edu_quli, :fa_phone, :fa_email, :fa_nid, :mother_name, :ma_occupation, :ma_monthly_income, :ma_edu_quli, :ma_phone, :ma_email, :ma_nid, :marriage_person, :marriage_occu, :marriage_date, :marriage_edu_quali, :marriage_mobile, :marriage_email, :children, :image)");




    $result = $stmt->execute(array(
        ':sex' => $sex,
        ':teacher_name' => $teacher_name,
        ':designation'=>$designation,
        ':what_work'=>$what_work,
        ':eduquali'=>$eduquali,
        ':training'=>$training,
        ':join_date'=>$join_date,
        ':retire_date'=>$retire_date,
        ':index_number'=>$index_number,
        ':mpo_date'=>$mpo_date,
        ':birth_date'=>$birth_date,
        ':blood'=>$blood,
        ':religion'=>$religion,
        ':email'=>$email,
        ':nid'=>$nid,
        ':lastorga'=>$lastorga,
        ':whyleft'=>$whyleft,
        ':orgaarea'=>$orgaarea,
        ':homeName'=>$homeName,
        ':holdingNum'=>$holdingNum,
        ':roadName'=>$roadName,
        ':village'=>$village,
        ':postoffice'=>$postoffice,
        ':unione'=>$unione,
        ':thana'=>$thana,
        ':district'=>$district,
        ':postcode'=>$postcode,
        ':lasting_homeName'=>$lasting_homeName,
        ':lasting_holdingNum'=>$lasting_holdingNum,
        ':lasting_roadName'=>$lasting_roadName,
        ':lasting_village'=>$lasting_village,
        ':lasting_postoffice'=>$lasting_postoffice,
        ':lasting_unione'=>$lasting_unione,
        ':lasting_thana'=>$lasting_thana,
        ':lasting_district'=>$lasting_district,
        ':lasting_postcode'=>$lasting_postcode,
        ':father_name'=>$father_name,
        ':fa_occupation'=>$fa_occupation,
        ':fa_monthly_income'=>$fa_monthly_income,
        ':fa_edu_quli'=>$fa_edu_quli,
        ':fa_phone'=>$fa_phone,
        ':fa_email'=>$fa_email,
        ':fa_nid'=>$fa_nid,
        ':mother_name'=>$mother_name,
        ':ma_occupation'=>$ma_occupation,
        ':ma_monthly_income'=>$ma_monthly_income,
        ':ma_edu_quli'=>$ma_edu_quli,
        ':ma_phone'=>$ma_phone,
        ':ma_email'=>$ma_email,
        ':ma_nid'=>$ma_nid,
        ':marriage_person'=>$marriage_person,
        ':marriage_occu'=>$marriage_occu,
        ':marriage_date'=>$marriage_date,
        ':marriage_edu_quali'=>$marriage_edu_quali,
        ':marriage_mobile'=>$marriage_mobile,
        ':marriage_email'=>$marriage_email,
        ':children'=>$children,
        ':image'=>$image

    ));


    if($result){
       // header("location:addTeacherInfo.php");
           echo "<script>window.location= 'addTeacherInfo.php'</script>";

    }
}

//end store teacher file


//start allteacher file


<?php
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';

error_reporting(0);

?>

<?php
                 
//  if(isset($_SESSION["username"]))  
//  {  
//     header('location:view/admin/index.php');
//       // echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
//       // echo '<br /><br /><a href="logout.php">Logout</a>';  
//  }  
//  else  
//  {  
//       header("location:../../../index.php");  
//  }
 ?>



<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */



use App\admin\student\Student;
$student = new Student();

$stmt = 'SELECT * FROM teacher_data where status = "1" ORDER by id ASC ';
$results = $student->select($stmt);


//error_reporting(0);
//
//$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
//$stmt = $db->query('SELECT * FROM student_data where status = "1" ORDER by id ASC ');
//$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//use $results



?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    সকল শিক্ষক
                    <small>advanced tables</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Data tables</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Data Table With Full Features</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Teacher_Name</th>
                                        <th>Designation </th>
                                        <th>Work</th>
                                        <th>Qualification</th>
                                        <th>Training</th>
                                        <th>Join_Date</th>
                                        <th>Index_No</th>
                                        <th>MPO_Date</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                   <tbody>
                                <?php
                                $sl = 1;
                                foreach ($results as $result) {
                                    ?>
                                       <tr>
                                           <td><?php echo $sl++?></td>
                                            <td><?php echo $result['teacher_name']?></td>
                                            <td><?php echo $result['designation']?></td>
                                            <td><?php echo $result['what_work']?></td>
                                            <td><?php echo $result['eduquali']?></td>
                                            <td><?php echo $result['training']?></td>
                                            <td><?php echo $result['join_date']?></td>
                                            <td><?php echo $result['index_number']?></td>
                                            <td><?php echo $result['mpo_date']?></td>

                                            <td>
                                                <img src="view/admin/uploads/teacher/<?php echo $result['image']?>" width="80" alt="no image">
                                            </td>
                                            <td>
                    <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                    <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                    <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                                            <a style="color: black" class="text-info" href="#<?php // showTeacher.php?show= echo $result['id']; ?>">View</a>
                                            <a  class="text-primary" href="#<?php // editTeacher.php?edit= echo $result['id']; ?>">Edit</a>
                                            <a onclick="return confirm('Are you sure to Delete'); " class="text-danger" href="#<?php //deleteTeacher.php?del= echo $result['id']; ?>">Delete</a>
                                        </td>
                                       </tr>

                                <?php } ?>

                                   </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->



<?php  include '../includes/footer.php' ?>

//end all teacher

//start show teacher

<?php include_once '../inc/header.php'; ?>




    <!--       main form start here-->


    <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default2">Submit</button>
<!--        <button type="submit" class="btn btn-default1">Logout</button>-->
    </form>



<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */
error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$id = $_GET['show'];
//                echo $id;
//                var_dump($id);
//                die();
$stm =  $db->prepare("SELECT * FROM `teacher_data` WHERE id = :id");
$stm->bindValue(':id', $id, PDO::PARAM_STR);
$stm->execute();
$result = $stm->fetch(PDO::FETCH_ASSOC);
//use $results

?>
    <div class="col-md-8" style="width: 77.666667%; background: white">




        <h2 style="text-align: center;padding-right:50px" ><strong>শিক্ষকের তথ্যাবলী</strong></h2>

        <h3 style="text-align: center; padding-right:50px">শিক্ষকের  ছবি</h3>
        <div style="text-align: center; padding-right:50px" class="form-group">
            <img src="../uploads/teacher/<?php echo $result['image']?>" class="img-rounded" width="100" alt="no image">

        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-4">
                        <div class="form-group">
                            <h4>শিক্ষকের নাম </h4>
                            <h4>প্রতিষ্ঠানে পদবী </h4>
                            <h4>কাজ</h4>
                            <h4>শিক্ষাগত যোগ্যতা</h4>
                            <h4>ট্রেনিং</h4>
                            <h4>যোগদানের তারিখ</h4>
                            <h4>অবসরের তারিখ</h4>
                            <h4>ইনডেক্স নাম্বার</h4>
                            <h4>এমপিও ভূক্তির তারিখ</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4><?= $result['teacher_name']; ?></h4>
                            <h4><?= $result['designation']; ?></h4>
                            <h4><?= $result['what_work']; ?></h4>
                            <h4><?= $result['eduquali']; ?></h4>
                            <h4><?= $result['training']; ?></h4>
                            <h4><?= $result['join_date']; ?></h4>
                            <h4><?= $result['retire_date']; ?></h4>
                            <h4><?= $result['index_number']; ?></h4>
                            <h4><?= $result['mpo_date']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <h3 style="text-align: center;padding-right:50px" ><strong>ব্যক্তিগত তথ্যাবলী</strong></h3>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-4">
                        <div class="form-group">
                            <h4>জন্ম তারিখ </h4>
                            <h4>রক্তের গ্রুপ </h4>
                            <h4>ধর্ম</h4>
                            <h4>ইমেইল</h4>
                            <h4>জাতীয় পরিচয় পত্র </h4>
                            <h4>সর্বশেষ সার্ভিস প্রতিষ্ঠানের নাম</h4>
                            <h4>ছেড়ে আসার কারন</h4>
                            <h4>প্রতিষ্ঠানের ঠিকানা (ফোন নাম্বার সহ)</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4><?= $result['birth_date']; ?></h4>
                            <h4><?= $result['blood']; ?></h4>
                            <h4><?= $result['religion']; ?></h4>
                            <h4><?= $result['email']; ?></h4>
                            <h4><?= $result['nid']; ?></h4>
                            <h4><?= $result['lastorga']; ?></h4><br>
                            <h4><?= $result['whyleft']; ?></h4>
                            <h4><?= $result['orgaarea']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <h3 style="text-align: center;padding-right:50px" ><strong>বর্তমান ঠিকানা</strong></h3>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-4">
                        <div class="form-group">
                            <h4>বাড়ির নাম </h4>
                            <h4>বাড়ি / হোল্ডিং নাম্বার </h4>
                            <h4>রোড নাম্বার</h4>
                            <h4>গ্রাম / পাড়া / মহল্লার নাম</h4>
                            <h4>ডাকঘর </h4>
                            <h4>ইউনিয়ন / পৌরসভার নাম</h4>
                            <h4>উপজেলা / থানার নাম</h4>
                            <h4>জেলার নাম</h4>
                            <h4>পোষ্ট কোড নাম্বার</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4><?= $result['homeName']; ?></h4>
                            <h4><?= $result['holdingNum']; ?></h4>
                            <h4><?= $result['roadName']; ?></h4>
                            <h4><?= $result['village']; ?></h4>
                            <h4><?= $result['postoffice']; ?></h4>
                            <h4><?= $result['unione']; ?></h4>
                            <h4><?= $result['thana']; ?></h4>
                            <h4><?= $result['district']; ?></h4>
                            <h4><?= $result['postcode']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <h3 style="text-align: center;padding-right:50px" ><strong>স্থায়ী ঠিকানা</strong></h3>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-4">
                        <div class="form-group">
                            <h4>বাড়ির নাম </h4>
                            <h4>বাড়ি / হোল্ডিং নাম্বার </h4>
                            <h4>রোড নাম্বার</h4>
                            <h4>গ্রাম / পাড়া / মহল্লার নাম</h4>
                            <h4>ডাকঘর </h4>
                            <h4>ইউনিয়ন / পৌরসভার নাম</h4>
                            <h4>উপজেলা / থানার নাম</h4>
                            <h4>জেলার নাম</h4>
                            <h4>পোষ্ট কোড নাম্বার</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4><?= $result['lasting_homeName']; ?></h4>
                            <h4><?= $result['holdingNum']; ?></h4>
                            <h4><?= $result['lasting_roadName']; ?></h4>
                            <h4><?= $result['lasting_village']; ?></h4>
                            <h4><?= $result['postoffice']; ?></h4>
                            <h4><?= $result['lasting_unione']; ?></h4>
                            <h4><?= $result['lasting_thana']; ?></h4>
                            <h4><?= $result['lasting_district']; ?></h4>
                            <h4><?= $result['lasting_postcode']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <h3 style="text-align: center;padding-right:50px" ><strong>পারিবারিক তথ্যাবলী</strong></h3>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-4">
                        <div class="form-group">
                            <h4>পিতার নাম </h4>
                            <h4>পেশা</h4>
                            <h4>মাসিক আয়</h4>
                            <h4>শিক্ষাগত যোগ্যতা</h4>
                            <h4>ফোন নাম্বার</h4>
                            <h4>ইমেইল</h4>
                            <h4>জাতীয় পরিচয় পত্র</h4>
                            <h4>মাতার নাম</h4>
                            <h4>পেশা</h4>
                            <h4>মাসিক আয়</h4>
                            <h4>শিক্ষাগত যোগ্যতা</h4>
                            <h4>ফোন নাম্বার</h4>
                            <h4>ইমেইল</h4>
                            <h4>জাতীয় পরিচয় পত্র</h4>
                            <h4>বিবাহিতদের ক্ষেত্রে স্বামী/স্ত্রী'র নাম</h4>
                            <h4>পেশা</h4>
                            <h4>বিবাহের তারিখ</h4>
                            <h4>শিক্ষাগত যোগ্যতা</h4>
                            <h4>মোবাইল নাম্বার</h4>
                            <h4>ইমেইল</h4>
                            <h4>ছেলে ও মেয়ে কতজন এবং কে কি করে লিখুন </h4>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4><?= $result['father_name']; ?></h4>
                            <h4><?= $result['fa_occupation']; ?></h4>
                            <h4><?= $result['fa_monthly_income']; ?></h4>
                            <h4><?= $result['fa_edu_quli']; ?></h4>
                            <h4><?= $result['fa_phone']; ?></h4>
                            <h4><?= $result['fa_email']; ?></h4>
                            <h4><?= $result['fa_nid']; ?></h4>
                            <h4><?= $result['mother_name']; ?></h4>
                            <h4><?= $result['ma_occupation']; ?></h4>
                            <h4><?= $result['ma_monthly_income']; ?></h4>
                            <h4><?= $result['ma_edu_quli']; ?></h4>
                            <h4><?= $result['ma_phone']; ?></h4>
                            <h4><?= $result['ma_email']; ?></h4>
                            <h4><?= $result['ma_nid']; ?></h4>
                            <h4><?= $result['marriage_person']; ?></h4>
                            <h4><?= $result['marriage_occu']; ?></h4>
                            <h4><?= $result['marriage_date']; ?></h4>
                            <h4><?= $result['marriage_edu_quali']; ?></h4>
                            <h4><?= $result['marriage_mobile']; ?></h4>
                            <h4><?= $result['marriage_email']; ?></h4>
                            <h4><?= $result['children']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <!--main form end here-->


<?php  include '../inc/footer.php' ?>

//end show teacher


//edit teacher start

<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

$db = new PDO("mysql:host=localhost;dbname=bangla;charset=utf8;", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$id = $_GET['edit'];

$stmt= $db->prepare("select * from teacher_data where id = :id");
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);




?>
<?php include_once '../inc/header.php'; ?>


<div class="col-md-8" style="width: 77.666667%; ">
    <form method="post" action="updateTeacher.php" accept-charset="utf-8" align="center" enctype="multipart/form-data">

    <div class="container" style="width: 100%; background: white">
        <div class="row">
            <div class="col-md-12">
                <form action="storeTeacher.php" method="post" enctype="multipart/form-data">

                    <h3 class="text-center" style="color: #2559ee">সার্ভিস তথ্যাবলী </h3>
                    <hr />
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">লিঙ্গ <font color="red" size="4">*</font></label>
                                <select class="form-control" name="sex" required>
                                    <option>সিলেক্ট করুণ</option>
                                    <option <?= $result['sex'] == 'ছেলে'?'selected':'' ?>   value="ছেলে">ছেলে</option>
                                    <option <?= $result['sex'] == 'মেয়ে'?'selected':'' ?>   value="মেয়ে"> মেয়ে</option>
                                    <option <?= $result['sex'] == 'অন্যান্য'?'selected':'' ?>   value="অন্যান্য">অন্যান্য</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">শিক্ষকের নাম :<font color="red" size="4">*</font> </label>
                                <input type="text" name="teacher_name" value="<?= $result['teacher_name'] ?>" class="form-control" placeholder="Enter name.." id="" required="required">
                                <input type="hidden" name="id" value="<?= $result['id'] ?>" class="form-control"  id="" >
                                <input type="hidden" name="image" value="<?= $result['image'] ?>" class="form-control"  id="" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">প্রতিষ্ঠানে পদবী: <font color="red" size="4">*</font> </label>
                                <select class="form-control" name="designation" required>
                                    <option  <?= $result['designation'] == 'সিলেক্ট করুণ'?'selected':'' ?>   value="সিলেক্ট করুণ">সিলেক্ট করুণ</option>
                                    <option <?= $result['designation'] == 'প্রধান শিক্ষক'?'selected':'' ?>   value="প্রধান শিক্ষক">প্রধান শিক্ষক  </option>
                                    <option <?= $result['designation'] == 'সহকারী প্রধান শিক্ষক'?'selected':'' ?>   value="সহকারী প্রধান শিক্ষক">সহকারী প্রধান শিক্ষক  </option>
                                    <option <?= $result['designation'] == 'শিক্ষক'?'selected':'' ?>   value="শিক্ষক"> শিক্ষক  </option>
                                    <option <?= $result['designation'] == 'সহকারী শিক্ষক'?'selected':'' ?>   value="সহকারী শিক্ষক">সহকারী শিক্ষক</option>
                                    <option <?= $result['designation'] == 'পিয়ন'?'selected':'' ?>   value="পিয়ন">পিয়ন</option>
                                    <option <?= $result['designation'] == 'অন্যান্য'?'selected':'' ?>   value="অন্যান্য">অন্যান্য</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">যে কাজের জন্য নিয়োগ পেয়েছেন : <font color="red" size="4">*</font> </label>
                                <input type="text" name="what_work" value="<?= $result['what_work'] ?>" class="form-control" placeholder="what's work.." id="" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">শিক্ষাগত যোগ্যতা : <font color="red" size="4">*</font> </label>
                                <input type="text" name="eduquali" value="<?= $result['eduquali'] ?>" class="form-control" placeholder="Education Qualification..." id="" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ট্রেনিং : </label>
                                <input type="text" name="training"  value="<?= $result['training'] ?>" class="form-control" placeholder="Training..." id="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">যোগদানের তারিখ : <font color="red" size="4">*</font> </label>
                                <input type="date" name="join_date" value="<?= $result['join_date'] ?>" class="form-control" placeholder="attend time..."  id="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">অবসরের তারিখ : </label>
                                <input type="date" name="retire_date" value="<?= $result['retire_date'] ?>" class="form-control" placeholder="Obb.." id="" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ইনডেক্স নাম্বার : </label>
                                <input type="text" name="index_number" value="<?= $result['index_number'] ?>" class="form-control" placeholder="Index number..." id="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">এমপিও  ভূক্তির তারিখ  </label>
                                <input type="date" name="mpo_date" value="<?= $result['mpo_date'] ?>" class="form-control" placeholder="mpo date..." id="" >
                            </div>
                        </div>
                    </div>

                    <h3 class="text-center" style="color: #2559ee">ব্যক্তিগত তথ্যাবলী</h3>
                    <hr />

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">জন্ম তারিখ: <font color="red" size="4">*</font></label>
                                <input type="date" name="birth_date" value="<?= $result['birth_date'] ?>" class="form-control" required id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">রক্তের গ্রুপ:</label>
                                <select class="form-control" name="blood" >
                                    <option>সিলেক্ট করুণ</option>
                                    <option <?php echo ($result['blood']=='A+')? 'selected':'' ?> value="A+">A+</option>
                                    <option <?php echo ($result['blood']=='A-')? 'selected':'' ?> value="A-">A-</option>
                                    <option <?php echo ($result['blood']=='B+')? 'selected':'' ?> value="B+">B+</option>
                                    <option <?php echo ($result['blood']=='B-')? 'selected':'' ?> value="B-">B-</option>
                                    <option <?php echo ($result['blood']=='AB+')? 'selected':'' ?> value="AB+">AB+</option>
                                    <option <?php echo ($result['blood']=='AB-')? 'selected':'' ?> value="AB-">AB-</option>
                                    <option <?php echo ($result['blood']=='O+')? 'selected':'' ?> value="O+">O+</option>
                                    <option <?php echo ($result['blood']=='O-')? 'selected':'' ?> value="O-">O-</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">ধর্ম: <font color="red" size="4">*</font></label>
                                <select class="form-control" name="religion" required>
                                    <option <?php echo ($result['religion']=='ইসলাম')? 'selected':'' ?> value="ইসলাম">ইসলাম</option>
                                    <option <?php echo ($result['religion']=='হিন্দু')? 'selected':'' ?> value="হিন্দু">হিন্দু</option>
                                    <option <?php echo ($result['religion']=='খ্রিষ্ঠান')? 'selected':'' ?> value="খ্রিষ্ঠান">খ্রিষ্ঠান</option>
                                    <option <?php echo ($result['religion']=='বৌদ্ধ')? 'selected':'' ?> value="বৌদ্ধ">বৌদ্ধ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">ইমেইল:</label>
                            <input type="text" name="email" value="<?= $result['email'] ?>" class="form-control" placeholder="Enter email.." id="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">জাতীয় পরিচয় পত্র : <font color="red" size="4">*</font></label>
                                <input type="text" name="nid" value="<?= $result['nid'] ?>" class="form-control" placeholder="Enter NID Number..." required id="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">সর্বশেষ সার্ভিস প্রতিষ্ঠানের নাম  : </label>
                                <input type="text" name="lastorga" value="<?= $result['lastorga'] ?>" class="form-control" placeholder="Last services oraganization..." id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ছেড়ে আসার কারন:</label>
                                <input type="text" name="whyleft" value="<?= $result['whyleft'] ?>" class="form-control" placeholder="why left..." id="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">প্রতিষ্ঠানের ঠিকানা (ফোন নাম্বার  সহ):</label>
                                <input type="text" name="orgaarea" value="<?= $result['orgaarea'] ?>" class="form-control" placeholder="Organizatin area with phone number" id="">
                            </div>
                        </div>
                    </div>

                    <h3 class="text-center" style="color: #2559ee">  বর্তমান ঠিকানা  </h3>
                    <hr />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">বাড়ির নাম:</label>
                                <input type="text" name="homeName" value="<?= $result['homeName'] ?>" class="form-control" placeholder="Home name..." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">বাড়ি / হোল্ডিং নাম্বার:</label>
                                <input type="text" name="holdingNum" value="<?= $result['holdingNum'] ?>" class="form-control" placeholder="Holding number..." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">রোড নাম্বার:</label>
                                <input type="text" name="roadName" value="<?= $result['roadName'] ?>" class="form-control" placeholder="Road number..." id="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">গ্রাম / পাড়া / মহল্লার নাম : <font color="red" size="4">*</font></label>
                                <input type="text" name="village" value="<?= $result['village'] ?>" class="form-control" placeholder="Village name..." id="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ডাকঘর : <font color="red" size="4">*</font></label>
                                <input type="text" name="postoffice" value="<?= $result['postoffice'] ?>" class="form-control" placeholder="Postoffice name..." id="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ইউনিয়ন / পৌরসভার নাম : <font color="red" size="4">*</font></label>
                                <input type="text" name="unione" value="<?= $result['unione'] ?>" class="form-control" placeholder="Unione name..." id="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">উপজেলা / থানার নাম : <font color="red" size="4">*</font></label>
                                <input type="text" name="thana" value="<?= $result['thana'] ?>" class="form-control" placeholder="Thana name..." id="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">জেলার নাম : <font color="red" size="4">*</font> </label>
                                <input type="text" name="district" value="<?= $result['district'] ?>" class="form-control" placeholder="District name..." id="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">পোষ্ট কোড নাম্বার:</label>
                                <input type="text" name="postcode" value="<?= $result['postcode'] ?>" class="form-control" placeholder="Post Code..." id="">
                            </div>
                        </div>
                    </div>

                    <h3 class="text-center" style="color: #2559ee">  স্থায়ী ঠিকানা  </h3>
                    <hr />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">বাড়ির নাম:</label>
                                <input type="text" name="lasting_homeName" value="<?= $result['lasting_homeName'] ?>" class="form-control" placeholder="Home name..." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">বাড়ি / হোল্ডিং নাম্বার:</label>
                                <input type="text" name="lasting_holdingNum" value="<?= $result['lasting_holdingNum'] ?>" class="form-control" placeholder="Holding number..." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">রোড নাম্বার:</label>
                                <input type="text" name="lasting_roadName" value="<?= $result['lasting_roadName'] ?>" class="form-control" placeholder="Road number..." id="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">গ্রাম / পাড়া / মহল্লার নাম:</label>
                                <input type="text" name="lasting_village" value="<?= $result['lasting_village'] ?>" class="form-control" placeholder="Village name..." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ডাকঘর:</label>
                                <input type="text" name="lasting_postoffice" value="<?= $result['lasting_postoffice'] ?>" class="form-control" placeholder="Postoffice name..." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ইউনিয়ন / পৌরসভার নাম:</label>
                                <input type="text" name="lasting_unione" value="<?= $result['lasting_unione'] ?>" class="form-control" placeholder="Unione name..." id="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">উপজেলা / থানার নাম:</label>
                                <input type="text" name="lasting_thana" value="<?= $result['lasting_thana'] ?>" class="form-control" placeholder="Thana name..." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">জেলার নাম:</label>
                                <input type="text" name="lasting_district" value="<?= $result['lasting_district'] ?>" class="form-control" placeholder="District name..." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">পোষ্ট কোড নাম্বার:</label>
                                <input type="text" name="lasting_postcode" value="<?= $result['lasting_postcode'] ?>" class="form-control" placeholder="Post Code..." id="">
                            </div>
                        </div>
                    </div>

                    <h3 class="text-center" style="color: #2559ee">  পারিবারিক তথ্যাবলী   </h3>
                    <hr />

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">পিতার নাম:<font color="red" size="4">*</font></label>
                                <input type="text" name="father_name" value="<?= $result['father_name'] ?>" class="form-control" placeholder="Enter Father name.." id="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">পেশা:<font color="red" size="4">*</font></label>
                                <input type="text" name="fa_occupation" value="<?= $result['fa_occupation'] ?>" class="form-control" placeholder="Enter Occupation.." id="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">মাসিক আয়:</label>
                                <input type="text" name="fa_monthly_income" value="<?= $result['fa_monthly_income'] ?>" class="form-control" placeholder="Monthly income.." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">শিক্ষাগত যোগ্যতা:</label>
                                <input type="text" name="fa_edu_quli" value="<?= $result['fa_edu_quli'] ?>" class="form-control" placeholder="Education Qualification.." id="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ফোন নাম্বার:</label>
                                <input type="text" name="fa_phone" value="<?= $result['fa_phone'] ?>" class="form-control" placeholder="Enter phone number.." id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ইমেইল:</label>
                                <input type="text" name="fa_email" value="<?= $result['fa_email'] ?>" class="form-control" placeholder="Enter email.." id="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="">জাতীয় পরিচয় পত্র</label>
                            <input type="text" name="fa_nid" value="<?= $result['fa_nid'] ?>" class="form-control" placeholder="Enter father NID..." id="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">মাতার নাম:<font color="red" size="4">*</font></label>
                                <input type="text" name="mother_name" value="<?= $result['mother_name'] ?>" class="form-control" placeholder="Enter Father name.." id="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">পেশা:<font color="red" size="4">*</font></label>
                                <input type="text" name="ma_occupation" value="<?= $result['ma_occupation'] ?>" class="form-control" placeholder="Enter Occupation.." id="" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">মাসিক আয়:</label>
                                <input type="text" name="ma_monthly_income" value="<?= $result['ma_monthly_income'] ?>" class="form-control" placeholder="Monthly income.." id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">শিক্ষাগত যোগ্যতা:</label>
                                <input type="text" name="ma_edu_quli" value="<?= $result['ma_edu_quli'] ?>" class="form-control" placeholder="Education Qualification.." id="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ফোন নাম্বার:</label>
                                <input type="text" name="ma_phone" value="<?= $result['ma_phone'] ?>" class="form-control" placeholder="Enter phone number.." id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ইমেইল:</label>
                                <input type="text" name="ma_email" value="<?= $result['ma_email'] ?>" class="form-control" placeholder="Enter email.." id="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">জাতীয় পরিচয় পত্র নাম্বার : </label>
                            <input type="text" name="ma_nid" value="<?= $result['ma_nid'] ?>" class="form-control" placeholder="Enter father NID..." id="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">বিবাহিতদের ক্ষেত্রে স্বামী/স্ত্রী'র নাম :</label>
                                <input type="text" name="marriage_person" value="<?= $result['marriage_person'] ?>" class="form-control" placeholder="Husband or Wife name..." id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">পেশা : </label>
                                <input type="text" name="marriage_occu" value="<?= $result['marriage_occu'] ?>" class="form-control" placeholder="Occupatin..." id="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">বিবাহের তারিখ : </label>
                                <input type="date" name="marriage_date" value="<?= $result['marriage_date'] ?>" class="form-control" placeholder="Merit date..." id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">শিক্ষাগত যোগ্যতা : </label>
                                <input type="text" name="marriage_edu_quali" value="<?= $result['marriage_edu_quali'] ?>" class="form-control" placeholder="Education qualification..." id="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">মোবাইল নাম্বার  : </label>
                                <input type="text" name="marriage_mobile" value="<?= $result['marriage_mobile'] ?>" class="form-control" placeholder="Mobile number..." id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ইমেইল : </label>
                                <input type="text" name="marriage_email" value="<?= $result['marriage_email'] ?>" class="form-control" placeholder="Enter email..." id="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="">ছেলে ও মেয়ে কতজন এবং কে কি করে লিখুন  : </label>
                            <textarea class="form-control" name="children" rows="5" id=""><?= $result['children'];  ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">ছবি আপলোড : <font color="red" size="4">*</font></label>
                        <input type='file' name="image"  value="<?php echo $result['image']?>"  onchange="readURL(this);" />

                        <img id="blah" src="../uploads/teacher/<?php echo $result['image']?>" width="100" alt=" " />
                    </div>




                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit" id="">
                    </div>

                </form>
            </div>
        </div>
    </div>
    </form>
</div>




<?php  include '../inc/footer.php' ?>

//edit teacher end



