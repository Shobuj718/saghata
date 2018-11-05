<?php include_once '../includes/header.php'; ?>

<?php 
    
include_once '../../../vendor/autoload.php' ;

error_reporting(0);

use App\Admin\Gurdian\Gurdian;

$sms = new Gurdian();

 
 
$myFile = "classwiseGurdiancommitee.txt";
$fo = fopen($myFile, 'w') or die("can't open file");

$stringData = '';

$result = $sms->allCommiteeNumber();

// echo "<pre>";
// var_dump($result);
// die();

foreach($result as $data){

  $stringData.=$data['mobile'].",";

}

$trimmed=rtrim($stringData, ', ');



fwrite($fo, $trimmed);

fclose($fo);

 ?>


<section class="content">
	 <!-- START CUSTOM TABS -->
      <h2 class="page-header">All Teacher, Gurdian and Student Number generate here</h2>

      <div class="row">
       
        <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-left">
              <li><a href="view/admin/sms/allnumber.php"  >All Teacher Number</a></li>
              <li><a href="view/admin/sms/allgurdiannumber.php" >All Gurdian</a></li>
              <li  class="active"><a href="view/admin/sms/allcommitteenumber.php">All Committe</a></li>
              <li><a href="view/admin/sms/allstudentnumber.php">All Student</a></li>
              <li><a href="view/admin/sms/classwisegurdiannumber.php">Class Wise</a></li>
               
              <li><a href="view/admin/sms/ninetenstudentnumber.php">Nine_Ten</a></li>
              
              <!-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li> -->
             </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                
 <script language="javascript"> 
    function DoCheckLength(aTextBox) { 
      if (aTextBox.maxLength - aTextBox.value.length==0) { 
        //document.theForm.submit(); 
        //beep.play(); 
        alert("Character length end, Please don't type more then 160 Character...");
      } 
    } 
  </script> 

<section class="content"> 
  <div class="row">
   
    <h3 style="text-align:center;color:green;">Send SMS  </h3>

    <br />
    <?php 

      if(isset($_SESSION['smssend'])){
        echo "<div class='alert alert-success'>".$_SESSION['smssend']."</div>";
      }
      unset($_SESSION['smssend']);

     ?>
    <form action="view/admin/sms/storesms.php" method="post">
      
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label for="">Enter Mobile Number Separated By (,).</label>
            <input type="text" name="to" class="form-control" value="<?php echo $trimmed; ?>" id="" pattern="^[0-9,]+" placeholder="017xxxxxxxx, 019xxxxxxxx, .....">
            <input type="hidden" name="token" value="fc0ae89275b159b51e95c3b1c50c7595" placeholder="token" />
          </div>
          </div>
        </div>
      
      

        <div class="row">
          <div class="col-md-6 col-md-offset-3">
          <div class="form-group">
            <div class="form-group">
                      <label>Message</label>
                      <textarea class="form-control" name="message" maxlength="160" size="160" 
              onkeyup="DoCheckLength(this);" id="message" rows="3" placeholder="Write Message ..."></textarea>
                  </div>
          </div>
        
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <li><p>Max: 160 Characters  Per Message.</p></li>
              <li><p>Don't Send More Than <strong style="color:red">20000 SMS </strong>at once.</p></li>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-success btn-large">Send Message</button>
            </div>
          </div> 
        </div>

      </div> 
    </form>
   </div>
     
    
</section>
  
 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
</section>




<?php include_once '../includes/footer.php'; ?>