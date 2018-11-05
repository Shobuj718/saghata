
<?php include_once '../../includes/header.php'; ?>


<?php 

    include_once '../../../../vendor/autoload.php';

    use App\admin\Classmain\Classmain;

    $class = new Classmain();
    $results = $class->selectAllClass();

 ?>
<!-- <div class="lantra">  
<div id="google_translate_element"></div>

    <script type="text/javascript">

    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-59955232-1'}, 'google_translate_element');
    }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
</diV>  -->


    <section class="content"> 
            
             
                <h3 style="text-align:center;color:green;">বেতন ও  অন্যান্য ফি আদায়ের রশিদ  </h3>

                <br />
                <?php 

                    if(isset($_SESSION['fee'])){
                        echo "<div class='alert alert-success'>".$_SESSION['fee']."</div>";
                    }

                 ?>
                <form action="view/admin/calculation/student/calculate.php" method="post">
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">শ্রেণী:</label>
                                <select class="form-control" name="class" required="">
                                    <option>Select</option>
                                <?php 
                                    foreach($results as $result){
                                        echo "<option>".$result['class']."</option>";
                                    }
                                 ?>
                                     
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">শিক্ষার্থীর আইডি:</label>
                                <input type="text" name="student_id" class="form-control" id=""  placeholder="Student ID..." required="">
                            </div>
                        </div>

                        <div class="col-md-4">
                             <!-- Date -->
                              <div class="form-group">
                                <label>তারিখ  :</label>

                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" name="submit_date" class="form-control pull-right" id="datepicker" required="">
                                </div>
                                <!-- /.input group -->
                              </div>
                              <!-- /.form group -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">মাসিক বেতন: চলতি/ অগ্রীম/ বকেয়া </label>
                                <input type="text" name="salary" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ভর্তি/পুনঃ ভর্তি ফি:</label>
                                <input type="text" name="admission" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">জরিমানা: বকেয়া বেতন/ অনুপস্থিতির :</label>
                                <input type="text" name="fine" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">সেশন:</label>
                                <input type="text" name="sessionfee" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">পরীক্ষা :</label>
                                <input type="text" name="exam" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">পরিচিতি পত্র:</label>
                                <input type="text" name="contact_letter" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>
                    </div>


                     <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">গ্রন্থাগার জামানত :</label>
                                <input type="text" name="security" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">বিদ্যুৎ :</label>
                                <input type="text" name="current" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">বার্ষিকী :</label>
                                <input type="text" name="yearly" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>
                    </div>


                     <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">সফটওয়্যার:</label>
                                <input type="text" name="software" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">বিবিধ :</label>
                                <input type="text" name="other" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">রেজিস্ট্রেশন/পরীক্ষা :</label>
                                <input type="text" name="regexam" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>
                    </div>


                     <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">প্রশংসা পত্র :</label>
                                <input type="text" name="testimonial" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">বিজ্ঞানাগার জামানত :</label>
                                <input type="text" name="science_security" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">কেন্দ্র :</label>
                                <input type="text" name="center" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>
                    </div>



                     <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ব্যাবহারিক  :</label>
                                <input type="text" name="practical" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">নম্বর সনদপত্র :</label>
                                <input type="text" name="number_certificate" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">স্কাউট/গার্লস  গাইড   :</label>
                                <input type="text" name="scout" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">বাসভাড়া  :</label>
                                <input type="text" name="bus" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ছাড়পত্র   :</label>
                                <input type="text" name="clearance" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">উন্নয়ন   :</label>
                                <input type="text" name="development" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">দরিদ্র   তহবিল   :</label>
                                <input type="text" name="poorfund" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ধর্মীয়  অনুষ্ঠান     :</label>
                                <input type="text" name="re_ceremoni" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">রেড  ক্রিসেন্ট ফান্ড     :</label>
                                <input type="text" name="red_cricent" class="form-control" id=""  placeholder="Enter amount...">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">অবস্থা :</label>
                                <select name="status2" class="form-control">
                                    <option value="paid">Paid</option>
                                    <option value="unpaid">Unpaid</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                 <label for="">পদ্ধতি :</label>
                                <select name="method" class="form-control">
                                    <option value="cash">Cash</option>
                                    <option value="check">Check</option>
                                    <option value="card">Card</option>
                                </select>
                            </div>
                        </div>
                    </div>


                                        
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">  
                        </div>
                    </div> 
                </form>
            <br>
            <br>
         
            <!-- </div> -->
    
    </section>
  
 




<?php include_once '../../includes/footer.php'; ?>
