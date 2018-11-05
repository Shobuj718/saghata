
<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 26-Nov-17
 * Time: 9:17 AM
 */

include_once '../includes/header.php';

include_once '../../../vendor/autoload.php';

use App\admin\Commitee\Commitee;

$id = $_GET['edit'];

$commitee = new Commitee();

$result = $commitee->editCommitee($id);

// echo "<pre>";
// var_dump($result);
//die();


 ?>


<div class="col-md-12">

  <div class="container" style="width: 100%; background: white">
    <div class="row">
        <div class="col-md-12">
            <!-- <form action="#" method="post" enctype="multipart/form-data"> -->

            <form action="view/admin/commitee/updateCommitee.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">কমিটির সদস্যের তথ্য সংশোধন করুন  </h3>
                <hr />

                         <?php
            
            if(isset($_SESSION['imgErr'])){
                echo "<div class='alert alert-danger'>".$_SESSION['imgErr']."</div>";
                unset($_SESSION['imgErr']);
            }
            


            ?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for=""> নাম :<font color="red" size="4">*</font> </label>
                            <input type="text" name="name" class="form-control" value="<?= $result['name']; ?>" id="" required="required">
                            <input type="hidden" name="unique_id" class="form-control" value="<?= $result['unique_id']; ?>" id="" required="required">
                            <input type="hidden" name="image" class="form-control" value="<?= $result['image']; ?>" id="" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">লিঙ্গ <font color="red" size="4">*</font></label>
                            <select class="form-control" name="sex" required>
                                <option>সিলেক্ট করুণ</option>
                                <option <?= $result['sex']=='ছেলে'?'selected':''; ?>>ছেলে</option>
                                <option <?= $result['sex']=='মেয়ে'?'selected':''; ?>> মেয়ে</option>
                                <option <?= $result['sex']=='অন্যান্য'?'selected':''; ?>>অন্যান্য</option>
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
                                <option <?= $result['designation']=='sovapoti'?'selected':''; ?>>সভাপতি</option>
                                <option <?= $result['designation']=='soho sovapoti'?'selected':''; ?>>সহ সভাপতি </option>
                                <option <?= $result['designation']=='secretery'?'selected':''; ?>> সেক্রেটারি </option>
                                <option <?= $result['designation']=='member'?'selected':''; ?>>মেম্বার</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">শিক্ষাগত যোগ্যতা : <font color="red" size="4">*</font> </label>
                            <input type="text" name="eduquali" class="form-control" value="<?= $result['eduquali']; ?>" id="" required="required">
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">যোগদানের তারিখ : <font color="red" size="4">*</font> </label>
                            <input type="date" name="join_date" class="form-control" value="<?= $result['join_date']; ?>"  id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""> তারিখ : </label>
                            <input type="date" name="retire_date" class="form-control" value="<?= $result['retire_date']; ?>" id="" >
                        </div>
                    </div>
                </div>

                
                <h3 class="text-center" style="color: #2559ee">ব্যক্তিগত তথ্যাবলী</h3>
                <hr />

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">জন্ম তারিখ: <font color="red" size="4">*</font></label>
                            <input type="date" name="birth_date" value="<?= $result['birth_date']; ?>" class="form-control" required id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">রক্তের গ্রুপ:</label>
                            <select class="form-control" name="blood" >
                                <option>সিলেক্ট করুণ</option>
                                <option <?= $result['blood']=='A+'?'selected':''; ?>>A+</option>
                                <option <?= $result['blood']=='A-'?'selected':''; ?>>A-</option>
                                <option <?= $result['blood']=='B+'?'selected':''; ?>>B+</option>
                                <option <?= $result['blood']=='B-'?'selected':''; ?>>B-</option>
                                <option <?= $result['blood']=='o+'?'selected':''; ?>>o+</option>
                                <option <?= $result['blood']=='o-'?'selected':''; ?>>o-</option>
                                <option <?= $result['blood']=='AB+'?'selected':''; ?>>AB+</option>
                                <option <?= $result['blood']=='AB-'?'selected':''; ?>>AB-</option>
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
                                <option <?= $result['religion']=='ইসলাম'?'selected':''; ?>>ইসলাম</option>
                                <option <?= $result['religion']=='হিন্দু'?'selected':''; ?>>হিন্দু</option>
                                <option <?= $result['religion']=='খ্রিষ্ঠান'?'selected':''; ?>>খ্রিষ্ঠান</option>
                                <option <?= $result['religion']=='বৌদ্ধ'?'selected':''; ?>>বৌদ্ধ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">ইমেইল:</label>
                        <input type="text" name="email" class="form-control" value="<?= $result['email']; ?>" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">মোবাইল নম্বর  : <font color="red" size="4">*</font></label>
                            <input type="text" name="mobile" class="form-control" value="<?= $result['mobile']; ?>" required id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">জাতীয় পরিচয় পত্র : <font color="red" size="4">*</font></label>
                            <input type="text" name="nid" class="form-control" value="<?= $result['nid']; ?>" required id="">
                        </div>
                    </div>
                </div>

                

                

                <h3 class="text-center" style="color: #2559ee">  বর্তমান ঠিকানা  </h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ির নাম:</label>
                            <input type="text" name="homeName" class="form-control" value="<?= $result['homeName']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">বাড়ি / হোল্ডিং নাম্বার:</label>
                            <input type="text" name="holdingNum" class="form-control" value="<?= $result['holdingNum']; ?>" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">রোড নাম্বার:</label>
                            <input type="text" name="roadName" class="form-control" value="<?= $result['roadName']; ?>" id="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">গ্রাম / পাড়া / মহল্লার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="village" class="form-control" value="<?= $result['village']; ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ডাকঘর : <font color="red" size="4">*</font></label>
                            <input type="text" name="postoffice" class="form-control" value="<?= $result['postoffice']; ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ইউনিয়ন / পৌরসভার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="unione" class="form-control" value="<?= $result['unione']; ?>" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">উপজেলা / থানার নাম : <font color="red" size="4">*</font></label>
                            <input type="text" name="thana" class="form-control" value="<?= $result['thana']; ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">জেলার নাম : <font color="red" size="4">*</font> </label>
                            <input type="text" name="district" class="form-control" value="<?= $result['district']; ?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">পোষ্ট কোড নাম্বার:</label>
                            <input type="text" name="postcode" class="form-control" value="<?= $result['postcode']; ?>" id="">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="">ছবি আপলোড : <font color="red" size="4">*</font></label>
                    <input type='file' name="image"    onchange="readURL(this);"  />
                    <!-- <img id="blah" src="#" alt=" " /> -->
                    <img id="blah" src="view/admin/uploads/commitee/<?= $result['image']; ?>" width="100" alt="no image" >
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

