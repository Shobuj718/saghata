
<?php //include_once '../inc/header.php';
//    error_reporting(0);
//?>
<?php include_once '../includes/header.php' ?>




<!--       main form start here-->


    <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default2">Submit</button>
<!--        <button type="submit" class="btn btn-default1">Logout</button>-->
    </form>

    <div class="col-md-12" style="background-color:#fff;" >
        <form method="post" action="rowInser.php" accept-charset="utf-8" align="center" enctype="multipart/form-data">
            <table width="100%" border="0">

                <tr>
                    <td colspan="12"><h2><center>একাডেমিক তথ্যাবলী</center></h2></td>

                </tr>
                <tr>
                    <th colspan="4">লিঙ্গ <font color="red" size="4">*</font></th>
                    <th colspan="6"> শিক্ষার্থীর নাম<font color="red" size="4">*</font></th>

                </tr>
                <tr>
                    <td colspan="4">
                        <select class="form-control" name="sex" required>
                            <option>সিলেক্ট করুণ</option>
                            <option>ছেলে</option>
                            <option> মেয়ে</option>
                            <option>অন্যান্য</option>
                        </select>
                    </td>
                    <td colspan="6"><input type="text" class="form-control"  name="student_name" required >
                    </td>
                <tr>
                    <th colspan="3">শ্রেণী<font color="red" size="4">*</font></th>
                    <th colspan="3">শিফট<font color="red" size="4">*</font></th>
                    <th colspan="3">শাখা<font color="red" size="4">*</font></th>
                    <th colspan="3">গ্রুপ / বিভাগ<font color="red" size="4">*</font></th>
                </tr>
                <tr>
                    <td colspan="3">
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
                    </td>
                    <td colspan="3">
                        <select class="form-control" name="shift" required>
                            <option>সিলেক্ট করুন</option>
                            <option>প্রভাতী</option>
                            <option>দিবা</option>
                            <option>সান্ধ্যকালীন</option>
                            <option>রাত্রিকালীন</option>
                        </select>
                    </td>
                    <td colspan="3">
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
                    </td>
                    <td colspan="3">
                        <select class="form-control" name="department" required>
                            <option>সিলেক্ট করুন</option>
                            <option>জেনারেল</option>
                            <option>বিজ্ঞান</option>
                            <option>মানবিক</option>
                            <option>বানিজ্য  </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">স্টুডেন্ট আইডি নাম্বার<font color="red" size="4">*</font></th>
                    <th colspan="3">ক্লাসের রোল নাম্বার<font color="red" size="4">*</font></th>
                    <th colspan="3">শিক্ষাবর্ষ<font color="red" size="4">*</font></th>

                </tr>
                <tr>
                    <input type="hidden" name="submit_count" value= "1" id="submit_count"/>
<!--                    --><?php
//                    $order = 1;
//                    $submit_count = 1000;
//                        if (@$_REQUEST['submit_count'] == "1" ):
//                    ?>
<!--                        --><?php //$submit_count++; ?>
<!--                    --><?PHP //endif ?>
                    <?php
                    $db = new PDO("mysql:host=localhost;dbname=bangla;charset=utf8;", "root", "");
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

                    $stmt = $db->prepare("select student_id from student_data ORDER by id DESC Limit 1 ");
                    $stmt->execute();
                    $result = $stmt->fetch(PDO::PARAM_STR);
                    $lastid = $result['student_id'];
                    ?>

<!--                    <br />This form has been submitted --><?php //echo $submit_count ?><!-- times.<br />-->
                    <input type='hidden' name='number' value=<?=  $_SESSION['i']; ?> />
                    <td colspan="3"><input type="text" value="<?= ++$lastid ;//substr(md5(time()),'0','5').date('Y'); //$submit_count.date('Y'); ?>" class="form-control" name="student_id" required ></td>

                    <td colspan="3"><input type="text" class="form-control"  name="class_roll"   required></td>
                    <td colspan="3"><input type="text" class="form-control" value="<?php echo date('Y'); ?>" name="year"  required></td>
                </tr>
                <tr>
                    <td colspan="9"><h2><center>ব্যক্তিগত তথ্যাবলী</center></h2></td>

                </tr>
                <tr>
                    <th colspan="3"> জন্ম তারিখ<font color="red" size="4">*</font></th>
                    <th colspan="3"> রক্তের গ্রুপ</th>
                    <th colspan="3"> ধর্ম<font color="red" size="4">*</font></th>
                </tr>
                <tr>
                    <td colspan="3">
                        <select class="form-control11" name="birth_day" required>
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

                        <select class="form-control11" name="birth_month" required>
                            <option>মাস</option>
                            <option>জানুয়ারী</option>
                            <option>ফেব্রুয়ারী</option>
                            <option>মার্চ</option>
                            <option>এপ্রিল</option>
                            <option>মে</option>
                            <option>জুন</option>
                            <option>জুলাই</option>
                            <option>আগস্ট</option>
                            <option>সেপ্টেম্বর</option>
                            <option>অক্টোবর</option>
                            <option>নভেম্বর</option>
                            <option>ডিসেম্বর</option>

                        </select>


                        <select class="form-control11" name="birth_year" required>
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
                    </td>
                    <td colspan="3">
                        <select class="form-control10" name="blood_group">
                            <option>সিলেক্ট করুন</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </td>
                    <td colspan="3">
                        <select class="form-control10" name="religion" required>
                            <option>সিলেক্ট করুন</option>
                            <option>ইসলাম</option>
                            <option>হিন্দু</option>
                            <option>খ্রিষ্ঠান</option>
                            <option>বৌদ্ধ</option>
                        </select>
                    </td>
                </tr>
                </tr><tr>
                    <th colspan="7">জন্ম নিবন্ধন নাম্বার</th>
                </tr>
                <tr>
                    <td colspan="7"><input type="text" class="form-control" name="birth_reg_num"></td>
                </tr>
                <tr>
                    <th colspan="6">সর্বশেষ অধ্যয়ন প্রতিষ্ঠানের নাম</th>
                    <th colspan="3">ছেড়ে আসার কারন</th>
                </tr>
                <tr>
                    <td colspan="6"><input type="text" class="form-control" name="last_study_orga"></td>
                    <td colspan="3"><input type="text" class="form-control" name="why_left"></td>
                </tr>
                <tr>
                    <th colspan="7">সর্বশেষ ছেড়ে আসা প্রতিষ্ঠানের ঠিকানা (ফোন নাম্বার  সহ)</th>
                </tr>
                <tr>
                    <td colspan="7"><input type="text" class="form-control" name="last_Orga_phone"></td>
                </tr>

                <tr>
                    <td colspan="7"><center><h3>বর্তমান ঠিকানা</h3></center></td>
                </tr>
                <tr>

                    <th colspan="3">বাড়ির নাম</th>
                    <th colspan="3">বাড়ি / হোল্ডিং নাম্বার</th>
                    <th colspan="3"> রোড নাম্বার</th>
                </tr>


                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="home_name" ></td>
                    <td colspan="3"><input type="text" class="form-control" name="hoding_number"></td>
                    <td colspan="3"><input type="text" class="form-control" name=" road_number"></td>

                </tr>

                <tr>
                    <th colspan="3">গ্রাম / পাড়া / মহল্লার নাম<font color="red" size="4">*</font></th>
                    <th colspan="3">ডাকঘর<font color="red" size="4">*</font></th>
                    <th colspan="3"> ইউনিয়ন / পৌরসভার নাম<font color="red" size="4">*</font></th>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="village_name" required></td>
                    <td colspan="3"><input type="text" class="form-control" name="postoffice" required></td>
                    <td colspan="3"><input type="text" class="form-control" name=" unione_name" required></td>
                </tr>
                <tr>
                    <th colspan="3">উপজেলা / থানার নাম<font color="red" size="4">*</font></th>
                    <th colspan="3">জেলার নাম<font color="red" size="4">*</font></th>
                    <th colspan="3"> পোষ্ট কোড নাম্বার</th>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="thana_name" required></td>
                    <td colspan="3"><input type="text" class="form-control" name="district_name" required></td>
                    <td colspan="3"><input type="text" class="form-control" name=" postcode"></td>
                </tr>

                <tr>
                <tr>
                    <td colspan="7"><center><h3>স্থায়ী ঠিকানা</h3></center></td>
                </tr>
                <tr>
                    <th colspan="3">বাড়ির নাম</th>
                    <th colspan="3">বাড়ি / হোল্ডিং নাম্বার</th>
                    <th colspan="3"> রোড নাম্বার</th>
                </tr>

                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="lasting_home_name"></td>
                    <td colspan="3"><input type="text" class="form-control" name="lasting_holding_number"></td>
                    <td colspan="3"><input type="text" class="form-control" name=" lasting_road_number"></td>
                </tr>

                <tr>
                    <th colspan="3">গ্রাম / পাড়া / মহল্লার নাম</th>
                    <th colspan="3">ডাকঘর</th>
                    <th colspan="3"> ইউনিয়ন / পৌরসভার নাম</th>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="lasting_village"></td>
                    <td colspan="3"><input type="text" class="form-control" name="lasting_postoffice"></td>
                    <td colspan="3"><input type="text" class="form-control" name=" lasting_unione"></td>
                </tr>
                <tr>
                    <th colspan="3">উপজেলা / থানার নাম</th>
                    <th colspan="3">জেলার নাম</th>
                    <th colspan="3"> পোষ্ট কোড নাম্বার</th>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="lasting_thana"></td>
                    <td colspan="3"><input type="text" class="form-control" name="lasting_district"></td>
                    <td colspan="3"><input type="text" class="form-control" name=" lasting_postcode"></td>
                </tr>
                <tr>
                    <td colspan="7"><center><h2>অভিভাবকের তথ্যাবলী</h2></center></td>
                </tr>
                <tr>
                    <th colspan="7">পিতার নাম<font color="red" size="4">*</font></th>
                </tr>
                <tr>
                    <td colspan="7"><input type="text" class="form-control" name="father_name" required></td>
                </tr>
                <tr>
                    <th colspan="3">পেশা<font color="red" size="4">*</font></th>
                    <th colspan="3">মাসিক আয়</th>
                    <th colspan="3">শিক্ষাগত যোগ্যতা</th>
                </tr>

                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="father_occupation" required></td>
                    <td colspan="3"><input type="text" class="form-control" name="fa_monthly_income" ></td>
                    <td colspan="3"><input type="text" class="form-control" name=" fa_edu_quali"></td>
                </tr>
                <tr>
                    <th colspan="6">ফোন নাম্বার</th>
                    <th colspan="3">ইমেইলঃ</th>
                </tr>
                <tr>
                    <td colspan="6"><input type="text" class="form-control" name="father_phone"></td>
                    <td colspan="3"><input type="text" class="form-control" name="father_email"></td>
                </tr>
                <tr>
                    <th colspan="7">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার</th>
                </tr>
                <tr>
                    <td colspan="7"><input type="text" class="form-control" name="father_national_id"></td>
                </tr>
                <tr>
                    <th colspan="7">মাতার নাম<font color="red" size="4">*</font></th>
                </tr>
                <tr>
                    <td colspan="7"><input type="text" class="form-control" name="mother_name" required></td>
                </tr>
                <tr>
                    <th colspan="3">পেশা<font color="red" size="4">*</font></th>
                    <th colspan="3">মাসিক আয়</th>
                    <th colspan="3">শিক্ষাগত যোগ্যতা</th>
                </tr>

                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="mother_occupation" required></td>
                    <td colspan="3"><input type="text" class="form-control" name="mo_monthly_income"></td>
                    <td colspan="3"><input type="text" class="form-control" name=" mo_edu_quali"></td>
                </tr>
                <tr>
                    <th colspan="6">ফোন নাম্বার</th>
                    <th colspan="3">ইমেইলঃ</th>
                </tr>
                <tr>
                    <td colspan="6"><input type="text" class="form-control" name="mother_phone"></td>
                    <td colspan="3"><input type="text" class="form-control" name="mother_email"></td>
                </tr>
                <tr>
                    <th colspan="7">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার</th>
                </tr>
                <tr>
                    <td colspan="7"><input type="text" class="form-control" name="mo_national_id"></td>
                </tr>
                <tr>
                    <th colspan="7">পিতা / মাতার অবর্তমানে স্থানীয় অভিভাবকের নাম</th>
                </tr>
                <tr>
                    <td colspan="7"><input type="text" class="form-control" name="local_gurdian"></td>
                </tr>
                <tr>
                    <th colspan="3">পেশা</th>
                    <th colspan="3">সম্পর্ক</th>
                    <th colspan="3">শিক্ষাগত যোগ্যতা</th>
                </tr>

                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="local_occupation"></td>
                    <td colspan="3"><input type="text" class="form-control" name="relation"></td>
                    <td colspan="3"><input type="text" class="form-control" name=" local_edu"></td>
                </tr>
                <tr>
                    <th colspan="6">ফোন নাম্বার</th>
                    <th colspan="3">ইমেইলঃ</th>
                </tr>
                <tr>
                    <td colspan="6"><input type="text" class="form-control" name="local_phone"></td>
                    <td colspan="3"><input type="text" class="form-control" name="local_email"></td>
                </tr>
                <tr>
                    <th colspan="7">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার</th>
                </tr>
                <tr>
                    <td colspan="7"><input type="text" class="form-control" name="local_national_id"></td>
                </tr>
                <br />
                <tr>
                    <th colspan="3">শিক্ষার্থী ছবি <font color="red" size="4">*</font></th>
                    <th colspan="3"> পিতার ছবি <font color="red" size="4">*</font></th>
                    <th colspan="3">মাতার ছবি <font color="red" size="4">*</font></th>
                </tr>
                <tr>
<!--                    <td colspan="3"><input type="file" name="student_image" onchange="readURL(this); id="image"></td>-->
<!--                    <td colspan="3"><img id="blah" src="#" alt="your image" /></td>-->
<!---->
<!--                    <td colspan="3"><input type="file" name="father_image" onchange="readURL2(this); id="image"></td>-->
<!--                    <td colspan="3"><img id="blah2" src="#" alt="your image" /></td>-->
<!---->
<!--                    <td colspan="3"><input type="file" name="mother_image" onchange="readURL3(this); id="image"></td>-->
<!--                    <td colspan="3"><img id="blah3" src="#" alt="your image" /></td>-->

                    <?php
                    if(isset($_SESSION['imgSize'])){
                        echo "<div class='alert alert-success'>".$_SESSION['imgSize']."</div>";
                        session_unset();
                    }

                    ?>
                    <td colspan="3">
                        <input type='file' name="student_image" onchange="readURL(this);" />
                        <img id="blah" src="#" alt=" " />
                    </td>

                    <td colspan="3">
                        <input type='file' name="father_image" onchange="readURL2(this);" />
                        <img id="blah2" src="#" alt=" " />
                    </td>
                    <td colspan="3">
                        <input type='file' name="mother_image" onchange="readURL3(this);" />
                        <img id="blah3" src="#" alt=" " />
                    </td>
                </tr>

<!--                <input type='file' onchange="readURL(this);" />-->
<!--                <img id="blah" src="#" alt="your image" />-->
<!---->
<!---->
<!--                <input type='file' onchange="readURL2(this);" />-->
<!--                <img id="blah2" src="#" alt="your image" />-->
<!---->
<!--                <input type='file' onchange="readURL3(this);" />-->
<!--                <img id="blah3" src="#" alt="your image" />-->

                <br />
                <br />
                <tr>
                    <td colspan="">
                        <input type="reset" class="btn btn-info" name="reset" value="Reset">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </td>
                </tr>
            </table>

        </form>

<!--main form end here-->




        <?php //include_once '../includes/footer.php' ?>

<?php // include '../inc/footer.php' ?>