

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

   /* $(document).ready(function(){
        $("#student_id").focus(function(){
            $(this).css("background-color", "#ccc");
        });
        $("input").blur(function(){
            $(this).css("background-color", "#fff");
        });
    });*/

    $(document).ready(function(){
        $("#student_id").keyup(function(){
            var student_id = $(this).val();

            $.ajax({
                url : 'view/admin/StudentInfo/halfadd/checkStudentId.php',
                method : "POST",
                data : {student_id:student_id},
                dataType:'text',
                success:function(data){
                    $("#student_id_status").html(data);
                }
            });
        });
    });
</script>

<style>
    .error{
        color: red;
        font-size: 18px;
    }
    .success{
        color: green;
        font-size: 18px;
    }
</style>

<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

    include_once '../../includes/header.php';
    include_once '../../../../vendor/autoload.php';


    use App\admin\student\Student;
    $student = new Student();
    
    $results = $student->selectId();
    $lastid = $results['student_id'];


            
                    // $db = new PDO("mysql:host=localhost;dbname=bangla;charset=utf8;", "root", "");
                    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

                    // $stmt = $db->prepare("select student_id from student_data ORDER by id DESC Limit 1 ");
                    // $stmt->execute();
                    // $result = $stmt->fetch(PDO::PARAM_STR);
                    // $lastid = $result['student_id'];
            ?>


<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->
            <form action="view/admin/StudentInfo/halfadd/rowinsert.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">শিক্ষার্থীর একাডেমিক তথ্যাবলী যোগ করুন </h3>
                <hr />
                    <?php
            
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                unset($_SESSION['imgSize']);
            }
            if(isset($_SESSION['fileext'])){
                echo "<div class='alert alert-danger'>".$_SESSION['fileext']."</div>";
                unset($_SESSION['fileext']);
            }


            ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">লিঙ্গ <font color="red" size="4">*</font></label>
                            <select class="form-control" name="sex" required>
                                <option>সিলেক্ট করুন </option>
                                <option selected="">ছেলে</option>
                                <option> মেয়ে</option>
                                <option>অন্যান্য</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                            <label for="">শিক্ষার্থীর  নাম :<font color="red" size="4">*</font> </label>
                            <input type="text" name="student_name" class="form-control" placeholder="Enter student name.." id="" required="required">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">শ্রেণী: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="class" required>
                                
                                <option>সিলেক্ট করুন</option>
                                
                                <option>৬ষ্ঠ</option>
                                <option>৭ম</option>
                                <option>৮ম</option>
                                <option>নবম</option>
                                <option selected="">১০ম</option>
                                <option>একাদশ</option>
                                <option>দ্বাদশ</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">শিফট: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="shift" required>
                                <option>সিলেক্ট করুন</option>
                                <option>প্রভাতী</option>
                                <option>দিবা</option>
                                <option>সান্ধ্যকালীন</option>
                                <option>রাত্রিকালীন</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">শাখা: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="branch" required>
                                <option>সিলেক্ট করুন </option>
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
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">  গ্রুপ / বিভাগ: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="department" required>
                                <option>সিলেক্ট করুন</option>
                                <option>জেনারেল</option>
                                <option selected="">বিজ্ঞান</option>
                                <option>মানবিক</option>
                                <option>বানিজ্য  </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">শিক্ষার্থীর  আইডি নাম্বার: <font color="red" size="4">*</font> </label>
                            <input type="text" value="<?= ++$lastid ;//substr(md5(time()),'0','5').date('Y'); //$submit_count.date('Y'); ?>" class="form-control" name="student_id" id="student_id" required >
                            
                            <table>                               
                                <tr>
                                    <th></th>
                                    <td><span id="student_id_status"></span></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">  ক্লাসের রোল নাম্বার : </label>
                            <input type="text" name="class_roll" class="form-control" placeholder="Enter Class Roll..." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">  শিক্ষাবর্ষ : <font color="red" size="4">*</font> </label>
                            <input type="text" class="form-control" value="<?php echo date('Y'); ?>" name="year"  required>
                        </div>
                    </div>
                    
                </div>

               

                <h3 class="text-center" style="color: #2559ee">ব্যক্তিগত তথ্যাবলী</h3>
                <hr />

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">জন্ম তারিখ: তারিখ <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_day" >
                                <option>তারিখ</option>
                                <option>১</option>
                                <option>২</option>
                                <option>৩</option>
                                <option>৪</option>
                                <option>৫</option>
                                <option>৬</option>
                                <option>৭</option>
                                <option>৮</option>
                                <option>৯</option>
                                <option>১০</option>
                                <option>১১</option>
                                <option>১২</option>
                                <option>১৩</option>
                                <option>১৪</option>
                                <option>১৫</option>
                                <option>১৬</option>
                                <option>১৭</option>
                                <option>১৮</option>
                                <option>১৯</option>
                                <option>২০</option>
                                <option>২১</option>
                                <option>২২</option>
                                <option>২৩</option>
                                <option>২৪</option>
                                <option>২৫</option>
                                <option>২৬</option>
                                <option>২৭</option>
                                <option>২৮</option>
                                <option>২৯</option>
                                <option>৩০</option>
                                <option>৩১</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">  মাস: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_month" >
                                <option>মাস</option>
                                <option>০১</option>
                                <option>০২</option>
                                <option>০৩</option>
                                <option>০৪</option>
                                <option>০৫</option>
                                <option>০৬</option>
                                <option>০৭</option>
                                <option>০৮</option>
                                <option>০৯</option>
                                <option>১০</option>
                                <option>১১</option>
                                <option>১২</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group">
                            <label for="">  সাল: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="birth_year" >
                                <option>সাল</option>
                                <option>১৯৫২</option>
                                <option>১৯৫৩</option>
                                <option>১৯৫৪</option>
                                <option>১৯৫৫</option>
                                <option>১৯৫৬</option>
                                <option>১৯৫৭</option>
                                <option>১৯৫৮</option>
                                <option>১৯৫৯</option>
                                <option>১৯৬০</option>
                                <option>১৯৬১</option>
                                <option>১৯৬২</option>
                                <option>১৯৬৩</option>
                                <option>১৯৬৪</option>
                                <option>১৯৬৫</option>
                                <option>১৯৬৬</option>
                                <option>১৯৬৭</option>
                                <option>১৯৬৮</option>
                                <option>১৯৬৯</option>
                                <option>১৯৭০</option>
                                <option>১৯৭১</option>
                                <option>১৯৭২</option>
                                <option>১৯৭৩</option>
                                <option>১৯৭৪</option>
                                <option>১৯৭৫</option>
                                <option>১৯৭৬</option>
                                <option>১৯৭৭</option>
                                <option>১৯৭৮</option>
                                <option>১৯৭৯</option>
                                <option>১৯৮০</option>
                                <option>১৯৮১</option>
                                <option>১৯৮২</option>
                                <option>১৯৮৩</option>
                                <option>১৯৮৪</option>
                                <option>১৯৮৫</option>
                                <option>১৯৮৬</option>
                                <option>১৯৮৭</option>
                                <option>১৯৮৮</option>
                                <option>১৯৮৯</option>
                                <option>১৯৯০</option>
                                <option>১৯৯১</option>
                                <option>১৯৯২</option>
                                <option>১৯৯৩</option>
                                <option>১৯৯৪</option>
                                <option>১৯৯৫</option>
                                <option>১৯৯৬</option>
                                <option>১৯৯৭</option>
                                <option>১৯৯৮</option>
                                <option>১৯৯৯</option>
                                <option>২০০০</option>
                                <option>২০০১</option>
                                <option>২০০২</option>
                                <option>২০০৩</option>
                                <option>২০০৪</option>
                                <option>২০০৫</option>
                                <option>২০০৬</option>
                                <option>২০০৭</option>
                                <option>২০০৮</option>
                                <option>২০০৯</option>
                                <option>২০১০</option>
                                <option>২০১১</option>
                                <option>২০১২</option>
                                <option>২০১৩</option>
                                <option>২০১৪</option>
                                <option>২০১৫</option>
                                <option>২০১৬</option>
                                <option>২০১৭</option>
                                <option>২০১৮</option>
                                <option>২০১৯</option>
                                <option>২০২০</option>
                                <option>২০২১</option>
                                <option>২০২২</option>
                                <option>২০২৩</option>
                                <option>২০২৪</option>
                                <option>২০২৫</option>
                                <option>২০২৬</option>
                                <option>২০২৭</option>
                                <option>২০২৮</option>
                                <option>২০২৯</option>
                                <option>২০৩০</option>
                                <option>২০৩১</option>
                                <option>২০৩২</option>
                                <option>২০৩৩</option>
                                <option>২০৩৪</option>
                                <option>২০৩৫</option>
                                <option>২০৩৬</option>
                                <option>২০৩৭</option>
                                <option>২০৩৮</option>
                                <option>২০৩৯</option>
                                <option>২০৪০</option>
                                <option>২০৪১</option>
                                <option>২০৪২</option>
                                <option>২০৪৩</option>
                                <option>২০৪৪</option>
                                <option>২০৪৫</option>
                                <option>২০৪৬</option>
                                <option>২০৪৭</option>
                                <option>২০৪৮</option>
                                <option>২০৪৯</option>
                                <option>২০৫০</option>
                                <option>২০৫১</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">রক্তের গ্রুপ:</label>
                            <select class="form-control" name="blood_group" >
                                <option>সিলেক্ট করুন</option>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ধর্ম: <font color="red" size="4">*</font></label>
                            <select class="form-control" name="religion" >
                                <option>সিলেক্ট করুন</option>
                                <option>ইসলাম</option>
                                <option>হিন্দু</option>
                                <option>খ্রিষ্ঠান</option>
                                <option>বৌদ্ধ</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">জন্ম নিবন্ধন নাম্বার : <font color="red" size="4">*</font></label>
                            <input type="text" name="birth_reg_num" class="form-control" placeholder="Enter birth reg:  number..." id="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">মোবাইল নম্বর: </label>
                            <input type="text" name="last_Orga_phone" class="form-control" pattern="[0-9]{11}" title="Must contain number(0-9) and max 11 character" placeholder="Enter Phone Number..." >
                        </div>
                    </div>
                    
                    
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">সর্বশেষ অধ্যয়ন প্রতিষ্ঠানের নাম ও  ঠিকানা : </label>
                            <input type="text" name="last_study_orga" class="form-control" placeholder="Last study  oraganization..." id="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ছেড়ে আসার কারন:</label>
                            <input type="text" name="why_left" class="form-control" placeholder="why left..." id="">
                        </div>
                    </div>
                </div>




                <h3 class="text-center" style="color: #2559ee">  বর্তমান ঠিকানা  </h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ির নাম:</label>
                            <input type="text" name="home_name" class="form-control" placeholder="Enter Home name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ি / হোল্ডিং নাম্বার:</label>
                            <input type="text" name="hoding_number" class="form-control" placeholder="Enter Holding number..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">রোড নাম্বার:</label>
                            <input type="text" name="road_number" class="form-control" placeholder="Enter Road number..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">গ্রাম / পাড়া / মহল্লার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="village_name" class="form-control" placeholder="Enter Village name..." id="" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ডাকঘর : <font color="red" size="4">*</font></label>
                            <input type="text" name="postoffice" class="form-control" placeholder="Enter Postoffice name..." id="" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ইউনিয়ন / পৌরসভার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="unione_name" class="form-control" placeholder="Enter Unione name..." id="" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">উপজেলা / থানার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="thana_name" class="form-control" placeholder="Enter Thana name..." id="" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">জেলার নাম : <font color="red" size="4">*</font> </label>
                            <input type="text" name="district_name" class="form-control" placeholder="Enter District name..." id="" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পোষ্ট কোড নাম্বার:</label>
                            <input type="text" name="postcode" class="form-control" placeholder="Enter Post Code..." id="">
                        </div>
                    </div>
                </div>

                <h3 class="text-center" style="color: #2559ee">  স্থায়ী ঠিকানা  </h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ির নাম:</label>
                            <input type="text" name="lasting_home_name" class="form-control" placeholder=" Enter Home name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ি / হোল্ডিং নাম্বার:</label>
                            <input type="text" name="lasting_holding_number" class="form-control" placeholder="Enter Holding number..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">রোড নাম্বার:</label>
                            <input type="text" name="lasting_road_number" class="form-control" placeholder="Enter Road number..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">গ্রাম / পাড়া / মহল্লার নাম:</label>
                            <input type="text" name="lasting_village" class="form-control" placeholder="Enter Village name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ডাকঘর:</label>
                            <input type="text" name="lasting_postoffice" class="form-control" placeholder="Enter Postoffice name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ইউনিয়ন / পৌরসভার নাম:</label>
                            <input type="text" name="lasting_unione" class="form-control" placeholder="Enter Unione name..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">উপজেলা / থানার নাম:</label>
                            <input type="text" name="lasting_thana" class="form-control" placeholder="Enter Thana name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">জেলার নাম:</label>
                            <input type="text" name="lasting_district" class="form-control" placeholder="Enter District name..." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পোষ্ট কোড নাম্বার:</label>
                            <input type="text" name="lasting_postcode" class="form-control" placeholder="Enter Post Code..." id="">
                        </div>
                    </div>
                </div>

                <h3 class="text-center" style="color: #2559ee">  অভিভাবকের তথ্যাবলী   </h3>
                <hr />

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">পিতার নাম:<font color="red" size="4">*</font></label>
                            <input type="text" name="father_name" class="form-control" placeholder="Enter Father name.." id="" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পেশা:<font color="red" size="4">*</font></label>
                            <input type="text" name="father_occupation" class="form-control" placeholder="Enter Occupation.." id="" >
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
                            <input type="text" name="fa_edu_quali" class="form-control" placeholder="Education Qualification.." id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ফোন নাম্বার:</label>
                            <input type="text" name="father_phone" class="form-control" pattern="[0-9]{11}" title="Must contain number(0-9) and max 11 character" placeholder="Enter phone number.." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ইমেইল:</label>
                            <input type="text" name="father_email" class="form-control" placeholder="Enter email.." id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার</label>
                        <input type="text" name="father_national_id" class="form-control" placeholder="Enter father NID..." id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">মাতার নাম:<font color="red" size="4">*</font></label>
                            <input type="text" name="mother_name" class="form-control" placeholder="Enter Father name.." id="" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পেশা:<font color="red" size="4">*</font></label>
                            <input type="text" name="mother_occupation" class="form-control" placeholder="Enter Occupation.." id="" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">মাসিক আয়:</label>
                            <input type="text" name="mo_monthly_income" class="form-control" placeholder="Monthly income.." id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">শিক্ষাগত যোগ্যতা:</label>
                            <input type="text" name="mo_edu_quali" class="form-control" placeholder="Education Qualification.." id="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ফোন নাম্বার:</label>
                            <input type="text" name="mother_phone" class="form-control" pattern="[0-9]{11}" title="Must contain number(0-9) and max 11 character" placeholder="Enter phone number.." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ইমেইল:</label>
                            <input type="text" name="mother_email" class="form-control" placeholder="Enter email.." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার : </label>
                        <input type="text" name="mo_national_id" class="form-control" placeholder="Enter father NID..." id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">পিতা / মাতার অবর্তমানে স্থানীয় অভিভাবকের নাম : </label>
                        <input type="text" name="local_gurdian" class="form-control" placeholder="Enter father NID..." id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">পেশা :</label>
                            <input type="text" name="local_occupation" class="form-control" placeholder="Husband or Wife name..." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">সম্পর্ক: </label>
                            <input type="text" name="relation" class="form-control" placeholder="Occupatin..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">  শিক্ষাগত যোগ্যতা : </label>
                            <input type="text" name="local_edu" class="form-control" placeholder="Merit date..." id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ফোন নাম্বার : </label>
                            <input type="text" name="local_phone" class="form-control" placeholder="Education qualification..." id="">
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ইমেইল : </label>
                            <input type="text" name="local_email" class="form-control" placeholder="Enter email..." id="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার  : </label>
                            <input type="text" name="local_national_id" class="form-control" placeholder="Mobile number..." id="">
                        </div>
                    </div>
                </div>
                
                <?php
            
            // if(isset($_SESSION['imgSize'])){
            //     echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
            //     session_unset();
            // }
            // if(isset($_SESSION['update'])){
            //     echo "<div class='alert alert-info'>".$_SESSION['update']."</div>";
            //     session_unset();
            // }


            ?>
               
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> শিক্ষার্থী ছবি :<font color="red" size="4">*</font> </label>
                            <input type='file' name="student_image" onchange="readURL(this);" />
                            <img id="blah" src="#" alt=" " />
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

