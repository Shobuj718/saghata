<?php include_once '../includes/header.php'; ?>



<div class="col-md-12">

  <div class="row">
    <div class="content">
        <!-- <form action="view/admin/marksheet/allSubMarkStore.php" method="post"> -->
        <form action="view/admin/marksheet/allSubMarinsert.php" method="post">

        <!-- <div class="form-inline">
            <div class="form-group col-lg-12">
                 -->
                 <br />
                <h3 style="font-size: 20px; text-align: center; color: green;">শিক্ষার্থীদের নম্বর যোগ (৬ষ্ঠ থেকে অষ্টম)</h3>
                <br />
                <?php
            if(isset($_SESSION['msg'])){
                echo "<div class='alert alert-success'>".$_SESSION['msg']."</div>";
                unset($_SESSION['msg']);
            }
            if(isset($_SESSION['error'])){
                echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                unset($_SESSION['error']);
            }
             


            ?>
   
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শ্রেণী:</strong>
                        <select class="form-control" name="class" required>                         
                            <option>৬ষ্ঠ</option>
                            <option>৭ম</option>
                            <option>৮ম</option>
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শিফট:</strong>
                        <select class="form-control" name="shift" required>
                            <option>সিলেক্ট করুন</option>
                            <option>প্রভাতী</option>
                            <option selected="">দিবা</option>
                            <option>সান্ধ্যকালীন</option>
                            <option>রাত্রিকালীন</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শাখা:</strong>
                        <select class="form-control" name="branch" required>
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
            </div>
                
            <div class="row">
                <!-- <div class="col-md-4">
                    <div class="form-group">
                        <strong>বিভাগ:</strong>
                        <select class="form-control" name="department" required="" >
                            <option>সিলেক্ট করুন</option>
                            <option selected="">জেনারেল</option>
                            <option>বিজ্ঞান</option>
                            <option>মানবিক</option>
                            <option>বানিজ্য  </option>
                        </select>
                    </div>
                </div> -->
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>পরীক্ষা :</strong>
                        <select class="form-control" name="term" required>
                            <option>মধ্যবর্তি</option>
                            <option>বার্ষিক</option>
                            <option>নির্বাচনী</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">                        
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর আইডি নম্বর :</label>
                        <input type="text" name="student_id" class="form-control" placeholder="Enter id..." id="" >
                        <!-- <input type="text" name="birth_reg_num" class="form-control" placeholder="Enter birth reg:  number..." required id=""> -->
                    </div>

                </div>
            </div>  

            <h3 style="text-align:center;color:green;">সকল বিষয় </h3>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলা ১ম পত্র(১০১)</label>
                        <select class="form-control" name="bangla1" required>
                            <option selected="">বাংলা ১ম পত্র</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ নম্বর :</label>
                        <input type="text" name="fullmark" value="100" pattern="^[0-9]+"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  লিখিত  নম্বর: </label>
                        <input type="text" name="b1w" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number" id="" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="b1m" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ.." id="" required="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলা ২য় পত্র(১০২)</label>
                        <select class="form-control" name="bangla2" required>

                            <option selected="">বাংলা ২য় পত্র</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="b2fullmark" value="50" pattern="^[0-9]+"  placeholder=" Ex: 50, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">  প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="b2w" pattern="^[0-9]+"   class="form-control" placeholder="Enter Written Number..." id="" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="b2m" pattern="^[0-9]+"   class="form-control" placeholder="Enter MCQ.." id="" required="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : ইংরেজী ১ম পত্র(১০৭)</label>
                        <select class="form-control" name="english1" required>
                             <option selected="">ইংরেজী ১ম পত্র</option>                  
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="enfullmark" value="100" pattern="^[0-9]+"  placeholder="Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="e1w" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="" required="">
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
                        <label for="">বিষয় : ইংরেজী ২য় পত্র(১০৮)</label>
                        <select class="form-control" name="english2" required>
                          <option selected="">ইংরেজী ২য় পত্র</option>                    
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="e2fullmark" value="50" pattern="^[0-9]+"  placeholder=" Ex: 50, Full marks this subject...  " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="e2w" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="" required="">
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
                        <label for="">বিষয় : গণিত(১০৯)</label>
                        <select class="form-control" name="math" required>
                          
                            <option selected="">গণিত</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="mfullmark" value="100" pattern="^[0-9]+"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="mw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="" required="" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  এম সি কিউ : </label>
                        <input type="text" name="mm" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="" required="" required="">
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
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বিজ্ঞান (১৫০)</label>
                        <select class="form-control" name="science" required>
                        
                            <option selected="">বিজ্ঞান</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="sfullmark" value="100" pattern="^[0-9]+"  placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="sw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="sm" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ.." id="" required="">
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
                        <input type="text" name="agw" pattern="^[0-9]+"    class="form-control" placeholder="Enter Written Number.." id="" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="agm" pattern="^[0-9]+"    class="form-control" placeholder="Enter MCQ.." id="" required="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলাদেশ ও বিশ্ব পরিচয় (১৫০)</label>
                        <select class="form-control" name="banint" required>
                        
                            <option selected="">বাংলাদেশ ও বিশ্ব পরিচয়</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="bifullmark" value="100" pattern="^[0-9]+"  placeholder=" Ex: 50, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="biw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="bim" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ.." id="" required="">
                    </div>
                </div>
            </div>

            

            


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : ধর্ম ও নৈতিক শিক্ষা (১১১)</label>
                        <select class="form-control" name="religion" required>
                        
                            <option>ইসলাম  ও নৈতিক শিক্ষা</option>
                            <option>হিন্দুধর্ম   ও নৈতিক শিক্ষা</option>
                            <option>খৃষ্টধর্ম   ও নৈতিক শিক্ষা</option>
                            <option>বৌদ্ধধর্ম   ও নৈতিক শিক্ষা</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="refullmark" value="100" pattern="^[0-9]+"  placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="rw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="rm" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ.." id="" required="">
                    </div>
                </div>
            </div>

            
            


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : তথ্য ও যোগাযোগ প্রযুক্তি(১৫৪)</label>
                        <select class="form-control" name="ict" required>
                        
                            <option selected="">তথ্য ও যোগাযোগ প্রযুক্তি</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="ictfullmark" value="50" pattern="^[0-9]+"  placeholder=" Ex: 50, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="iw" pattern="^[0-9]+"  value="0"  class="form-control" placeholder="Enter Written Number.." id="" required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="im" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ.." id="" required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="ip" pattern="^[0-9]+"  class="form-control" placeholder="Enter Practical.." id="" required="">
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
