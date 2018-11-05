<?php include_once '../includes/header.php'; ?>


	
<!-- 77485d95ee477403b6b9fe0b5fbccc0e
 -->

 <script language="javascript"> 
    function DoCheckLength(aTextBox) { 
      if (aTextBox.maxLength - aTextBox.value.length==0) { 
        //document.theForm.submit(); 
        //beep.play(); 
        alert("Character length end, Please don't type more then 1071 Character...");
      } 
    } 
  </script> 

<section class="content"> 
	<div class="row">
	 
		<h3 style="text-align:center;color:green;">Send SMS  </h3>

		<br />
		
		<form action="view/admin/sms/storesms.php" method="post">
			
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
 						<input type="text" name="to" class="form-control" id="" pattern="^[0-9,]+" placeholder="017xxxxxxxx, 019xxxxxxxx, .....">
 						<input type="hidden" name="token" value="3db3084ed4462e3b337feef0c70754d5" placeholder="token" />
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
							<li><p>Max: 160  Characters  Per Message.</p></li>
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
