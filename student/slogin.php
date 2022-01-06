<?php
session_start();
ob_start();
include'../access/access.php';
?>


<!DOCTYPE html>
<html class="full-height" lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Login</title>
    <meta name="keywords" content="GWIA, GFC, Greatenant, online school, university, digital learning, africa school, online class"/>
    <meta name="description" content="Greatenant World Institute Academy, GWIA university a redefining tertiary learning institution that want to revolutionize the Africa system education through digital learning."/>
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mdb.min.css" rel="stylesheet">
    <link href="../styles/main.css" rel="stylesheet">
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
      <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="../index.php">
            <img src="../image/logo.jpg" style="width: 42px; height: 42px;border:1px solid white;padding: 0px !important;">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="../index.php?#aboutus">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="../index.php?#courses">Courses</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" data-toggle="dropdown">Student</a>
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="slogin.php" id="dlink"><i class="fas fa-arrow-circle-right"></i> Student Login</a>
                  <a class="dropdown-item" href="../reg.php" id="dlink"><i class="fas fa-arrow-circle-right"></i> Student Registration</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" data-toggle="dropdown">Tutor</a>
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#centralModalSm" id="dlink"><i class="fas fa-arrow-circle-right"></i> Tutor Login</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" data-toggle="dropdown">Extrax</a>
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="../blog.php" id="dlink">
                    <i class="fas fa-arrow-circle-right"></i> Blog
                  </a>
                  <a class="dropdown-item" href="../careers.php" id="dlink">
                    <i class="fas fa-arrow-circle-right"></i> Careers
                  </a>
                </div>
              </li>
            </ul><a class="btn my-0" href="../reg.php" style="border:2px solid white;border-radius:30px;">Join Us</a>
          </div>
        </div>
      </nav>
      <!-- Intro Section-->
      <section class="view hm-gradient" id="intro">
        <div class="full-bg-img d-flex align-items-center">
          <div class="container">

            <div class="row no-gutters">
              
              <div class="col-sm-12 col-md-3"></div>
              <div class="col-sm-12 col-md-6">
                <br><br><br>
                <center>
                  <marquee behavior="alternate" direction="up" scrollamount="2" style="width: 100px;height: 120px;">
                      <img src="../image/logo2.jpg" style="width: 100px; height:100px;border-radius: 20px;">
                  </marquee>
                  <h5 style="color: white;font-weight: bold;">STUDENT LOGIN</h5>
                </center>

                <p></p>

                <form method="post" style="border:2px dashed #0d47a1; padding: 10px;background: white;">
        
                  <p style="font-family: lucida sans"><i class="fas fa-envelope" style="padding: 4px;"></i> Email</p>
                  <input class="form-control form-control-lg" name="user" type="email" placeholder="Email" style="border:1px solid #0d47a1;" required>

                  <p style="font-family: lucida sans"><i class="fas fa-lock" style="padding: 4px;"></i> Password</p>
                  <input class="form-control form-control-lg" name="pass" type="password" placeholder="Password" style="border:1px solid #0d47a1" required>

                      <?php

                        if(isset($_POST['sub'])){

                          $us = $_POST['user'];
                          $pa = $_POST['pass'];

                          echo'<p></p>';
                          studlogin($pdo, $us, $pa);
                          echo'<p></p>';
                        }

                      ?>
                  
                  <button name="sub" class="btn btn-lg btn-block" style="background: #0d47a1;color: white;">
                      Login <i class="fas fa-sign-in-alt"></i>
                  </button>
                  <p></p>
                  <div class="row">
                    <div class="col-sm-12 col-md-7">
                      <center>
                        <a href="fpass.php" style="padding: 5px; color: #440000;">
                          <i class="fas fa-lock"></i> FORGET PASSWORD
                        </a>
                        <p></p>
                      </center>
                    </div>
                    <div class="col-sm-12 col-md-5">
                      <center>
                        <a href="../reg.php" style="padding: 5px; color: #000044;">
                          <i class="fas fa-user-circle"></i> REGISTER
                        </a>
                        <p></p>
                      </center>
                    </div>
                  </div>

                </form>



                <br><br><br><br><br>
              </div>
              <div class="col-sm-12 col-md-3"></div>

            </div>
            
          </div>
        </div>
      </section>
    </header>
    <br><br><p></p>
    <footer class="page-footer indigo darken-2 center-on-small-only pt-4 mt-0" style="border-top:10px solid #000033;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">

            <h4 style="padding: 6px; border-left:4px solid white;font-weight: bold;letter-spacing: 4px;">GWIA</h4>
            <p style="text-align: justify;">
              is establish to enhance 4th industrial revolution courses that are results oriented and social solution base providers to change ancient curriculum in education system, adding value to the world.
            </p>
            
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4">

            <p style="padding: 5px;border-bottom: 1px solid white;">USEFUL LINKS</p>
            <p>
              <a href="../index.php?#aboutus" style="color: white;">
                <i class="fas fa-arrow-alt-circle-right"></i> About us
              </a>
            </p>
            <p>
              <a href="../index.php?#courses" style="color: white;">
                <i class="fas fa-arrow-alt-circle-right"></i> Courses
              </a>
            </p>
            <p>
              <a href="../index.php?#contact" style="color: white;">
                <i class="fas fa-arrow-alt-circle-right"></i> Contact
              </a>
            </p>

            <p>
              <a href="../careers.php" style="color: white;">
                <i class="fas fa-arrow-alt-circle-right"></i> Careers
              </a>
            </p>
            
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4">

            <p style="padding: 5px;border-bottom: 1px solid white;">WHAT WE DO</p>
            <p>
              <i class="far fa-arrow-alt-circle-right"></i> Creative systematic learning
               <br>
               <i class="far fa-arrow-alt-circle-right"></i> Sound academic per excellent
               <br>
               <i class="far fa-arrow-alt-circle-right"></i> Entrepreneurial thinking education
               <br>
               <i class="far fa-arrow-alt-circle-right"></i> Explorative learning for holistic development
               <br>
               <i class="far fa-arrow-alt-circle-right"></i> Personal developement
            </p>
            
          </div>
        </div>
      </div>
      <br>
      <div class="footer-copyright" style="background: #000033">
        <div class="container-fluid">
          &copy; Copyright <script> var d = new Date();var n = d. getFullYear(); document.write(n);</script> GWIA
        </div>
      </div>
    </footer>

    <!-- modal vendor -->
    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-sm" role="document">

        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel" style="font-weight: bold;">Tutor</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p></p>
            <center>
            <form method="post">

              <div class="md-form">
                <input class="form-control" id="email" type="text" name="email" required="required"/>
                <label for="email"><i class="fas fa-user"></i> Email</label>
              </div>

              <div class="md-form">
                <input class="form-control" id="email" type="password" name="pass" required="required"/>
                <label for="email"><i class="fas fa-lock"></i> Password</label>
              </div>
              <p></p>

              <button class="btn btn-indigo btn-block ml-0" name="subt" type="submit"><i class="fas fa-paper-plane mr-2"></i> 
                Submit
              </button>
              
            </form>

            <?php  

              if(isset($_POST['subt'])){

                $em = $_POST['email'];
                $pa = $_POST['pass'];

                $chk = $pdo->prepare("SELECT * FROM teacher WHERE email = ? AND pass = ?");
                $chk->bindParam(1, $em);
                $chk->bindParam(2, $pa);
                $chk->execute();

                if($chk->rowCount() > 0){

                  $_SESSION['tutor'] = $em;
                  header('location:../tutor/tutor-dash.php');

                }else{
                  echo'<script>alert("Wrong Authentication !!");</script>';
                }

              }

            ?>

            </center>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Central Modal Small -->

    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script>new WOW().init();</script>
  </body>
</html>