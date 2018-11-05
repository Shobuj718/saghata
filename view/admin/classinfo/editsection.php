<?php include_once '../includes/header.php'; ?>

<?php 

	include_once '../../../vendor/autoload.php';

	use App\admin\Classmain\Classmain;

	$class = new Classmain();
	$results = $class->selectAllClass();

	use App\Admin\Section\Section;
	$section = new Section();

	$id = $_GET['edit'];

	$edit = $section->editSection($id);

 ?>


<section class="content">
	<div class="row">

		<h2 style="text-align:center;color:green;">সেকশন Update করুন</h2>

		<br>
 
		<form action="view/admin/classinfo/updatesection.php" method="post">


			<div class="col-md-4">
				<div class="form-group">
					<label for="">Class</label>
					<select class="form-control" name="class"   required="">
						<option>select</option>
						<option <?=  $edit['class']=='One'?'selected':'' ?> value="One" >One</option>
						<option <?=  $edit['class']=='Two'?'selected':'' ?> value="Two" >Two</option>
						<option <?=  $edit['class']=='Three'?'selected':'' ?> value="Three" >Three</option>
						<option <?=  $edit['class']=='Four'?'selected':'' ?> value="Four" >Four</option>
						<option <?=  $edit['class']=='Five'?'selected':'' ?> value="Five" >Five</option>
						<option <?=  $edit['class']=='Six'?'selected':'' ?> value="Six" >Six</option>
						<option <?=  $edit['class']=='Seven'?'selected':'' ?> value="Seven" >Seven</option>
						<option <?=  $edit['class']=='Eight'?'selected':'' ?> value="Eight" >Eight</option>
						<option <?=  $edit['class']=='Nine'?'selected':'' ?> value="Nine" >Nine</option>
						<option <?=  $edit['class']=='Ten'?'selected':'' ?> value="Ten" >Ten</option>
					<?php 

						// foreach($results as $result){
						// 	echo "<option>".$result['class']."</option>";
						// }
					 ?>
						 
					</select>
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<label for="">Section Name</label>
					<input type="text" name="section" id="" value="<?= $edit['section']; ?>" class="form-control" pattern="^[A-Za-z0-9]+" placeholder="Enter Section Name..." required="">
					<input type="hidden" name="unique_id" value="<?= $edit['unique_id']; ?>">
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<label for="">Nick Name</label>
					<input type="text" name="nickname" id="" value="<?= $edit['nickname']; ?>" class="form-control" pattern="^[A-Za-z0-9]+" placeholder="Enter Nick Name..." required="" >
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<input type="submit"  class="btn btn-primary" name="submit" value="Submit">
 				</div>
			</div>
			

		</form>
	</div>
</section>





<?php include_once '../includes/footer.php'; ?>