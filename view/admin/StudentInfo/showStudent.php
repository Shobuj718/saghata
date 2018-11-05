



<?php
    include_once '../includes/header.php';
    include_once '../../../vendor/autoload.php';


?>

<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */


//error_reporting(0);

use App\admin\student\Student;
$student = new Student();

$id = $_GET['show'];

$result = $student->showSelect($id);

// echo "<pre>";
// var_dump($result);
// die();





?>

<style>
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
} 
</style>

        <br />
         <h2 style="text-align: center;padding-right:30px" ><strong>শিক্ষার্থীর  তথ্যাবলী</strong></h2>

        <h3 style="text-align: center; padding-right:30px">শিক্ষার্থীর নাম  : <br /><?php echo $result['student_name']?></h3>
        <div style="text-align: center; padding-right:30px" class="form-group">
            <img style="border-radius:50%" src="view/admin/uploads/<?php echo $result['student_image']?>" class="img-rounded" width="180" height="180" alt="no image">

        </div>

        <!-- <div style="text-align: center; padding-right:50px" class="form-group">
           <h4 style="text-align: center; padding-right:50px">পিতার নাম : <br/><?php echo $result['father_name']?>   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; মাতার নাম : <br/><?php echo $result['mother_name']?></h4>
            <img src="view/admin/uploads/<?php echo $result['father_image']?>" class="img-rounded" width="100" height="100" alt="no image">
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            <img src="view/admin/uploads/<?php echo $result['mother_image']?>" class="img-rounded" width="100" height="100" alt="no image">
                
        </div> -->

        <!-- <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-5 col-md-offset-1">
                        <div class="form-group">
                        পিতা : <?php echo $result['father_name']?>
                            <img src="view/admin/uploads/<?php echo $result['father_image']?>" class="img-rounded" width="100" alt="no image">
                        </div>
                        
                    </div>
                     <div class="col-md-5 col-md-offset-1">
                        <div class="form-group">
                        পিতা : <?php echo $result['father_name']?>
                            <img src="view/admin/uploads/<?php echo $result['father_image']?>" class="img-rounded" width="100" alt="no image">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-4 col-md-offset-1">
                        <div class="form-group">
                            <h3>পিতার নাম : </h3>
                            <h4><?php echo $result['father_name']?></h4>
                            <img src="view/admin/uploads/<?php echo $result['father_image']?>" class="img-rounded" width="100" height="100" alt="no image">
                          
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                             
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <div class="form-group">
                             <h3>মাতার নাম : </h3>
                             <h4><?php echo $result['mother_name']?></h4>
                           <img src="view/admin/uploads/<?php echo $result['mother_image']?>" class="img-rounded" width="100" height="100" alt="no image">
                          
                        </div>
                    </div>
                    
                </div>
            </div>


        </div>

      <hr>

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-5">
                        <div class="form-group">
                            <h4 style="text-align:right;">শিক্ষার্থীর নাম </h4>
                            <h4 style="text-align:right;">শিক্ষার্থীর লিঙ্গ  </h4>
                            <h4 style="text-align:right;">শ্রেণী</h4>
                            <h4 style="text-align:right;">শিফট</h4>
                            <h4 style="text-align:right;">শাখা</h4>
                            <h4 style="text-align:right;">গ্রুপ / বিভাগ</h4>
                            <h4 style="text-align:right;">স্টুডেন্ট আইডি নাম্বার</h4>
                            <h4 style="text-align:right;">ক্লাসের রোল নাম্বার</h4>
                            <h4 style="text-align:right;">শিক্ষাবর্ষ</h4>
                        </div>
                    </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['student_name']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['sex']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['class']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['shift']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['branch']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['department']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['student_id']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['class_roll']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['year']; ?></h4>
                    </div>
                </div>
                    <!-- <div class="col-md-4">
                        <div class="form-group">
                            <h4 style="text-align:left;"><?= $result['student_name']; ?></h4>
                            <h4><?= $result['sex']; ?></h4>
                            <h4><?= $result['class']; ?></h4>
                            <h4><?= $result['shift']; ?></h4>
                            <h4><?= $result['branch']; ?></h4>
                            <h4><?= $result['department']; ?></h4>
                            <h4><?= $result['student_id']; ?></h4>
                            <h4><?= $result['class_roll']; ?></h4>
                            <h4><?= $result['year']; ?></h4>
                        </div>
                    </div> -->
                </div>
            </div>


        </div>

          <hr/>

        <h3 style="text-align: center;padding-right:50px" ><strong>ব্যক্তিগত তথ্যাবলী</strong></h3>
          <hr/>
          <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-5">
                        <div class="form-group">
                            <h4 style="text-align:right;">জন্ম তারিখ: তারিখ </h4>
                            <h4 style="text-align:right;">মাস </h4>
                            <h4 style="text-align:right;">সাল </h4>
                            <h4 style="text-align:right;">রক্তের গ্রুপ </h4>
                            <h4 style="text-align:right;">ধর্ম</h4>
                            <h4 style="text-align:right;">জন্ম নিবন্ধন নাম্বার  </h4>
                            <h4 style="text-align:right;">মোবাইল নম্বর  </h4>
                            <h4 style="text-align:right;">সর্বশেষ অধ্যয়ন প্রতিষ্ঠানের নাম ও  ঠিকানা </h4>
                            <h4 style="text-align:right;">ছেড়ে আসার কারন</h4>
                         </div>
                    </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['birth_day']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['birth_month']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['birth_year']; ?></h4>

                        <?php if(!empty($result['blood_group'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['blood_group']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        
                        <?php if(!empty($result['religion'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['religion']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['birth_reg_num'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['birth_reg_num']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['last_Orga_phone'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['last_Orga_phone']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['last_study_orga'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['last_study_orga']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>
                        <br>
                        <?php if(!empty($result['why_left'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['why_left']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        
                    </div>
                </div>
                </div>
            </div>


        </div>

        <hr>

        <h3 style="text-align: center;padding-right:50px" ><strong>বর্তমান ঠিকানা</strong></h3>

        <hr>

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-5">
                        <div class="form-group">
                            <h4 style="text-align:right;">বাড়ির নাম </h4>
                            <h4 style="text-align:right;">বাড়ি / হোল্ডিং নাম্বার </h4>
                            <h4 style="text-align:right;">রোড নাম্বার</h4>
                            <h4 style="text-align:right;">গ্রাম / পাড়া / মহল্লার নাম</h4>
                            <h4 style="text-align:right;">ডাকঘর </h4>
                            <h4 style="text-align:right;">ইউনিয়ন / পৌরসভার নাম</h4>
                            <h4 style="text-align:right;">উপজেলা / থানার নাম</h4>
                            <h4 style="text-align:right;">জেলার নাম</h4>
                            <h4 style="text-align:right;">পোষ্ট কোড নাম্বার</h4>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <?php if(!empty($result['home_name'])){   ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['home_name']; ?></h4>
                             <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['hoding_number'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['hoding_number']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['road_number'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['road_number']; ?></h4>
                              <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['village_name'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['village_name']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['postoffice'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['postoffice']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['unione_name'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['unione_name']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>


                            <?php if(!empty($result['thana_name'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['thana_name']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['district_name'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['district_name']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['postcode'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['postcode']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        </div>
                    </div>
                </div>
            </div>


        </div>

        <hr>

        <h3 style="text-align: center;padding-right:50px" ><strong>স্থায়ী ঠিকানা</strong></h3>

        <hr>

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-5">
                        <div class="form-group">
                            <h4 style="text-align:right;">বাড়ির নাম </h4>
                            <h4 style="text-align:right;">বাড়ি / হোল্ডিং নাম্বার </h4>
                            <h4 style="text-align:right;">রোড নাম্বার</h4>
                            <h4 style="text-align:right;">গ্রাম / পাড়া / মহল্লার নাম</h4>
                            <h4 style="text-align:right;">ডাকঘর </h4>
                            <h4 style="text-align:right;">ইউনিয়ন / পৌরসভার নাম</h4>
                            <h4 style="text-align:right;">উপজেলা / থানার নাম</h4>
                            <h4 style="text-align:right;">জেলার নাম</h4>
                            <h4 style="text-align:right;">পোষ্ট কোড নাম্বার</h4>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">

                        <?php if(!empty($result['lasting_home_name'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_home_name']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lasting_holding_number'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_holding_number']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lasting_road_number'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_road_number']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lasting_village'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_village']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lasting_postoffice'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_postoffice']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lasting_unione'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_unione']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lasting_thana'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_thana']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lasting_district'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_district']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lasting_postcode'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_postcode']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <hr>

       <h3 style="text-align: center;padding-right:50px" ><strong>পারিবারিক তথ্যাবলী</strong></h3>

       <hr>

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-5">
                        <div class="form-group">
                            <h4 style="text-align:right;">পিতার নাম </h4>
                            <h4 style="text-align:right;">পেশা</h4>
                            <h4 style="text-align:right;">মাসিক আয়</h4>
                            <h4 style="text-align:right;">শিক্ষাগত যোগ্যতা</h4>
                            <h4 style="text-align:right;">ফোন নাম্বার</h4>
                            <h4 style="text-align:right;">ইমেইল</h4>
                            <h4 style="text-align:right;">জাতীয় পরিচয় পত্র</h4>
                            <h4 style="text-align:right;">মাতার নাম</h4>
                            <h4 style="text-align:right;">পেশা</h4>
                            <h4 style="text-align:right;">মাসিক আয়</h4>
                            <h4 style="text-align:right;">শিক্ষাগত যোগ্যতা</h4>
                            <h4 style="text-align:right;">ফোন নাম্বার</h4>
                            <h4 style="text-align:right;">ইমেইল</h4>
                            <h4 style="text-align:right;">জাতীয় পরিচয় পত্র</h4>

                           
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['father_name']; ?></h4>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['father_occupation']; ?></h4>

                            <?php if(!empty($result['fa_monthly_income'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['fa_monthly_income']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['fa_edu_quali'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['fa_edu_quali']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['father_phone'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['father_phone']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['father_email'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['father_email']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['father_national_id'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['father_national_id']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>


                          
                            
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['mother_name']; ?></h4>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['mother_occupation']; ?></h4>

                            <?php if(!empty($result['mo_monthly_income'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['mo_monthly_income']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['mo_edu_quali'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['mo_edu_quali']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['mother_phone'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['mother_phone']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['mother_email'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['mother_email']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['mo_national_id'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['mo_national_id']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        
        <hr>

        <h4 style="text-align: center;padding-right:50px" ><strong>  পিতা / মাতার অবর্তমানে স্থানীয় অভিভাবক   </strong><h4>

        <hr>

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-5">
                        <div class="form-group">
                           
                            <h4 style="text-align:right;">পিতা / মাতার অবর্তমানে স্থানীয় অভিভাবকের নাম</h4>
                            <h4 style="text-align:right;">পেশা</h4>
                            <h4 style="text-align:right;">সম্পর্ক</h4>
                            <h4 style="text-align:right;">শিক্ষাগত যোগ্যতা</h4>
                            <h4 style="text-align:right;">ফোন নাম্বার</h4>
                            <h4 style="text-align:right;">ইমেইল</h4>
                            <h4 style="text-align:right;">জাতীয় পরিচয় পত্র / পাসপোর্ট / ড্রাইভিং লাইসেন্সের নাম্বার</h4>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                           
                           <?php if(!empty($result['local_gurdian'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['local_gurdian']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br><br>"; ?></h4> <?php } ?>

                           <?php if(!empty($result['local_occupation'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['local_occupation']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                           <?php if(!empty($result['relation'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['relation']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                           <?php if(!empty($result['local_edu'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['local_edu']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                           <?php if(!empty($result['local_phone'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['local_phone']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>


                           <?php if(!empty($result['local_email'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['local_email']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                           <?php if(!empty($result['local_national_id'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['local_national_id']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                             
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <hr>
        <hr>


<?php  include '../includes/footer.php' ?>