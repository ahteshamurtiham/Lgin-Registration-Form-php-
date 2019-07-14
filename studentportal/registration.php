<?php 
require 'server.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert_query = "INSERT INTO user(username,email,password) VALUES ('$username','$email','$password')";
    $result = mysqli_query($db_connection,$insert_query);
     $abc = "registered successfully!";
     header("location: registration.php?error=$abc");

}

?>






<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700|ZCOOL+XiaoWei" rel="stylesheet">
    <link rel="stylesheet" href="main.css">

</head>

<body>
    <div id="regfrm">
        <div class="overlay1">
            <h2>Student Registration Form</h2>

            <div id="container-register">
                <div id="title">
                    <i class="material-icons lock">lock</i> Register
                </div>
                
                
                     
                
                
                       <div class="success text-center">
                        <?php if(!empty($_GET['error'])){
            echo $_GET['error'];

            }?>
                    </div>
                
                
                

                <form action="registration.php" method="post">
                    <div class="input">
                        <div class="input-addon">
                            <i class="material-icons">email</i>
                        </div>
                        <input name="email" placeholder="Email" type="email" required class="validate" autocomplete="off">
                    </div>

                    <div class="clearfix"></div>

                    <div class="input">
                        <div class="input-addon">
                            <i class="material-icons">face</i>
                        </div>
                        <input name="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
                    </div>

                    <div class="clearfix"></div>

                    <div class="input">
                        <div class="input-addon">
                            <i class="material-icons">vpn_key</i>
                        </div>
                        <input name="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
                    </div>

                    <div class="remember-me">
                        <input type="checkbox">
                        <span style="color: #DDD">I accept Terms of Service</span>
                    </div>

                    <input type="submit" name="reg_user" value="Registration" />
                </form>

                <div class="privacy">
                    <a href="#">Privacy Policy</a>
                </div>
           

                <div class="register">
                    Do you already have an account?
                    <a href="login.php"><button id="register-link">Log In here</button></a>


             



                </div>
            </div>
        </div>
    </div>
</body>

</html>
