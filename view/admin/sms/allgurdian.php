<?php include_once '../includes/header.php'; ?>


<?php 

// $stringData = "this is test file";

// $myFile = "testFile.txt";
// $fo = fopen($myFile, 'w') or die("can't open file");

// // $data_query=mysql_query("SELECT name,age from table");
// // while($data=mysql_fetch_array($data_query))
// // $stringData.="Name: ".$data['name']." Age:".$data['age']."\n";

// fwrite($fo, $stringData);

// fclose($fo);

?>

<section class="content">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3 style="color:green;">Select Year for generating gurdian number text file...</h3>
			<br />
		</div>

	<form action="view/admin/sms/gurdiansearch.php" method="post">

		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label for=""><strong>Select Year</strong></label>
				<select class="form-control" name="year" required="">
					<option>Select</option>
				<?php  
					for ($i=2017; $i <2021 ; $i++) { 
						echo "<option>".$i."</option>";
					}
					
				?>

				</select>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
		 			<button type="submit" name="submit" class="btn btn-success btn-large">Generate Text</button>
				</div>
			</div> 
		</div>

	</form>	

	<!-- <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<label><strong style="color:green">Abobe text file generaing here... copy and past send sms field...</strong></label>
				<textarea class="form-control" name="message" id="message" rows="3" placeholder="Abobe text file generaing here... copy and past send sms field... ..."></textarea>
			</div>
		</div>
	</div> -->

	</div>
	
</section>


<?php include_once '../includes/footer.php'; ?>
