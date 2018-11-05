<?php
  if(!isset($_SESSION)){
        session_start();
    }

require_once 'class.user.php';
//require_once 'mail.php';
error_reporting(0);
$reg_user = new USER();

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
  $token = trim($_GET['edit']);

  $data = $reg_user->runQuery("select * from tbl_users where tokenCode=:token ");
  $data->bindValue(':token', $token, PDO::PARAM_STR);
  $data->execute();
  $result = $data->fetch(PDO::PARAM_STR);
  //var_dump($result);
  //die();

}

if(isset($_POST['btn-signup']))
{
 $email = trim($_POST['email']);
 $type  = trim($_POST['type']);
 

 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  $_SESSION['error'] = "Invalid Email Address ! Choose Validet Email !!!";
  header('Location:rolechange.php');
  die();
 } 

      $compare = $reg_user->runQuery("select * from tbl_users where userStatus='N' ");
      $compare->execute();
      $results = $compare->fetchAll(PDO::PARAM_STR);

      foreach($results as $result){

        if($result['userEmail'] == $email){
          $stmt = $reg_user->runQuery("update tbl_users set type=:type where userEmail=:email");
          $stmt->bindValue(':type', $type, PDO::PARAM_STR);
          $stmt->bindValue(':email', $email, PDO::PARAM_STR);
          $stmt->execute();
          if($stmt){
            $_SESSION['success'] = "User Role Change Successfully !!!";
            echo "<script>window.location='showuser.php'</script>";
          }
        }
        
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

  <div class="register-box-body">
    <p class="login-box-msg">Change Membership Role</p>
    <?php  
        if(isset($_SESSION['success']))  
        {  
            echo "<div class='alert alert-danger'>".$_SESSION['success']."</div>";
            //session_unset();
        }
       
      ?> 
    <form action="" method="post">

      <div class="form-group has-feedback">
       <label for="">Email:</label>
        <input type="email" class="form-control" value="<?php echo $result['userEmail']; ?>" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="" placeholder="Enter your email...">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
       <label for="">User Role:</label>
        <select name="type" class="form-control required="" >
            <option>select</option>
        <?php  
            if($_SESSION['type'] == 'administrator'){
        ?>
            <option <?php echo $result['type'] == 'administrator'?'selected':''; ?> >administrator</option>
            <option <?php echo $result['type'] == 'teacher'?'selected':''; ?> >teacher</option>
            <option <?php echo $result['type'] == 'student'?'selected':''; ?> >student</option>
            <option <?php echo $result['type'] == 'user'?'selected':''; ?> >user</option>

        <?php } else{ ?>

        
          <option <?php echo $result['type'] == 'user'?'selected':''; ?> >user</option>

        <?php } ?>

        </select>
        <span class="glyphicon glyphicon- form-control-feedback"></span>
      </div>

      <div class="row">
       <div class="col-xs-8">
           <button type="submit" name="btn-signup" class="btn btn-primary">Role Change </button>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <a class="btn btn-info" href="view/admin/login/showuser.php">Go Back</a>
        </div>
        <!-- /.col -->
      </div>
    </form>

        
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


