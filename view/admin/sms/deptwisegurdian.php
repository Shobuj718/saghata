<?php include_once '../includes/header.php'; ?>


<?php 

	include_once '../../../vendor/autoload.php';

	use App\admin\Classmain\Classmain;
	use App\admin\Gurdian\Gurdian;

	$sms = new Gurdian();
	$class = new Classmain();

	$results = $class->selectAllClass();


if($_SERVER['REQUEST_METHOD'] == 'POST'){

	 $stringData = '';

	$number = $sms->set($_POST)->deptWiseGurdian();

	foreach($number as $data){

	  $stringData.=$data['father_phone'].",";

	}

	$trimmed=rtrim($stringData, ', ');

}

?>

<section class="content">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 style="color:green;">Select Class and Shift wise Gurdian for generating  text file...</h3>
			<br />
		</div>

 	<div class="col-md-12">
 			
	<!-- <form action="view/admin/sms/deptwisegurdiansearch.php" method="post"> -->
	<form action="" method="post">

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="">শ্রেণী: <font color="red" size="4">*</font></label>
					<select class="form-control" name="class" required="">
						<option>সিলেক্ট করুন</option>
					<?php 
						foreach($results as $result){
							echo "<option>".$result['class']."</option>";
						}
					 ?>
						 
					</select>
				</div>
			</div>

			<div class="col-md-6">
                 <div class="form-group">
                    <label for="">শিফট: <font color="red" size="4">*</font> </label>
                    <select class="form-control" name="shift" required>
                        <option>সিলেক্ট করুন</option>
                        <option>প্রভাতী</option>
                        <option>দিবা</option>
                        <option>সান্ধ্যকালীন</option>
                        <option>রাত্রিকালীন</option>
                    </select>
                </div>
            </div>
		</div>

            <div class="row">
            	<div class="col-md-6">
                 <div class="form-group">
                    <label for="">  গ্রুপ / বিভাগ: <font color="red" size="4">*</font> </label>
                    <select class="form-control" name="department" required>
                        <option>সিলেক্ট করুন</option>
                        <option>জেনারেল</option>
                        <option>বিজ্ঞান</option>
                        <option>মানবিক</option>
                        <option>বানিজ্য  </option>
                    </select>
                </div>
            </div>

			<div class="col-md-6">
				<div class="form-group">
					<label for=""><strong>শিক্ষাবর্ষ: <font color="red" size="4">*</font> </strong></label>
					<select class="form-control" name="year" required="">
						<option>সিলেক্ট করুন</option>
					<?php  
						for ($i=2017; $i <2020 ; $i++) { 
							echo "<option>".$i."</option>";
						}
						
					?>

					</select>
				</div>
			</div>
          </div>

		 
			<div class="col-md-4">
				<div class="form-group">
		 			<button type="submit" name="submit" class="btn btn-success btn-large">Generate Number</button>
				</div>
			</div> 
 
		</form>				
	  </div>
	<!-- <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label><strong style="color:green">Abobe text file generaing here... copy and past send sms field...</strong></label>
				<textarea class="form-control" name="message" id="message" rows="3" placeholder="Abobe text file generaing here... copy and past send sms field... ..."></textarea>
			</div>
		</div>
	</div> -->

	</div>
	
</section>



<section class="content"> 
  <div class="row">
   
    <h3 style="text-align:center;color:green;">Send SMS  </h3>

    <br />
    <?php 

      if(isset($_SESSION['smssend'])){
        echo "<div class='alert alert-success'>".$_SESSION['smssend']."</div>";
      }

     ?>
    <!-- <form action="view/admin/sms/storesms.php" method="post"> -->
    <form action="view/admin/sms/storesms.php" method="post">
      
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label for="">Enter Mobile Number Separated By (,).</label>
            <input type="text" name="to" class="form-control" value="<?php echo $trimmed; ?>" id="" pattern="^[0-9,]+" placeholder="017xxxxxxxx, 019xxxxxxxx, .....">
            <input type="hidden" name="token" value="fc0ae89275b159b51e95c3b1c50c7595" placeholder="token" />
          </div>
          </div>
        </div>
      
      

        <div class="row">
          <div class="col-md-6 col-md-offset-3">
          <div class="form-group">
            <div class="form-group">
                      <label>Message</label>
                      <textarea class="form-control" name="message" maxlength="160" size="160" 
              onkeyup="DoCheckLength(this);" id="message" rows="3" placeholder="Write Message ..."></textarea>
                  </div>
          </div>
        
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <li><p>Max: 160 Characters  Per Message.</p></li>
              <li><p>Don't Send More Than <strong style="color:red">20000 SMS </strong>at once.</p></li>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-success btn-large">Send Message</button>
            </div>
          </div> 
        </div>

      </div> 
    </form>
   </div>
     
    
</section>
  


<?php include_once '../includes/footer.php'; ?>
