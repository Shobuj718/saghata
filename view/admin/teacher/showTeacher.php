<?php include_once '../includes/header.php'; ?>




    <!--       main form start here-->


<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 16-Nov-17
 * Time: 12:17 PM
 */
error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=kghs;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$id = $_GET['show'];
//                echo $id;
//                var_dump($id);
//                die();
$stm =  $db->prepare("SELECT * FROM `teacher_data` WHERE unique_id = :id");
$stm->bindValue(':id', $id, PDO::PARAM_STR);
$stm->execute();
$result = $stm->fetch(PDO::FETCH_ASSOC);
//use $results

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
        <h2 style="text-align: center;padding-right:50px" ><strong>শিক্ষকের তথ্যাবলী</strong></h2>

        <!-- <h3 style="text-align: center; padding-right:50px">শিক্ষকের  ছবি</h3> -->
        <h3 style="text-align: center; padding-right:30px">   <br /><?php echo $result['teacher_name']?></h3>
        <div style="text-align: center; padding-right:50px" class="form-group">
            <img style="border-radius:50%" src="view/admin/uploads/teacher/<?php echo $result['image']?>" class="img-rounded" width="180" height="180" alt="no image">

        </div>

      <hr>
      
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-5">
                        <div class="form-group">
                            <h4  style="text-align:right;">শিক্ষকের নাম </h4>
                            <h4  style="text-align:right;">প্রতিষ্ঠানে পদবী </h4>
                            <h4  style="text-align:right;">কাজ</h4>
                            <h4  style="text-align:right;">শিক্ষাগত যোগ্যতা</h4>
                            <h4  style="text-align:right;">ট্রেনিং</h4>
                            <h4  style="text-align:right;">যোগদানের তারিখ</h4>
                            <h4  style="text-align:right;">অবসরের তারিখ</h4>
                            <h4  style="text-align:right;">ইনডেক্স নাম্বার</h4>
                            <h4  style="text-align:right;">এমপিও ভূক্তির তারিখ</h4>
                        </div>
                    </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['teacher_name']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['designation']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['what_work']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['eduquali']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['training']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['join_date']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['retire_date']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['index_number']; ?></h4>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['mpo_date']; ?></h4>
                    </div>
                </div>
                    
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
                            <h4  style="text-align:right;">জন্ম তারিখ </h4>
                            <h4  style="text-align:right;">রক্তের গ্রুপ </h4>
                            <h4  style="text-align:right;">ধর্ম</h4>
                            <h4  style="text-align:right;">ইমেইল</h4>
                            <h4  style="text-align:right;">মোবাইল নম্বর </h4>
                            <h4  style="text-align:right;">জাতীয় পরিচয় পত্র </h4>
                            <h4  style="text-align:right;">সর্বশেষ সার্ভিস প্রতিষ্ঠানের নাম</h4>
                            <h4  style="text-align:right;">ছেড়ে আসার কারন</h4>
                            <h4  style="text-align:right;">প্রতিষ্ঠানের ঠিকানা (ফোন নাম্বার সহ)</h4>
                         </div>
                    </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['birth_date']; ?></h4>

                        <?php if(!empty($result['blood'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['blood']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['religion']; ?></h4>

                        <?php if(!empty($result['email'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['email']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        
                        <?php if(!empty($result['mobile'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['mobile']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['nid'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['nid']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lastorga'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lastorga']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['whyleft'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['whyleft']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>
                        <?php if(!empty($result['orgaarea'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['orgaarea']; ?></h4>
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
                            <?php if(!empty($result['homeName'])){   ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['homeName']; ?></h4>
                             <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['holdingNum'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['holdingNum']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['roadName'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['roadName']; ?></h4>
                              <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['village'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['village']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['postoffice'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['postoffice']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['unione'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['unione']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>


                            <?php if(!empty($result['thana'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['thana']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['district'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['district']; ?></h4>
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

                        <?php if(!empty($result['lasting_homeName'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_homeName']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['holdingNum'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['holdingNum']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lasting_roadName'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_roadName']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['lasting_village'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['lasting_village']; ?></h4>
                        <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        <?php if(!empty($result['postoffice'])){ ?>
                        <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['postoffice']; ?></h4>
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
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['fa_occupation']; ?></h4>

                            <?php if(!empty($result['fa_monthly_income'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['fa_monthly_income']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['fa_edu_quli'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['fa_edu_quli']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['fa_phone'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['fa_phone']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['fa_email'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['fa_email']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['fa_nid'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['fa_nid']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>


                          
                            
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['mother_name']; ?></h4>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['ma_occupation']; ?></h4>

                            <?php if(!empty($result['ma_monthly_income'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['ma_monthly_income']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['ma_edu_quli'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['ma_edu_quli']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['ma_phone'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['ma_phone']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['ma_email'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['ma_email']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                            <?php if(!empty($result['ma_nid'])){ ?>
                            <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['ma_nid']; ?></h4>
                            <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        
        <hr>

        <h4 style="text-align: center;padding-right:50px" ><strong>  বিবাহিতদের ক্ষেত্রে স্বামী/স্ত্রী'র নাম   </strong><h4>

        <hr>

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="col-md-5">
                        <div class="form-group">
                           
                            <h4 style="text-align:right;">বিবাহিতদের ক্ষেত্রে স্বামী/স্ত্রী'র নাম</h4>
                            <h4 style="text-align:right;">পেশা</h4>
                            <h4 style="text-align:right;">বিবাহের তারিখ</h4>
                            <h4 style="text-align:right;">শিক্ষাগত যোগ্যতা</h4>
                            <h4 style="text-align:right;">মোবাইল নাম্বার</h4>
                            <h4 style="text-align:right;">ইমেইল</h4>
                            <h4 style="text-align:right;">ছেলে ও মেয়ে কতজন এবং কে কি করে লিখুন </h4>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                           
                           <?php if(!empty($result['marriage_person'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['marriage_person']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br><br>"; ?></h4> <?php } ?>

                           <?php if(!empty($result['marriage_occu'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['marriage_occu']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                           <?php if(!empty($result['marriage_date'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['marriage_date']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                           <?php if(!empty($result['marriage_edu_quali'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['marriage_edu_quali']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                           <?php if(!empty($result['marriage_mobile'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['marriage_mobile']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>


                           <?php if(!empty($result['marriage_email'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['marriage_email']; ?></h4>
                           <?php  } else{?> <h4>:<?php echo "<br>"; ?></h4> <?php } ?>

                           <?php if(!empty($result['children'])){ ?>
                           <h4>: &nbsp;&nbsp;&nbsp;&nbsp; <?= $result['children']; ?></h4>
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