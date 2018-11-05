<?php include_once '../includes/header.php'; ?>

<?php 

	include_once '../../../vendor/autoload.php';

	use App\admin\Subject\Subject;

	$id = $_GET['edit'];

	$subject = new Subject();
	$result = $subject->editsubject($id);

	// echo "<pre>";
	// var_dump($result);
	// die();

 ?>

                
<div class="col-md-12">

  <div class="row">
    <div class="content">
        <form action="view/admin/classinfo/updateSubject.php" method="post">

			<h2 style="text-align:center; color:green;"> সাবজেক্ট Update   করুন</h2>
		 	<br>

		 	 
  
		    <div class="row">
	            <div class="col-md-4">
                    <div class="form-group">
		                <label for="">বিষয় :</label>
		                <input type="text" name="subject" value="<?= $result['subject']; ?> " class="form-control" placeholder="Enter Subject Name..." id="" required="" >
		                <input type="hidden" name="unique_id" value="<?= $result['unique_id']; ?> " class="form-control"  id="" required="" >
	            	</div>
                </div>
	            <div class="col-md-4">
	                <div class="form-group">
	                    <label>বিভাগ:</label>
	                    <select class="form-control" name="department" required>
	                        <option>সিলেক্ট করুন</option>
	                        <option <?= $result['department'] == 'জেনারেল'?'selected':'' ?> >জেনারেল</option>
	                        <option <?= $result['department'] == 'বিজ্ঞান'?'selected':'' ?> >বিজ্ঞান</option>
	                        <option <?= $result['department'] == 'মানবিক'?'selected':''   ?> >মানবিক</option>
	                        <option <?= $result['department'] == 'বানিজ্য'?'selected':'' ?> >বানিজ্য  </option>
	                    </select>
	                </div>
	            </div> 
	            <div class="col-md-4">
	               <div class="form-group">
		                <label for="">Subject Code :</label>
		                <input type="text" name="subcode" value="<?= $result['subcode'];  ?>" pattern="^[A-Za-z0-9]+" class="form-control"   id="">
	            	</div>
	            </div>
	    	</div> 

	        <br />

	        <div class="form-group">
	            <button type="submit" name="submit" class="btn btn-info">Update</button>
	        </div>
           </form> 

		</div>
	</div>
</div> 



<?php  include '../includes/footer.php' ?>
