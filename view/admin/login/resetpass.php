

 <?php  
 if(!isset($_SESSION)){
        session_start();
    }
 
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "bangla";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["submit"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                //$message = '<label>All fields are required</label>';  
              $_SESSION['required'] = "ALl fields are required !!!";
           }  
           else  
           {  
                $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'      =>     $_POST["username"],  
                          'password'      =>     $_POST["password"]
                          // 'type'          =>    $_POST["administrator"]  
                     )  
                );  
                $count = $statement->rowCount();  
                $stmt = $statement->fetch();
                $user = $stmt['username'];
                $pass = $stmt['password'];
                $type = $stmt['type'];

                if($count > 0)  
                {  
                    $_SESSION["username"]  = $user; 
                    $_SESSION["password"]  = $pass; 
                    $_SESSION["type"]      = $type; 

                    if(!empty($_POST["remember"])) {
                      setcookie ("username",$_POST["username"],time()+ (30 * 24 * 60 * 60));
                      setcookie ("password",$_POST["password"],time()+ (30 * 24 * 60 * 60));
                    } else {
                      if(isset($_COOKIE["username"])) {
                        setcookie ("username","");
                      }
                      if(isset($_COOKIE["password"])) {
                        setcookie ("password","");
                      }
                    }
                    header("location:http://localhost/impo/fapore/view/admin/index.php"); 
  
                }  
                else  
                {  
                     //$message = '<label>Wrong Data</label>';
                     $_SESSION['wrong'] = "Username or Password Does Not Match !!!";  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reset Password | Ehsan Software </title>
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
  <style type="text/css">
    .login-page {
         background-image: url("view/admin/login/dark.jpg");
        
         opacity: 0.8;
         hover:0.1;
          }
  </style>
</head>



<body class="hold-transition login-page">
<div class="login-box" style="margin:0 auto">
  <div class="login-logo" >
    <a style="color:#eaadad" href="view/admin/login/index.php"><b>E</b>hsan <b>S</b>oftware</a>
  </div>
  <?php  
                if(isset($_SESSION['required']))  
                {  
                    echo "<div class='alert alert-danger'>".$_SESSION['required']."</div>";
                    session_destroy();
                     //echo '<label class="text-danger">'.$message.'</label>';  
                }
                if(isset($_SESSION['register']))  
                {  
                    echo "<div class='alert alert-success'>".$_SESSION['register']."</div>";
                    session_destroy();
                     //echo '<label class="text-danger">'.$message.'</label>';  
                }  
                 if(isset($_SESSION['wrong']))  
                {  
                    echo "<div class='alert alert-danger'>".$_SESSION['wrong']."</div>";
                    session_destroy();
                     //echo '<label class="text-danger">'.$message.'</label>';  
                } 
                ?>  
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><strong>Hello !</strong>  <?php echo 'Shobuj' ?> you are here to reset your forgetton password.</p>

    <form action="" method="post">

      <div class="form-group has-feedback">
        <label for="">New Password:</label>
        <input type="password" class="form-control" name="pass"   placeholder="New Password...">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label for="">Confirm New Password:</label>
        <input type="password" class="form-control" name="confirm-pass"  placeholder="Confirm New Password...">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
     

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4 pull-left">
          <button type="submit" name="btn-reset-pass" class="btn btn-primary">Reset Your Password </button>
        </div>
        
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="javascript:void(0)" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="javascript:void(0)" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <!-- <a href="http://localhost/impo/fapore/view/admin/login/fpass.php">I forgot my password</a><br> -->
    <!-- <a href="view/admin/login/secure_login.php" class="text-center">Register a new          membership</a>
    -->

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
</script>
 <script>

             $(document).ready(function () {
                $('.alert').delay(5000).fadeOut(3000,function () {
                  $(this).alert('close');
                });
              });


    $(document).ready(function() {
//Preloader
$(window).load(function() {
preloaderFadeOutTime = 500;
function hidePreloader() {
var preloader = $('.spinner-wrapper');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
});

           </script>
</body>
</html>
