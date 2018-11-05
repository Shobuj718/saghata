<?php

   include_once '../includes/header.php';
   include_once '../../../vendor/autoload.php'; 

    use App\admin\Sms\Sms;

    $sms = new Sms();
    $balance = $sms->smsBalanceCheck();
    //echo $balance;
    $total = 2000;
    $use = $total-$balance;

  ?>
 	<section class="content"> 
 			<div class="row">
 			 
 			 <div id="login-overlay" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#330033;color:#fff;">
                <h2 class="modal-title" id="myModalLabel"> All SMS Description <a class="pull-right" href="view/admin/scanner/index.php">Take Attenence</a></h2>
              <div class="row">
                  <div class="col-xs-12">
                      <div class="col-md=4">
                        <h3 style="background-color:#330033;color:#fff;">SMS Purchased : <strong>2000</strong></h3>
                      </div>
                      <!-- <div class="col-md=4">
                       <h3>SMS Used : <strong><?php echo $use; ?></strong></h3>
                      </div> -->
                      <div class="col-md=4">
                        <h3>SMS<strong><?php echo $balance; ?></strong></h3>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
 		 
	</div>
  	
 	</section>
  
 



 <!-- <script type="text/javascript">
	window.onload=function(){ 
    window.setTimeout(function() { document.cartCheckout.submit(); }, 5000);
};
</script> -->




 <?php  include_once '../includes/footer.php';  ?>