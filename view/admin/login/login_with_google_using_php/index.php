<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();
	
	//Initialize User class
	$user = new User();
	
	//Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
	
	//Storing user data into session
    $_SESSION['userData'] = $userData;
     if(!empty($userData)){
    	$_SESSION['username'] = $userData['first_name'];
        echo "<script>window.location='http://localhost/impo/Fapore/view/admin/index.php'</script>";
    }
	
	//Render facebook profile data
    if(!empty($userData)){
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>'; 
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
	$authUrl = $gClient->createAuthUrl();
	//$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="http://localhost/impo/Fapore/view/admin/login/login_with_google_using_php/images/glogin.png" alt=""/></a>';
    $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Continue with Google+</a>';
}
?>


 <?php  

//site key for reCAPTCHA = 6Ldti2MUAAAAAKW6Nr9Ph83GDk4Kk1dgZJb1cQS_
//Secret key             = 6Ldti2MUAAAAAK0ZRxukgRneUps6Vq1higQI7SNY


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
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                //$message = '<label>All fields are required</label>';  
              $_SESSION['required'] = "ALl fields are required !!!";
           }  
           else  
           {  
               $pass = md5($_POST["password"]);
                $query = "SELECT * FROM tbl_users WHERE userName = :username AND userPass = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $pass 
                     )  
                );  
                $count = $statement->rowCount();  
                $stmt = $statement->fetch();
                $user = $stmt['userName'];
                $pass = $stmt['userPass'];
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
  <style type="text/css">
    .login-page {
         background-image: url("view/admin/login/dark.jpg");
        
         opacity: 0.8;
         hover:0.1;
          }
  </style>

  <script src='https://www.google.com/recaptcha/api.js'></script>

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
                 if(isset($_SESSION['passchange']))  
                {  
                    echo "<div class='alert alert-success'>".$_SESSION['passchange']."</div>";
                    session_destroy();
                     //echo '<label class="text-danger">'.$message.'</label>';  
                }
                 if(isset($_SESSION['success']))  
                {  
                    echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                    session_destroy();
                     //echo '<label class="text-danger">'.$message.'</label>';  
                } 
                ?>  
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" method="post">

      <div class="form-group has-feedback">
        <label for="">Username:</label>
        <input type="text" class="form-control" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"  placeholder="Enter Your Email...">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <label for="">Password:</label>
        <input type="password" class="form-control" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"  placeholder="Enter Your Password...">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <!-- <div class="g-recaptcha" data-sitekey="6Ldti2MUAAAAAKW6Nr9Ph83GDk4Kk1dgZJb1cQS_"></div> -->

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?> /> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
       <div><?php echo $output; ?></div>
       <a href="javascript:void(0)" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Continue with Facebook</a>
     
    </div>
    <!-- /.social-auth-links -->

    <a href="http://localhost/impo/fapore/view/admin/login/fpass.php">Forgot Password</a><br>
    <a href="view/admin/login/signup.php" class="text-center">Register a new          membership</a>
   

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
