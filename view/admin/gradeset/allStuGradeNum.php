<?php include_once '../includes/header.php'; ?>

<?php 

	include_once '../../../vendor/autoload.php';

	use App\admin\Classmain\Classmain;
	$k=2021;
	$class = new Classmain();
	$results = $class->selectAllClass();

 ?>


 	<section class="content"> 
 			<div class="row">
 			 
 				<h3 style="text-align:center;color:green;">সকল শিক্ষার্থীদের মোট নম্বর এবং জিপিএ  দেখুন  </h3>

 				<br />
			<?php 

				if(isset($_SESSION['gradeseterr'])){
					echo "<div style='font-size:18px '; class='alert alert-danger'>".$_SESSION['gradeseterr']."</div>";
					unset($_SESSION['gradeseterr']);
				}

			 ?>
 				<form action="view/admin/gradeset/storeStuGradeNum.php" method="post">
 				
	 				<div class="col-md-6">
	 					<div class="form-group">
 				 			<label for="">Class Name:</label>
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

	 				<div class="col-md-6">
	 					<div class="form-group">
							<label for="">শিক্ষাবর্ষ:</label>
							<select class="form-control" name="year" required="">
	 						<option>Select</option>
						<?php 
							for($i=2018; $i<$k; $i++){
								echo "<option>".$i."</option>";
							}
						 ?>
							 
						</select>
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