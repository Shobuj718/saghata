<?php 
    session_start();
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



<body class="hold-transition login-page">
<div class="login-box" style="margin:0 auto">
  <div class="login-logo">
    <a style="color:#eaadad" href="view/admin/login/welcomeemail4.php"><b>E</b>hsan <b>S</b>oftware</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Send Multiple Email</p>

    <?php 
       if(isset($_SESSION['error'])){
      echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
      session_destroy();
    }
     ?>

    <form action="view/admin/login/welcomeemail4.php" method="post">

      <div class="form-group has-feedback">
        <label for="">Email:</label>
        <input type="text" class="form-control" name="email" placeholder="Enter Your Email Separted by semicolon(,)..." required="">
       <!-- <textarea rows="4" cols="50" name="comment" placeholder="Enter Your Email..." class="form-control"> -->
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

     

      
   <button type="submit" name="btn-signup" class="btn btn-primary btn-block btn-flat">Multiple Mail Send</button>
    </form>

    


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

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
