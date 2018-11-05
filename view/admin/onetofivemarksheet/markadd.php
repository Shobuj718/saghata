<?php include_once '../includes/header.php'; ?>



<div class="col-md-12">

  <div class="row">
    <div class="content">
        <!-- <form action="view/admin/marksheet/allSubMarkStore.php" method="post"> -->
        <form action="view/admin/onetofivemarksheet/markstore.php" method="post">

        <!-- <div class="form-inline">
            <div class="form-group col-lg-12">
                 -->
                 <br />
                <h3 style="font-size: 20px; text-align: center; color: green;">প্লে থেকে ৫ম শ্রেণীর শিক্ষার্থীদের মার্কশীট এর জন্য নম্বর যোগ করুন</h3>
                <br />
                <?php
            if(isset($_SESSION['onetofive'])){
                echo "<div class='alert alert-success'>".$_SESSION['onetofive']."</div>";
                //session_unset();
            }
            if(isset($_SESSION['onetofiveerr'])){
                echo "<div class='alert alert-danger'>".$_SESSION['onetofiveerr']."</div>";
                //session_unset();
            }
             


            ?>
   
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শ্রেণী:</strong>
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
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <strong>শিফট:</strong>
                        <select class="form-control" name="shift" required>
                            <option>সিলেক্ট করুন</option>
                            <option>প্রভাতী</option>
                            <option>দিবা</option>
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
                            <option>ক</option>
                            <option>খ</option>
                            <option>গ</option>
                            <option>ঘ</option>
                            
                        </select>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>পরীক্ষা :</strong>
                        <select class="form-control" name="term" required>
                            <option>মধ্যবর্তি   </option>
                            <option>বার্ষিক </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">                        
                    <div class="form-group">
                        <label for="">শিক্ষার্থীর আইডি নম্বর :</label>
                        <input type="text" name="student_id" class="form-control" placeholder="Enter Student id..." id="" required="">
                        <!-- <input type="text" name="birth_reg_num" class="form-control" placeholder="Enter birth reg:  number..." required id=""> -->
                    </div>

                </div>
            </div>  

            <h3 style="text-align:center;color:green;">সকল বিষয় </h3>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">বিষয় : বাংলা </label>
                        <select class="form-control" name="bangla" required>
                            <option selected="">বাংলা </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ নম্বর :</label>
                        <input type="text" name="fullmark" pattern="^[0-9]+"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত   নম্বর: </label>
                        <input type="text" name="bw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number" id="">
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
                        <select class="form-control" name="english" required>
                             <option selected="">ইংরেজী </option>                  
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="enfullmark" pattern="^[0-9]+"  placeholder="Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="ew" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="">
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
                        <select class="form-control" name="math" required>
                          
                            <option selected="">গণিত</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="mfullmark" pattern="^[0-9]+"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="mw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="">
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
                        <select class="form-control" name="banint" required>
                        
                            <option selected="">বাংলাদেশ ও বিশ্ব পরিচয়</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="bifullmark" pattern="^[0-9]+"  placeholder=" Ex: 50, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত নম্বর: </label>
                        <input type="text" name="biw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="">
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
                        <select class="form-control" name="science" required>
                        
                            <option selected="">প্রাথমিক বিজ্ঞান</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার  পূর্ণ নম্বর:</label>
                        <input type="text" name="sfullmark" pattern="^[0-9]+"  placeholder=" Ex: 100, Full marks this subject... " class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="sw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="">
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
                        <select class="form-control" name="religion" required>
                        
                            <option selected="">ধর্ম ও নৈতিক শিক্ষা</option>
                         
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">পরীক্ষার পূর্ণ  নম্বর:</label>
                        <input type="text" name="refullmark" pattern="^[0-9]+"  placeholder=" Ex: 100, Full marks this subject..." class="form-control" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> প্রাপ্ত  নম্বর: </label>
                        <input type="text" name="rw" pattern="^[0-9]+"  class="form-control" placeholder="Enter Written Number.." id="">
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
