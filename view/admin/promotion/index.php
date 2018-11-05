<?php 

include_once '../includes/header.php';

include_once '../../../vendor/autoload.php';

	use App\admin\Classmain\Classmain;

	$class = new Classmain();

	$results = $class->selectAllClass();


 ?>
<style>
	div.desc{
		margin-right: 10px;
		margin-left: 10px;
	}
</style>

<section class="content">

	<div class="row" style="margin-right:10px;margin-left:10px;">

		<form action="view/admin/promotion/store.php" method="post">
			
			<div class="col-md-6" class="desc" style="background-color:#b964ec;">
				<h2 class="text-center" style="color:#fff;">Promotion From</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="">শ্রেণী: <font color="red" size="4">*</font></label>
							<select class="form-control" name="classfrom" required="">
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
                            <select class="form-control" name="shiftfrom" required>
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
							<label for="">শাখা: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="branchfrom" required>
                                <option>সিলেক্ট করুন </option>
                                <option>ক</option>
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
					<div class="col-md-6">
						<div class="form-group">
							<label for=""><strong>শিক্ষাবর্ষ: <font color="red" size="4">*</font> </strong></label>
							<select class="form-control" name="yearfrom" required="">
								<option>সিলেক্ট করুন</option>
							<?php  
								for ($i=2017; $i <2021 ; $i++) { 
									echo "<option>".$i."</option>";
								}
								
							?>

							</select>
						</div>
					</div>
				</div>
			</div>



			<div class="col-md-6" style="background-color:#08bf91;">
				<h2 class="text-center" style="color:#fff;">Promotion To</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="">শ্রেণী: <font color="red" size="4">*</font></label>
							<select class="form-control" name="classto" required="">
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
                            <select class="form-control" name="shiftto" required>
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
							<label for="">শাখা: <font color="red" size="4">*</font> </label>
                            <select class="form-control" name="branchto" required>
                                <option>সিলেক্ট করুন </option>
                                <option>ক</option>
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
					<div class="col-md-6">
						<div class="form-group">
							<label for=""><strong>শিক্ষাবর্ষ: <font color="red" size="4">*</font> </strong></label>
							<select class="form-control" name="yearto" required="">
								<option>সিলেক্ট করুন</option>
							<?php  
								for ($i=2017; $i <2021 ; $i++) { 
									echo "<option>".$i."</option>";
								}
								
							?>

							</select>
						</div>
					</div>			<br>

				</div>
			</div>

			

	</div>
			<br>

			<input type="submit" name="submit" class="btn btn-primary" value="Promotion">
		</form>

	
</section>





<?php include_once '../includes/footer.php'; ?>
