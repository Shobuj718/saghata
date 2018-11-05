<?php include_once '../includes/header.php'; ?>

<?php 

	include_once '../../../vendor/autoload.php';

	use App\admin\Classmain\Classmain;

	$class = new Classmain();
	$results = $class->selectAllClass();

 ?>


<section class="content">
	<div class="row">

		<h2 style="text-align:center;color:green;">Add New Department</h2>

		<br>
 
		<form action="view/admin/department/storedepartment.php" method="post">


			<div class="col-md-6">
				<div class="form-group">
					<label for="">Class</label>
					<select class="form-control" name="class" required="">
                        <option>সিলেক্ট করুন</option>
						<option>নবম</option>
                        <option>১০ম</option>
                        <option>একাদশ</option>
                        <option>দ্বাদশ</option>
                        <option>ডিগ্রী ১ম বর্ষ</option>
                        <option>ডিগ্রী ২য় বর্ষ</option>
                        <option>ডিগ্রী ৩য় বর্ষ</option>
                        <option>ডিগ্রী প্রিভিয়াস মাস্টার্স</option>
                        <option>ডিগ্রী  মাস্টার্স</option>
                        <option>অনার্স ১ম বর্ষ</option>
                        <option>অনার্স ২য় বর্ষ</option>
                        <option>অনার্স ৩য় বর্ষ</option>
                        <option>অনার্স  ৪র্থ বর্ষ</option>
                        <option>মাস্টার্স</option>					 
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="">Department Name</label>
					<input type="text" name="deptName" id="" class="form-control"  placeholder="Enter Department Name..." required="">
				</div>
			</div>

			<!-- <div class="col-md-4">
				<div class="form-group">
					<label for="">Nick Name</label>
					<input type="text" name="nickname" id="" class="form-control" pattern="^[A-Za-z0-9]+" placeholder="Enter Nick Name..." required="" >
				</div>
			</div> -->

			<div class="col-md-4">
				<div class="form-group">
					<input type="submit"  class="btn btn-primary" name="submit" value="Submit">
 				</div>
			</div>
			

		</form>
	</div>
</section>





<?php include_once '../includes/footer.php'; ?>