<?php 

	include_once '../includes/header.php';


 ?>

 	<section class="content"> 
 			<div class="row">
 			 
 				<h3 style="text-align:center;color:green;">নতুন ক্লাস যুক্ত করুন  </h3>

 				<br />
 				<?php 

 					if(isset($_SESSION['classadd'])){
 						echo "<div class='alert alert-success'>".$_SESSION['classadd']."</div>";
 					}

 				 ?>
 				<form action="view/admin/classinfo/storeclass.php" method="post">
 				
	 				<div class="col-md-6">
	 					<div class="form-group">
 				 			<label for="">Class Name</label>
	 						<input type="text" name="class" class="form-control" id=""  placeholder="Enter Class Name...">
						</div>
	 					
	 				</div>

	 				<div class="col-md-6">
	 					<div class="form-group">
							<label for="">Numeric Name</label>
	 						<input type="text" name="nuname" class="form-control" id=""  placeholder="Enter Numeric Name, Ex: 1...">
						</div>
	 					
	 				</div>
					
					<div class="col-md-4">
						<div class="form-group">
 				 			<input type="submit" class="btn btn-primary" name="submit" value="Submit">	
						</div>
					</div> 
 				</form>
 		 
 			</div>
  	
 	</section>
  
 








 <?php  include_once '../includes/footer.php';  ?>