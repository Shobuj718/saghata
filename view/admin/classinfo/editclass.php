<?php 

	include_once '../includes/header.php';

	include_once '../../../vendor/autoload.php';

	use App\admin\Classmain\Classmain;

	$class = new Classmain();

	$id = $_GET['edit'];

	$result = $class->editClass($id);
 
 ?>

 	<section class="content"> 
 			<div class="row">
 			 
 				<h3 style="text-align:center;color:green;"> ক্লাস সংশোধন  করুন   </h3>

 				<br />
 				 
 				<form action="view/admin/classinfo/updateclass.php" method="post">
 				
	 				<div class="col-md-6">
	 					<div class="form-group">
 				 			<label for="">Class Name</label>
	 						<input type="text" name="class" class="form-control" value="<?= $result['class']; ?>" id=""  >
	 						<input type="hidden" name="unique_id" class="form-control" value="<?= $result['unique_id']; ?>" id="" >
						</div>
	 					
	 				</div>

	 				<div class="col-md-6">
	 					<div class="form-group">
							<label for="">Numeric Name</label>
	 						<input type="text" name="nuname" class="form-control" value="<?= $result['nuname']; ?>" id="" >
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