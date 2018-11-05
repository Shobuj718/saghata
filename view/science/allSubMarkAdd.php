<?php include_once '../../includes/header.php'; ?>



<div class="col-md-12">

  <div class="row">
    <div class="content">
        <!-- <form action="view/admin/marksheet/allSubMarkStore.php" method="post"> -->
        <form action="view/admin/ninetenmarksheet/science/allSubMarinsert.php" method="post">

        <!-- <div class="form-inline">
            <div class="form-group col-lg-12">
                 -->
                 <br />
                <h3 style="font-size: 20px; text-align: center; color: green;">শিক্ষার্থীদের নম্বর যোগ  ( বিজ্ঞান - নবম থেকে দশম )</h3>
                <br />
                <?php
            if(isset($_SESSION['science'])){
                echo "<div class='alert alert-success'>".$_SESSION['science']."</div>";
                unset($_SESSION['science']);
            }
            if(isset($_SESSION['nineten'])){
                echo "<div class='alert alert-danger'>".$_SESSION['nineten']."</div>";
                unset($_SESSION['nineten']);
            }
             


            ?>
   
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শ্রেণী:</strong>
                        <select class="form-control" name="class" required>
                            <option>সিলেক্ট করুন</option>
                            
                            <option>নবম</option>
                            <option selected>১০ম</option>
                            
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
                            <option>সিলেক্ট করুন</option>
                            <option selected="">ক</option>
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
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>বিভাগ:</strong>
                        <select class="form-control" name="department" required>

                            <option selected="">বিজ্ঞান</option>
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>পরীক্ষা :</strong>
                        <select class="form-control" name="term" required>
                            <option>মধ্যবর্তি</option>
                            <option>বার্ষিক</option>
                            <option selected>নির্বাচনী</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">                        
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর আইডি নম্বর :</label>
                        <input type="text" name="student_id" class="form-control" placeholder="Enter id..." id="" required="">
                        <!-- <input type="text" name="birth_reg_num" class="form-control" placeholder="Enter birth reg:  number..." required id=""> -->
                    </div>

                </div>
            </div>  

            <h3 style="text-align:center;color:green;">সকল বিষয় </h3>



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
                        <input type="text" name="enfullmark" pattern="^[0-9]+" value="100"  placeholder="Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="e1w" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number..." id="" required="">
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
                        <input type="text" name="e2fullmark" pattern="^[0-9]+" value="100"  placeholder=" Ex: 100, Full marks this subject...  " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="e2w" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number..." id="" required="">
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
                        <label for="">বিষয় : বাংলা ১ম পত্র(১০১)</label>
                        <select class="form-control" name="bangla1" required>
                            <option selected="">বাংলা ১ম পত্র</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ নম্বর :</label>
                        <input type="text" name="fullmark" pattern="^[0-9]+" value="100"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="b1m" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ..." id="" required="">
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  লিখিত  নম্বর: </label>
                        <input type="text" name="b1w" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number..." id="" required="">
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
                        <input type="text" name="b2fullmark" pattern="^[0-9]+" value="100"  placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="b2m" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ..." id="" required="">
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">  প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="b2w" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number..." id="" required="">
                    </div>
                </div>
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
                        <input type="text" name="mfullmark" pattern="^[0-9]+" value="100"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ: </label>
                        <input type="text" name="mm" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ Number..." id="" required="">
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="mw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number..." id="" required="">
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
                        <label for=""> বিষয় : উচ্চতর গণিত(১২৬)</label>
                        <select class="form-control" name="hmath" required="">
                            <option selected="">উচ্চতর গণিত</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="hfullmark" pattern="^[0-9]+" value="100" placeholder="Ex: 100, Full marks this subject..." class="form-control" id="" >
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত এম সি কিউ:</label>
                        <input type="text" name="hmm" pattern="^[0-9]+" placeholder="Enter Written Number..." class="form-control" id="" required="">
                    </div>
                </div>
				
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত লিখিত নম্বর:</label>
                        <input type="text" name="hmw" pattern="^[0-9]+" placeholder="Enter Written Number..." class="form-control" id="" required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="hmp" pattern="^[0-9]+"  class="form-control" placeholder="Enter Practical..." id="" required="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> বিষয় : পদার্থবিজ্ঞান(১৩৬ )  </label>
                        <select class="form-control" name="physics" required="">
                            <option selected="">পদার্থবিজ্ঞান</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="pfullmark" pattern="^[0-9]+" value="100" placeholder="Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="pm" pattern="^[0-9]+" class="form-control" placeholder="Enter MCQ...." id="" required="">
                    </div>
                </div>
				
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="pw" pattern="^[0-9]+" placeholder="Enter Written Number..." class="form-control" id="" required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="pp" pattern="^[0-9]+" class="form-control" placeholder="Enter Practical Number..." id="" required="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> বিষয় : রসায়ন(১৩৭)   </label>
                        <select class="form-control" name="chemistry" required="">
                            <option selected="">রসায়ন </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="cfullmark" pattern="^[0-9]+" value="100" placeholder="Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="cm" pattern="^[0-9]+" class="form-control" placeholder="Enter MCQ..." id="" required="">
                    </div>
                </div>
				
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="cw" pattern="^[0-9]+" placeholder="Enter Written Number..." class="form-control" id="" required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="cp" pattern="^[0-9]+" class="form-control" placeholder="Enter Practical Number..." id="" required="">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> বিষয় : জীববিজ্ঞান(১৩৮)    </label>
                        <select class="form-control" name="biology" required="">
                            <option selected="">জীববিজ্ঞান  </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="bfullmark" pattern="^[0-9]+" value="100" placeholder="Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="bm" pattern="^[0-9]+" class="form-control" placeholder="Enter MCQ..." id="" required="">
                    </div>
                </div>
				
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="bw" pattern="^[0-9]+" placeholder="Enter Written Number..." class="form-control" id="" required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="bp" pattern="^[0-9]+" class="form-control" placeholder="Enter Practical Number..." id="" required="">
                    </div>
                </div>
            </div>

            



           

            

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : কৃষি শিক্ষা(১৩৪)</label>
                        <select class="form-control" name="agriculture" required>
                        
                            <option selected="">কৃষি শিক্ষা</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="agfullmark" pattern="^[0-9]+" value="100"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="agm" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ..." id="" required="">
                    </div>
                </div>
				
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="agw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number..." id="" required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="agp" pattern="^[0-9]+"  class="form-control" placeholder="Enter Practical..." id="" required="">
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
                        <input type="text" name="ictfullmark" pattern="^[0-9]+" value="50"  placeholder=" Ex: 50, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="im" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ..." id="" required="">
                    </div>
                </div>
				
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="iw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number..." id="" required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত প্রাকটিক্যাল নম্বর :</label>
                        <input type="text" name="ip" pattern="^[0-9]+"  class="form-control" placeholder="Enter Practical..." id="" required="">
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলাদেশ ও বিশ্ব পরিচয়(১৫০)</label>
                        <select class="form-control" name="banint" required>
                        
                            <option selected="">বাংলাদেশ ও বিশ্ব পরিচয়</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="bifullmark" pattern="^[0-9]+" value="100"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="bim" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ..." id="" required="">
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="biw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number..." id="" required="">
                    </div>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">বিষয় : ধর্ম ও নৈতিক শিক্ষা</label>
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
                        <input type="text" name="refullmark" pattern="^[0-9]+" value="100" placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত এম সি কিউ :</label>
                        <input type="text" name="rm" pattern="^[0-9]+"  class="form-control" placeholder="Enter MCQ..." id="" required="">
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত লিখিত নম্বর: </label>
                        <input type="text" name="rw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number..." id="" required="">
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






<?php  include '../../includes/footer.php' ?>
