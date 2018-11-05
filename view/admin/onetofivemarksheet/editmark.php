<?php 

    include_once '../includes/header.php'; 
    include_once '../../../vendor/autoload.php';

    use App\Admin\Onetofive\Onetofive;


//use App\Admin\Marksheet\Allmarkstore();
// $class = $_POST['class'];
//     $term  = $_POST['term'];
//     $year  = $_POST['year'];
//     $student_id = $_POST['student_id'];
// $marksheet = new App\Admin\Marksheet\Allmarkstore();
// $result = $marksheet->selectOneToFive($class, $term, $year, $student_id);
    

//     echo $results['gpa'];
//     echo "<pre>";
//     var_dump($result);
//     die();
    
    $class = $_POST['class'];
    $term  = $_POST['term'];
    $year  = $_POST['year'];
    $student_id = $_POST['student_id'];

    $onetofive = new Onetofive();
    $result = $onetofive->selectOneToFive($class, $term, $year, $student_id);

    // echo $result['gpa'];
    // echo "<pre>";
    // var_dump($result);
    // die();
    

  ?>

<div class="col-md-12">

  <div class="row">
    <div class="content">
        <!-- <form action="view/admin/marksheet/allSubMarkStore.php" method="post"> -->
        <form action="view/admin/onetofivemarksheet/updatemark.php" method="post">

        <!-- <div class="form-inline">
            <div class="form-group col-lg-12">
                 -->
                 <br />
                <h3 style="font-size: 20px; text-align: center; color: green;">প্লে  থেকে ৫ম শ্রেণীর শিক্ষার্থীদের মার্কশীট  সংশোধন  করুন</h3>
                <br />
                <?php
            // if(isset($_SESSION['onetofive'])){
            //     echo "<div class='alert alert-success'>".$_SESSION['onetofive']."</div>";
            //     //session_unset();
            // }
            // if(isset($_SESSION['onetofiveerr'])){
            //     echo "<div class='alert alert-danger'>".$_SESSION['onetofiveerr']."</div>";
            //     //session_unset();
            // }
             


            ?>
   
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শ্রেণী:</strong>
                        <select class="form-control" name="class" required>
                            <option>সিলেক্ট করুন</option>
                            <option <?= ($result['class'] == 'প্লে')?'selected':'' ?> >প্লে</option>
                            <option <?= ($result['class'] == 'নার্সারি')?'selected':'' ?> >নার্সারি </option>
                            <option <?= ($result['class'] == 'কে জি')?'selected':'' ?> >কে জি</option>
                            <option <?= ($result['class'] == '১ম')?'selected':'' ?> >১ম</option>
                            <option <?= ($result['class'] == '২য়')?'selected':'' ?> >২য়</option>
                            <option <?= ($result['class'] == '৩য়')?'selected':'' ?> >৩য়</option>
                            <option <?= ($result['class'] == '৪র্থ')?'selected':'' ?> > ৪র্থ</option>
                            <option <?= ($result['class'] == '৫ম')?'selected':'' ?> >৫ম</option>
                            
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
                            
                        </select>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>পরীক্ষা :</strong>
                        <select class="form-control" name="term" required>
                            <option <?php echo ($result['term'] == 'মধ্যবর্তি')?'selected':'' ?> >মধ্যবর্তি   </option>
                            <option <?php echo ($result['term'] == 'বার্ষিক')?'selected':'' ?> >বার্ষিক </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">                        
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর আইডি নম্বর :</label>
                        <input type="text" name="student_id" value="<?php echo $result['student_id']; ?>"   class="form-control" placeholder="Enter id..." id="" required="">
                        <input type="hidden" name="unique_id" value="<?php echo $result['unique_id']; ?>"   class="form-control"  id="" required="">
                    </div>

                </div>
            </div>  

            <h3 style="text-align:center;color:green;">সকল বিষয় </h3>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলা </label>
                        <select class="form-control" name="bangla" value="<?php echo $result['bangla']; ?>" required>
                            <option selected="">বাংলা </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ নম্বর :</label>
                        <input type="text" name="fullmark" value="<?php echo $result['fullmark']; ?>"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত   নম্বর: </label>
                        <input type="text" name="bw" value="<?php echo $result['bw']; ?>"  class="form-control" placeholder="Enter Written Number" id="">
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="b1m" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div> -->
            </div>

            


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">বিষয় : ইংরেজী </label>
                        <select class="form-control" name="english" value="<?php echo $result['english']; ?>" required>
                             <option selected="">ইংরেজী </option>                  
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="enfullmark" value="<?php echo $result['enfullmark']; ?>"  placeholder="Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="ew" value="<?php echo $result['ew']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
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
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">বিষয় : গণিত</label>
                        <select class="form-control" name="math" value="<?php echo $result['math']; ?>" required>
                          
                            <option selected="">গণিত</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="mfullmark" value="<?php echo $result['mfullmark']; ?>" placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="mw" value="<?php echo $result['mw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-group">
                        <label for="">এম সি কিউ :</label>
                        <input type="text" name="mg" class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div> -->
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলাদেশ ও বিশ্ব পরিচয়</label>
                        <select class="form-control" name="banint" value="<?php echo $result['banint']; ?>" required>
                        
                            <option selected="">বাংলাদেশ ও বিশ্ব পরিচয়</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="bifullmark" value="<?php echo $result['bifullmark']; ?>"  placeholder=" Ex: 50, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত নম্বর: </label>
                        <input type="text" name="biw" value="<?php echo $result['biw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="bim" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div> -->
            </div>

            

            

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">বিষয় : প্রাথমিক বিজ্ঞান</label>
                        <select class="form-control" name="science" value="<?php echo $result['science']; ?>" required>
                        
                            <option selected="">প্রাথমিক বিজ্ঞান</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="sfullmark" value="<?php echo $result['sfullmark']; ?>"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="sw" value="<?php echo $result['sw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="ssm" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div> -->
            </div>

            

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">বিষয় : ধর্ম ও নৈতিক শিক্ষা</label>
                        <select class="form-control" name="religion" value="<?php echo $result['religion']; ?>" required>
                        
                            <option selected="">ধর্ম ও নৈতিক শিক্ষা</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="refullmark" value="<?php echo $result['refullmark']; ?>"  placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="rw" value="<?php echo $result['rw']; ?>"  class="form-control" placeholder="Enter Written Number.." id="">
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="rm" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ.." id="">
                    </div>
                </div> -->
            </div>
             
             
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>  
             
  </div>

</div>






<?php  include '../includes/footer.php' ?>
