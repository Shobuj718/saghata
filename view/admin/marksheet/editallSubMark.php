<?php include_once '../includes/header.php'; ?>

<?php 

    include_once '../../../vendor/autoload.php' ;

    use App\Admin\Marksheet\Allmarkstore;
    $marksheet = new Allmarkstore();

    $class = $_POST['class'];
    $term  = $_POST['term'];
    $year  = $_POST['year'];
    $student_id = $_POST['student_id'];

    $result = $marksheet->editStuMark($class, $term ,  $year,  $student_id);

    // echo "<pre>";
    // var_dump($result);
    //die();


 ?>



<div class="col-md-12">

  <div class="row">
    <div class="content">
        <form action="view/admin/marksheet/test2.php" method="post">
        <!-- <form action="view/admin/marksheet/allSubMarkupdate.php" method="post">
 -->
        <!-- <div class="form-inline">
            <div class="form-group col-lg-12">
                 -->
                 <br />
                <h3 style="font-size: 20px; text-align: center; color: green;">শিক্ষার্থীদের নম্বর সংশোধন </h3>
                <br />
                
        <?php
            if(isset($_SESSION['msg2'])){
                echo "<div class='alert alert-success'>".$_SESSION['msg2']."</div>";
                //session_unset();
            }
            if(isset($_SESSION['error'])){
                echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                //session_unset();
            }
             


        ?>
   
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শ্রেণী:</strong>
                        <select class="form-control" name="class" required>
                            <option>সিলেক্ট করুন</option>
                            <option <?php echo ($result['class'] == '৬ষ্ঠ')?'selected':'' ?> >৬ষ্ঠ</option>
                            <option <?php echo ($result['class'] == '৭ম')?'selected':'' ?> >৭ম</option>
                            <option <?php echo ($result['class'] == '৮ম')?'selected':'' ?> >৮ম</option>
                           
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শিফট:</strong>
                        <select class="form-control" name="shift" required>
                            <option>সিলেক্ট করুন</option>
                            <option <?php echo ($result['shift'] == 'প্রভাতী')?'selected':'' ?> >প্রভাতী</option>
                            <option <?php echo ($result['shift'] == 'দিবা')?'selected':'' ?> >দিবা</option>
                            <option <?php echo ($result['shift'] == 'সান্ধ্যকালীন')?'selected':'' ?> >সান্ধ্যকালীন</option>
                            <option <?php echo ($result['shift'] == 'রাত্রিকালীন')?'selected':'' ?> >রাত্রিকালীন</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শাখা:</strong>
                        <select class="form-control" name="branch" required>
                            <option>সিলেক্ট করুন</option>
                            <option <?php echo ($result['branch'] == 'ক')?'selected':'' ?> >ক</option>
                            <option <?php echo ($result['branch'] == 'খ')?'selected':'' ?> >খ</option>
                            <option <?php echo ($result['branch'] == 'গ')?'selected':'' ?> >গ</option>
                            <option <?php echo ($result['branch'] == 'ঘ')?'selected':'' ?> >ঘ</option>
                            <option <?php echo ($result['branch'] == 'ঙ')?'selected':'' ?> >ঙ</option>
                            <option <?php echo ($result['branch'] == 'চ')?'selected':'' ?> >চ</option>
                            <option <?php echo ($result['branch'] == 'ছ')?'selected':'' ?> >ছ</option>
                            <option <?php echo ($result['branch'] == 'জ')?'selected':'' ?> >জ</option>
                            <option <?php echo ($result['branch'] == 'ঝ')?'selected':'' ?> >ঝ</option>
                            <option <?php echo ($result['branch'] == 'ঞ')?'selected':'' ?> >ঞ</option>
                            <option <?php echo ($result['branch'] == 'ট')?'selected':'' ?> >ট</option>
                            <option <?php echo ($result['branch'] == 'ঠ')?'selected':'' ?> >ঠ</option>
                        </select>
                    </div>
                </div>
            </div>
                
            <div class="row">
            
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>পরীক্ষা :</strong>
                        <select class="form-control" name="term" required>
                            <option <?php echo ($result['term'] == 'মধ্যবর্তি')?'selected':'' ?> >মধ্যবর্তি   </option>
                            <option <?php echo ($result['term'] == 'বার্ষিক')?'selected':'' ?> >বার্ষিক </option>
                            <option <?php echo ($result['term'] == 'নির্বাচনী')?'selected':'' ?> >নির্বাচনী</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">                        
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর আইডি নম্বর :</label>
            <input type="text" name="student_id" value="<?php echo $result['student_id']; ?>"   class="form-control" placeholder="Enter id..." id="" required="">
            <input type="hidden" name="unique_id" value="<?php echo $result['unique_id']; ?>"   class="form-control"  id="" required="">
                    </div>

                </div>
            </div>  

            <h3 style="text-align:center;color:green;">সকল বিষয় </h3>

            <?php echo "<hr>"; ?>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলা ১ম পত্র</label>
                        <select class="form-control" name="bangla1" value="<?php echo $result['bangla1']; ?>" required>
                            <option selected="">বাংলা ১ম পত্র</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ নম্বর :</label>
                        <input type="text" name="fullmark" value="<?php echo $result['fullmark']; ?>"    placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  লিখিত  নম্বর: </label>
                        <input type="text" name="b1w" value="<?php echo $result['b1w']; ?>"    class="form-control" placeholder="Enter Written Number" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="b1m" value="<?php echo $result['b1m']; ?>"   class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলা ২য় পত্র</label>
                        <select class="form-control" name="bangla2"  value="<?php echo $result['bangla2']; ?>"  required>

                            <option selected="">বাংলা ২য় পত্র</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="b2fullmark" value="<?= $result['b2fullmark']; ?>"    placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">  প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="b2w" value="<?= $result['b2w']; ?>"    class="form-control" placeholder="Enter Written Number..." id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="b2m" value="<?= $result['b2m']; ?>"    class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : ইংরেজী ১ম পত্র</label>
                        <select class="form-control" name="english1" value="<?= $result['english1']; ?>" required>
                             <option selected="">ইংরেজী ১ম পত্র</option>                  
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="enfullmark" value="<?= $result['enfullmark']; ?>"    placeholder="Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="e1w" value="<?= $result['e1w']; ?>"    class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-group">
                        <label for="">এম সি কিউ :</label>
                        <input type="text" name="e1g" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div> -->
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : ইংরেজী ২য় পত্র</label>
                        <select class="form-control" name="english2" value="<?= $result['english2']; ?>" required>
                          <option selected="">ইংরেজী ২য় পত্র</option>                    
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="e2fullmark" value="<?= $result['e2fullmark']; ?>"    placeholder=" Ex: 100, Full marks this subject...  " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="e2w" value="<?= $result['e2w']; ?>"    class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-group">
                        <label for="">এম সি কিউ :</label>
                        <input type="text" name="e2m" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div> -->
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : গণিত</label>
                        <select class="form-control" name="math" value="<?= $result['math']; ?>" required>
                          
                            <option selected="">গণিত</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="mfullmark" value="<?= $result['mfullmark']; ?>"    placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="mw" value="<?= $result['mw']; ?>"    class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  এম সি কিউ : </label>
                        <input type="text" name="mm" value="<?= $result['mm']; ?>" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="" required="" required="">
                    </div>
                </div>
            </div>

              <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বিজ্ঞান</label>
                        <select class="form-control" name="science" value="<?= $result['science']; ?>" required>
                        
                            <option selected="">বিজ্ঞান</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="sfullmark" value="<?= $result['sfullmark']; ?>"  placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="sw" value="<?= $result['sw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="sm" value="<?= $result['sm']; ?>"  class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
               
            </div>

              <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : কৃষি শিক্ষা (১৩৪)</label>
                        <select class="form-control" name="agriculture" required>
                        
                            <option selected="">কৃষি শিক্ষা</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="agfullmark" value="100" pattern="^[0-9]+"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="agw" value="<?= $result['agw']; ?>" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="agm" value="<?= $result['agm']; ?>" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ.." id="" required="">
                    </div>
                </div>
            </div>

            


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলাদেশ ও বিশ্ব পরিচয়</label>
                        <select class="form-control" name="banint"  value="<?= $result['banint']; ?>" required>
                        
                            <option selected="">বাংলাদেশ ও বিশ্ব পরিচয়</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="bifullmark" value="<?= $result['bifullmark']; ?>"   placeholder=" Ex: 50, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="biw" value="<?= $result['biw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="bim" value="<?= $result['bim']; ?>"    class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
            </div>

            

            

          

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : ধর্ম ও নৈতিক শিক্ষা</label>
                        <select class="form-control" name="religion" value="<?= $result['religion']; ?>" required>
                        
                            <option <?php echo ($result['religion']=='ইসলাম  ও নৈতিক শিক্ষা')?'selected':'' ?> value='ইসলাম  ও নৈতিক শিক্ষা'>ইসলাম  ও নৈতিক শিক্ষা</option>
                            <option <?php echo ($result['religion']=='হিন্দুধর্ম   ও নৈতিক শিক্ষা')?'selected':'' ?> value='হিন্দুধর্ম   ও নৈতিক শিক্ষা'>হিন্দুধর্ম   ও নৈতিক শিক্ষা</option>
                            <option <?php echo ($result['religion']=='খৃষ্টধর্ম   ও নৈতিক শিক্ষা')?'selected':'' ?> value='খৃষ্টধর্ম   ও নৈতিক শিক্ষা'>খৃষ্টধর্ম   ও নৈতিক শিক্ষা</option>
                            <option <?php echo ($result['religion']=='খৃষ্টধর্ম   ও নৈতিক শিক্ষা')?'selected':'' ?> value='খৃষ্টধর্ম   ও নৈতিক শিক্ষা'>খৃষ্টধর্ম   ও নৈতিক শিক্ষার্থীর</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="refullmark" value="<?= $result['refullmark']; ?>"    placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="rw" value="<?= $result['rw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="rm" value="<?= $result['rm']; ?>"   class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
            </div>

            
          


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : তথ্য ও যোগাযোগ প্রযুক্তি</label>
                        <select class="form-control" name="ict" value="<?= $result['ict']; ?>" required>
                        
                            <option selected="">তথ্য ও যোগাযোগ প্রযুক্তি</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="ictfullmark" value="<?= $result['ictfullmark']; ?>" placeholder=" Ex: 50, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="iw" value="<?= $result['iw']; ?>" class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="im" value="<?= $result['im']; ?>"  class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="ip" value="<?= $result['ip']; ?>"  class="form-control" placeholder="Enter Practical.." id="">
                    </div>
                </div>
            </div>

            
            
             
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>  
             
  </div>

</div>






<?php  include '../includes/footer.php' ?>
