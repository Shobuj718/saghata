<?php include_once '../includes/header.php'; ?>


	
<!-- 77485d95ee477403b6b9fe0b5fbccc0e
 -->

<section class="content"> 
	<div class="row">
	 
		<h3 style="text-align:center;color:green;">Send SMS</h3>

		<br />
	
		<form action="view/admin/scanner/smsGreenWebStore.php" method="GET">
			
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
					    	<?php 

                    			if(isset($_SESSION['smssend'])){
                    				echo "<div class='alert alert-success'>".$_SESSION['smssend']."</div>";
                    			}
                    
                    		 ?>
						<div class="form-group">
				 			<label for="">Enter Mobile Number Separated By (,).</label>
 						<input type="text" name="student_id" class="form-control" id="" pattern="^[0-9,]+" placeholder="017xxxxxxxx, 019xxxxxxxx, ....." autofocus="">
 						<input type="hidden" name="token" value="fc0ae89275b159b51e95c3b1c50c7595" placeholder="token" />
					</div>
					</div>
				</div>
			
			

				<!-- <div class="row">
					<div class="col-md-6 col-md-offset-3">
 					<div class="form-group">
						<div class="form-group">
			                <label>Message</label>
			                <textarea class="form-control" name="message" id="message" rows="3" placeholder="Write Message ..."></textarea> <br />
            			</div>
					</div>
				
					</div>
				</div> -->

				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							<p>Max: 160 Words or 1071  Characters  Per Message.</p>
							<p>Don't Send More Than <strong style="color:red">20000 SMS </strong>at once.</p>
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
