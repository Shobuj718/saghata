<?php 

include_once '../includes/header.php';

include_once '../../../vendor/autoload.php';

	use App\admin\Classmain\Classmain;

	$class = new Classmain();

	$results = $class->selectAllClass();


 ?>


<section class="content">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 style="color:green;text-align:center;">টেবুলেশন শিট তৈরী করুন ( নবম থেকে ১০ম - বিজ্ঞান )</h3>
		<hr>
		</div>
	<form action="view/admin/tabulationsheet/ninetensciencestore.php" method="post">

		<div class="col-md-6">
			<div class="form-group">
				<label for="">শ্রেণী: <font color="red" size="4">*</font></label>
				<select class="form-control" name="class" required="">
					<option>সিলেক্ট করুন</option>
					<option>নবম</option>
                    <option>১০ম</option>
					 
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">পরীক্ষা: <font color="red" size="4">*</font></label>
				<select class="form-control" name="term" required>
                    <option>মধ্যবর্তি</option>
                    <option>নির্বাচনী</option>
                    <option>বার্ষিক</option>
                </select>
			</div>
		</div>


		<div class="col-md-6">
			<div class="form-group">
				<label for="">বিভাগ:<font color="red" size="4">*</font></label>
				<select class="form-control" name="department" required>
                    <option>বিজ্ঞান</option>
                    <option>মানবিক</option>
                    <option>বাণিজ্য</option>
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

		 
			<div class="col-md-4">
				<div class="form-group">
		 			<button type="submit" name="submit" class="btn btn-info btn-large">Generate Tabulation Sheet</button>
				</div>
			</div> 
 
	</form>	

	</div>
	
</section>





<?php include_once '../includes/footer.php'; ?>
