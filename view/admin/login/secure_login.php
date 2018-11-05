<?php 
    //include_once '../includes/header.php' ;
if(!isset($_SESSION)){
  session_start();
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

  </style>

</head>
<body class="hold-transition register-page login-page">
<div class="register-box" style="margin:0 auto">
  <div class="register-logo" style="font-size:30px;margin-bottom:0px;">
    <a style="color:#eaadad" href="assets/admin/secure_login.php"><b>E</b>hsan <b>S</b>oftware</a>
  </div>

  <?php  
    if(isset($_SESSION['usernameExist'])){
      echo "<div class='alert alert-danger'>".$_SESSION['usernameExist']."</div>";
      session_destroy();
    }
    if(isset($_SESSION['emailExist'])){
      echo "<div class='alert alert-danger'>".$_SESSION['emailExist']."</div>";
      session_destroy();
    }

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

    <form action="view/admin/login/storeregister.php" method="post">

      <div class="form-group has-feedback">
        <label for="">Username:</label>
        <input type="text" class="form-control" name="username" minlength="3" pattern="^[A-Za-z0-9 ]+" required="" placeholder="Enter your username...">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
       <label for="">Email:</label>
        <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="" placeholder="Enter your email...">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
       <label for="">Password:</label>
        <input type="text" class="form-control" name="password" minlength="6" pattern=".{6,}" title=" Enter Six or More Characters !" required="" placeholder="Enter your password...">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
       <label for="">Mobile Number:</label>
        <input type="text" class="form-control" name="mobile" minlength="11" pattern="^[0-9]+" title=" Enter Valid Mobile Number !" required="" placeholder="Enter your mobile number...">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
       <label for="">User Role:</label>
        <select name="role" class="form-control required="" >
            <option>select</option>
        <?php  
            if($_SESSION['type'] == 'administrator'){
        ?>
            <option>admin</option>
            <option>teacher</option>
            <option>student</option>
            <option>user</option>




        <?php } ?>

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
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Register</button>
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

    <a href="view/admin/login/login.php" class="text-center">I already have a membership</a>
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
        $('.alert').delay(3000).fadeOut(2000,function () {
            $(this).alert('close');
        });
    });

</script>
</body>
</html>
