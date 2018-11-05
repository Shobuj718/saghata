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
      if(isset($_POST["login"]))  
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
                     // header("location:login_success.php");
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
           <title>PHP Developer - Shobuj</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

           <style>
             body {
                 background-image: url("christmas.JPG");
                 width: 100%;
                 height: 100%;
                 opacity: 0.8;
                 background-color: #cccccc;
                 hover:0.1;
                  }
                img:hover {
                    opacity: 1.0;
                    filter: alpha(opacity=100); /* For IE8 and earlier */
                }

        .sk-circle {
  position: absolute;
top: 48%;
left: 48%;
  width: 40px;
  height: 40px;
  position: relative;
}
.sk-circle .sk-child {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}
.sk-circle .sk-child:before {
  content: '';
  display: block;
  margin: 0 auto;
  width: 15%;
  height: 15%;
  background-color: #fff;
  border-radius: 100%;
  -webkit-animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
          animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
}
.sk-circle .sk-circle2 {
  -webkit-transform: rotate(30deg);
      -ms-transform: rotate(30deg);
          transform: rotate(30deg); }
.sk-circle .sk-circle3 {
  -webkit-transform: rotate(60deg);
      -ms-transform: rotate(60deg);
          transform: rotate(60deg); }
.sk-circle .sk-circle4 {
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg); }
.sk-circle .sk-circle5 {
  -webkit-transform: rotate(120deg);
      -ms-transform: rotate(120deg);
          transform: rotate(120deg); }
.sk-circle .sk-circle6 {
  -webkit-transform: rotate(150deg);
      -ms-transform: rotate(150deg);
          transform: rotate(150deg); }
.sk-circle .sk-circle7 {
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg); }
.sk-circle .sk-circle8 {
  -webkit-transform: rotate(210deg);
      -ms-transform: rotate(210deg);
          transform: rotate(210deg); }
.sk-circle .sk-circle9 {
  -webkit-transform: rotate(240deg);
      -ms-transform: rotate(240deg);
          transform: rotate(240deg); }
.sk-circle .sk-circle10 {
  -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
          transform: rotate(270deg); }
.sk-circle .sk-circle11 {
  -webkit-transform: rotate(300deg);
      -ms-transform: rotate(300deg);
          transform: rotate(300deg); }
.sk-circle .sk-circle12 {
  -webkit-transform: rotate(330deg);
      -ms-transform: rotate(330deg);
          transform: rotate(330deg); }
.sk-circle .sk-circle2:before {
  -webkit-animation-delay: -1.1s;
          animation-delay: -1.1s; }
.sk-circle .sk-circle3:before {
  -webkit-animation-delay: -1s;
          animation-delay: -1s; }
.sk-circle .sk-circle4:before {
  -webkit-animation-delay: -0.9s;
          animation-delay: -0.9s; }
.sk-circle .sk-circle5:before {
  -webkit-animation-delay: -0.8s;
          animation-delay: -0.8s; }
.sk-circle .sk-circle6:before {
  -webkit-animation-delay: -0.7s;
          animation-delay: -0.7s; }
.sk-circle .sk-circle7:before {
  -webkit-animation-delay: -0.6s;
          animation-delay: -0.6s; }
.sk-circle .sk-circle8:before {
  -webkit-animation-delay: -0.5s;
          animation-delay: -0.5s; }
.sk-circle .sk-circle9:before {
  -webkit-animation-delay: -0.4s;
          animation-delay: -0.4s; }
.sk-circle .sk-circle10:before {
  -webkit-animation-delay: -0.3s;
          animation-delay: -0.3s; }
.sk-circle .sk-circle11:before {
  -webkit-animation-delay: -0.2s;
          animation-delay: -0.2s; }
.sk-circle .sk-circle12:before {
  -webkit-animation-delay: -0.1s;
          animation-delay: -0.1s; }

@-webkit-keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0);
  } 40% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0);
  } 40% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
.spinner-wrapper {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #27AE60;
z-index: 999999;
}
    </style>
      </head>  
      <body>  


<!-- <div class="spinner-wrapper">
<div class="sk-circle">
  <div class="sk-circle1 sk-child"></div>
  <div class="sk-circle2 sk-child"></div>
  <div class="sk-circle3 sk-child"></div>
  <div class="sk-circle4 sk-child"></div>
  <div class="sk-circle5 sk-child"></div>
  <div class="sk-circle6 sk-child"></div>
  <div class="sk-circle7 sk-child"></div>
  <div class="sk-circle8 sk-child"></div>
  <div class="sk-circle9 sk-child"></div>
  <div class="sk-circle10 sk-child"></div>
  <div class="sk-circle11 sk-child"></div>
  <div class="sk-circle12 sk-child"></div>
</div>
</div> -->

           <br />  
           <div class="container" style="width:500px;">  
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
                <h3 align="" style="color:black;">Login First To See This Demo</h3><br />  
                <form method="post">  
                     <label style="color:black; font-size:18px">Username</label>  
                     <input type="text" name="username" class="form-control" placeholder="Enter your username..." />  
                     <br />  
                     <label style="color:black; font-size:18px">Password</label>  
                     <input type="password" name="password" class="form-control" placeholder="Enter your password..." />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-primary" value="Login" />  
                </form>  
           </div>  
           <br />  

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
