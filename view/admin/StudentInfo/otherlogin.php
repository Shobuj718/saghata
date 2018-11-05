<?php //include_once '../includes/header.php' ?>

<!DOCTYPE html>
<html>
<head><title>সহকারী প্রধান শিক্ষক লগ ইন.</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-image: url("images/bg32.jpg");
            background-repeat:repeat;
        }


        form {
            border: 3px solid #f1f1f1;
            width:400px;
            margin-left:445px;
            background-color:white;
            margin-top:50px;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
        .login{

        }
    </style></head>
<body  >
<div class="login">
    <form action="../softnight/automationSoftware.php">
        <h2><center>Login Form</center></h2>
        <div class="imgcontainer">
            <img src="http://localhost/impo/Fapore/assets/front/images/Logo.jpg"  width="70px" alt="Avatar" class=" ">
        </div>

        <div class="container">
            <label><b>Username or Phone Number or Email</b></label>
            <input type="text" placeholder="Enter Username or Phone Number or Email" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <a class="btn btn-primary" href="www.jkmghs.com">Back To Website</a>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
        <h5><center>If Your are Not Registered User plese <a href="">Registartion</a></center></h5>

    </form>
</div>

</body>
</html>


<?php //include_once '../includes/footer.php'?>
