<?php 
require 'session.php';
require 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elearn</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700|ZCOOL+XiaoWei" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lobster|Raleway:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="tootik.min.css"> 
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="main.css">
    
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light ">
<div class="container">
      <a class="navbar-brand" href="#">
     <h4>Elearn</h4>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="department.php">Department</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feculty.php"> Feculty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">News </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Contact</a>
      </li>
      
      
    </ul>
 
 
    <form class="form-inline fff my-2 my-lg-0">
      <input class=" mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</div>
</nav>



<!-- Banner Part Start -->
<section id="banner">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                <div class="banner-content text-center">
                    <div class="banner-text">
                        <a href="#" data-tootik="Facebook" data-tootik-conf="square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" data-tootik="Twitter" data-tootik-conf="square"><i class="fab fa-twitter"></i></a>
                        <a href="#" data-tootik="Linkedin" data-tootik-conf="square"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" data-tootik="Pinterest" data-tootik-conf="square"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" data-tootik="Instagram" data-tootik-conf="square"><i class="fab fa-instagram"></i></a>
                    </div>
                    <h1>You Can Learn Anything</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat maxime reprehenderit, commodi, temporibus doloribus eaque.</p>
                    <a class="btn btn-primary" href="#" role="button">GET STARED NOW</a>
                
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Banner Part End -->








<script src="js/all.min.js"></script>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/custom.js"></script>




</body>
</html>