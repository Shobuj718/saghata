<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

include_once '../includes/header.php';

$db = new PDO("mysql:host=localhost;dbname=kghs;charset=utf8;", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$id = $_GET['edit'];

$stmt= $db->prepare("select * from teacher_data where unique_id = :id");
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);




?>


<div class="col-md-12"">
    

    <div class="container" style="width: 100%; background: #ECF0F5">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="view/admin/teacher/updateTeacher.php" accept-charset="utf-8" align="center" enctype="multipart/form-data">

                    <h3 class="text-center" style="color: #2559ee">শিক্ষকর তথ্যাবলী সংশোধন  করুন </h3>
                    <hr />
        <?php
            
            if(isset($_SESSION['imgSize'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgSize']."</div>";
                session_unset();
            }
            if(isset($_SESSION['fileext'])){
                echo "<div class='alert alert-danger'>".$_SESSION['fileext']."</div>";
                session_unset();
            }


        ?>
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
                                <input type="hidden" name="unique_id" value="<?= $result['unique_id'] ?>" class="form-control"  id="" >
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">মোবাইল নম্বর  : <font color="red" size="4">*</font></label>
                                <input type="text" name="mobile" value="<?= $result['mobile'] ?>" class="form-control" placeholder="Enter Mobile Number..." required id="">
                            </div>
                        </div>
                        <div class="col-md-6">
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
                        <input type='file' name="image"    onchange="readURL(this);" />

                        <img id="blah" src="view/admin/uploads/teacher/<?php echo $result['image']?>" width="100" alt=" " />
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




<?php  include '../includes/footer.php' ?>

