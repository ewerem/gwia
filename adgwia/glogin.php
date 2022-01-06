<?php
session_start();
ob_start();
include'../access/access.php';
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GWIA</title>
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link href="../adcss/b.css" rel="stylesheet">
    <link href="../adcss/md.css" rel="stylesheet">
  <style type="text/css">
    #dlink:hover{
      background: #000044 !important;
      color: white !important;
    }
  </style>
</head>
<body>
    <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background: #4285F4 !important;">
        <div class="container">
          <a class="navbar-brand" href="../index.php">
            <img src="../image/logo.jpg" style="width: 42px; height: 42px;border:1px solid white;padding: 0px !important;">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">
                  <i class="fas fa-home"></i> Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Intro Section-->
    </header>
    <br>

    <div class="container">

          <div class="row no-gutters">
              
              <div class="col-sm-12 col-md-3"></div>
              <div class="col-sm-12 col-md-6">
              
                <center>
                  <marquee behavior="alternate" direction="up" scrollamount="2" style="width: 100px;height: 120px;">
                      <img src="../image/logo2.jpg" style="width: 100px; height:100px;border-radius: 20px;">
                  </marquee>
                  <h5 style="color: black;font-weight: bold;font-family: lucida sans;">ADMIN LOGIN</h5>
                </center>

                <p></p>

                <form method="post" style="border:2px dashed #4285F4; padding: 10px;background: white;">
                  <br>
                  <div class="md-form">
                    <input class="form-control" id="email" type="text" name="user" required="required"/>
                    <label for="email"><i class="fas fa-user"></i> User</label>
                  </div>

                  <div class="md-form">
                    <input class="form-control" id="email" type="password" name="pass" required="required"/>
                    <label for="email"><i class="fas fa-lock"></i> Password</label>
                  </div>
                  <p></p>

                  <button class="btn btn-block ml-0" type="submit" name="sub" style="background: #4285F4;color: white;"><i class="fas fa-paper-plane mr-2"></i> 
                    Submit
                  </button>

                </form>

                    <?php

                        if(isset($_POST['sub'])){

                          $us = $_POST['user'];
                          $pa = $_POST['pass'];
                          
                          adlogin($pdo, $us, $pa);
                        }

                    ?>

              </div>
              <div class="col-sm-12 col-md-3"></div>

            </div>
      
    </div>
    <br><br><br>
    <footer class="page-footer white center-on-small-only" style="margin-top: -20px;">
      <div class="footer-copyright" style="background: #000033">
        <div class="container-fluid">
          <p></p>
          <center>
            &copy; Copyright <script> var d = new Date();var n = d. getFullYear(); document.write(n);</script> <a href="../super/super-login.php" style="color:#aaa;">GWIA</a>
          </center>
          <p></p>
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="../adjs/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../adjs/po.js"></script>
    <script type="text/javascript" src="../adjs/b.js"></script>
    <script type="text/javascript" src="../adjs/md.js"></script>
    
  </body>
</html>