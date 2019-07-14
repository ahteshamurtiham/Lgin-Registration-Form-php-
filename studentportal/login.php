<?php
session_start();
   require 'server.php';
//   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password']; 
      
      $sql = "SELECT count(*) as tiham FROM user WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db_connection, $sql);
      $row = mysqli_fetch_assoc($result);
      

      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($row['tiham'] == 1) {
          $_SESSION['jonot'] = 'khan';

         header("location: welcome.php");
      }else {
          $abc = "invalid username or password";
          header("location: login.php?error=$abc");
      }
   }
?>






<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700|ZCOOL+XiaoWei" rel="stylesheet"> 
    <link rel="stylesheet" href="main.css">
    
</head>

<body>
    <div id="loginfrm">
       <div class="overlay1">
           <h2>Student Login Form</h2>
            <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>
        
        
          <div class="inval text-center">
           <?php if(!empty($_GET['error'])){
            echo $_GET['error'];

            }?>
       </div>        
        
        
        

        <form action="login.php" method="post">
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
                <span style="color: #DDD">Remember Me</span>
            </div>
        
            <input type="submit" name="login_user" value="Log In" />
        </form>

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
           <p> Don't have an account yet?</p>
            <a href="registration.php"><button id="register-link">Register here</button></a>
        </div>
    </div>
       </div>
    </div>
</body>

</html>
