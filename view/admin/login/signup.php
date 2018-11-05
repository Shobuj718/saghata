<?php
session_start();
require_once 'class.user.php';
//require_once 'mail.php';
error_reporting(0);
$reg_user = new USER();

if($reg_user->is_logged_in()!="")
{
 $reg_user->redirect('home.php');
}


if(isset($_POST['btn-signup']))
{
 $uname = trim($_POST['txtuname']);
 $email = trim($_POST['txtemail']);
 $upass = trim($_POST['txtpass']);
 $type  = trim($_POST['type']);
 $code = md5(uniqid(rand()));
 

 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  $_SESSION['Exist'] = "Invalid Email Address ! Choose Validate Email !!!";
  header('Location:signup.php');
  die();
 }
 // $stmt = $reg_user->runQuery("SELECT * FROM tbl_users WHERE userEmail=:email_id");
 // $stmt->execute(array(":email_id"=>$email));
 // $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
 // if($stmt->rowCount() > 0)
 // {
 //  $msg = "
 //        <div class='alert alert-error'>
 //    <button class='close' data-dismiss='alert'>&times;</button>
 //     <strong>Sorry !</strong>  email allready exists , Please Try another one
 //     </div>
 //     ";
 // }

 
 

 $compare = $reg_user->runQuery("select * from tbl_users where userStatus='N' ");
      $compare->execute();
      $results = $compare->fetchAll(PDO::PARAM_STR);

      foreach($results as $result){

        if($result['userEmail'] == $email){
          //$_SESSION['Exist'] = $email." already Exist, Choose another email !";
          $_SESSION['Exist'] = "Email already Exist, Choose another email !";
          header('location:signup.php');
          die();
          //echo "<script>window.location='secure_login.php'</script>";
        }
        elseif($result['userName'] == $uname){
          $_SESSION['Exist'] = $uname." already Exist, Choose another username !";
          header('location:signup.php');
          die();
          //echo "<script>window.location='secure_login.php'</script>";
        }
      }


  
  if($reg_user->register($uname,$email,$upass,$code,$type))
  {   
   $id = $reg_user->lasdID();  
   $key = base64_encode($id);
   $id = $key;

    $to = $email;
    $subject = "Confirm Registration";
    $from = 'shobujsa93@gmail.com';
      
    
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= "<h1 style='color:green;'>Hello, " ."$uname"."</h1>";
$message .= "Welcome to Ehsan Software, To complete your registration  please , just click following link<br/><br/><br/>";
$message .= "<a href='http://faporehighschool.com/mailVarify/verify.php?id=$id&code=$code'>Click HERE to Activate Your Account for Login :)</a>";
$message .= '</body></html>';  


   $reg_user->send_mail_using_mail($to, $subject, $message, $headers); 
   $msg = "
  
      <strong>Success!</strong>  We've sent an email to $email.
                    Please click on the confirmation link in the email to create your account. 
     
     ";
     $_SESSION['msg'] = $msg; 
  }
  else
  {
   $_SESSION['error'] = "Sorry , Something Wrong..."; 
  }  
 }


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ehsan Software | Registration Page</title>

  

  <link rel="shortcut icon" href="assets/admin/dist/img/avatar.png">
  <base href="http://localhost/impo/Fapore/">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/admin/plugins/iCheck/square/blue.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="view/admin/login/main.js";></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
      .login-page {
         background-image: url("view/admin/login/dark.jpg");
        
         opacity: 0.8;
         hover:0.1;
          }

      .register-page{
        background-color: ;
      }

      .error{
        color:red;
        font-size: 16px;
      }
      .success{
        color: green;
        font-size: 16px;
      }

  </style>

  <!-- <script>
    $(document).ready(function(){
      $("#username").keyup(function(){
      var name = $(this).val();

      $.ajax({
        url      : 'view/admin/login/checkuser.php',
        method   : 'POST',
        data     : {username:name},
        dataType : 'text',
        success:function(data){
          $('#userstatus').html(data);
        }
      });
    });
  });
  </script> -->

</head>
<body class="hold-transition register-page login-page">
<div class="register-box" style="margin:0 auto">
  <div class="register-logo" style="font-size:30px;margin-bottom:0px;">
    <a style="color:#eaadad" href="assets/admin/secure_login.php"><b>E</b>hsan <b>S</b>oftware</a>
  </div>

  <?php  
   

     $startdate = date('Y-m-d H:i:s');
     //echo $startdate."</br>";
     $offset = strtotime("+1 day");
     $offset2 = strtotime("+1 minutes");
     $enddate = date("Y-m-d H:i:s", $offset2);
     //echo $enddate."</br>"; 
     
     $today = date('Y-m-d H:i:s');

     $enddate > $startdate == TRUE;
     $startdate < $enddate == TRUE;

     if($enddate == $today){
      header('Location:index.php');
      echo "<script>window.location='login.php'</script>";
     }
   
    if(($enddate > $startdate == $startdate < $enddate) == TRUE){
      //header('Location:index.php');
      //echo "<script>window.location='login.php'</script>";
    }

     if($enddate > $startdate) {
        //header('Location:index.php');
     }
  
  ?>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new Membership</p>
    <?php 
       if(isset($_SESSION['msg'])){
          echo "<div class='alert alert-success'>".$_SESSION['msg']."</div>";
          session_destroy();
        }
       if(isset($_SESSION['error'])){
          echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
          session_destroy();
        }
     ?>
    <form action="" method="post">

      <div class="form-group has-feedback">
        <label for="">Username:</label>
        <input type="text" class="form-control" name="txtuname" id="username" minlength="3" pattern="^[A-Za-z0-9 ]+" required="" placeholder="Enter your username...">
        <span class="glyphicon glyphicon-user form-control-feedback" ></span>
        <div id="userstatus"></div>
      </div>

      <div class="form-group has-feedback">
       <label for="">Email:</label>
        <input type="email" class="form-control" name="txtemail" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="" placeholder="Enter your email...">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         <div id="emailstatus"></div>
      </div>

      <div class="form-group has-feedback">
       <label for="">Password:</label>
        <input type="text" class="form-control" name="txtpass" minlength="6" pattern=".{6,}" title=" Enter Six or More Characters !" required="" placeholder="Enter your password...">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <!-- <div class="form-group has-feedback">
       <label for="">Mobile Number:</label>
        <input type="text" class="form-control" name="mobile" minlength="11" pattern="^[0-9]+" title=" Enter Valid Mobile Number !" required="" placeholder="Enter your mobile number...">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div> -->

      <div class="form-group has-feedback">
       <label for="">User Role:</label>
        <select name="type" class="form-control required="" >
            <option>select</option>
        <?php  
            //if($_SESSION['type'] == 'administrator'){
        ?>
            <option>admin</option>
            <option>teacher</option>
            <option>student</option>
            <option>user</option>




        <?php //} ?>

        <?php  
            if($_SESSION['type'] == 'teacher'){
        ?>
            <option>teacher</option>

        <?php } ?>

      <?php  
          if($_SESSION['type'] == 'student'){
      ?>
            <option>student</option>

      <?php } ?>

        <?php  
            if($_SESSION['type'] == 'user'){
        ?>
            <option>user</option>

        <?php } ?>

        <option>user</option>


        </select>
        <span class="glyphicon glyphicon- form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="chekcbox" value="checked"> I agree to the <a href="javascript:void(0)">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="btn-signup" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

         <!--  <p>- OR -</p> -->
    <!-- <div class="social-auth-links text-center">
      <a href="javascript:void(0)" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="javascript:void(0)" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div> -->

    <a href="view/admin/login/index.php" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>

<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });

   $(document).ready(function () {
        $('.alert').delay(7000).fadeOut(4000,function () {
            $(this).alert('close');
        });
    });

</script>
</body>
</html>


