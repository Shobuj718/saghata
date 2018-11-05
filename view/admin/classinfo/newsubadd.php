<?php include_once '../includes/header.php'; ?>

                
<div class="col-md-12">

  <div class="row">
    <div class="content">
        <form action="view/admin/classinfo/newsubstore.php" method="post">

			<h2 style="text-align:center; color:green;">নতুন সাবজেক্ট যোগ করুন</h2>
		 	<br>

		 	<!-- <?php 

		 		if(isset($_SESSION['subject'])){
		 			echo "<div class='alert alert-success'>".$_SESSION['subject']."</div>";
		 			//session_destroy();
		 		}

		 	 ?> -->
  
		    <div class="row">
	            <div class="col-md-4">
                    <div class="form-group">
		                <label for="">বিষয় :</label>
		                <input type="text" name="subject" class="form-control" placeholder="Enter Subject Name..." id="" required="" >
	            	</div>
                </div>
	            <div class="col-md-4">
	                <div class="form-group">
	                    <label>বিভাগ:</label>
	                    <select class="form-control" name="department" required>
	                        <option>সিলেক্ট করুন</option>
	                        <option>জেনারেল</option>
	                        <option>বিজ্ঞান</option>
	                        <option>মানবিক</option>
	                        <option>বানিজ্য  </option>
	                    </select>
	                </div>
	            </div> 
	            <div class="col-md-4">
	               <div class="form-group">
		                <label for="">Subject Code :</label>
		                <input type="text" name="subcode" pattern="^[A-Za-z0-9 ]+" class="form-control" placeholder="Enter Subject Code..." id="">
	            	</div>
	            </div>
	    	</div>
            
            
             
            
             


	        <br />

	        <div class="form-group">
	            <button type="submit" name="submit" class="btn btn-info">Submit</button>
	        </div>
           </form> 

		</div>
	</div>
</div> 



<?php  include '../includes/footer.php' ?>
