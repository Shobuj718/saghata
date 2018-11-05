<?php include_once '../includes/header.php'; ?>




 	<section class="content"> 
 			<div class="row">
 			 
 			 <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
                <h4> Teacher Attendence Taken Using Teacher ID Card <a class="pull-right" href="view/admin/scanner/smsbalance.php">Check SMS Balance</a></h4>

          </div>

          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="theFormID" name="cartCheckout" method="" action="view/admin/scannerTea/storesms.php" method="get" novalidate="novalidate">
                              
                              <div class="form-group">
                                  <label for="barcode" class="control-label">Enter Teacher ID Number/Scan ID Card</label>
                                  <input type="text" class="form-control" name="to" required="" autofocus >
                                  <input type="hidden" name="token" value="fc0ae89275b159b51e95c3b1c50c7595" placeholder="token" />
                                  <span class="help-block"></span>
                              </div>
                              

                              <button type="submit" class="btn btn-success btn-block" name="insert-data" id="insert-data" onclick="insertData()">Take Attendence</button>
                              <br>
                            <p id="message"></p>
                          </form>
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