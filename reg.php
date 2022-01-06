<?php 
session_start();
ob_start();
include'access/access.php';
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration</title>
    <meta name="keywords" content="GWIA, GFC, Greatenant, online school, university, digital learning, africa school, online class"/>
    <meta name="description" content="Greatenant World Institute Academy, GWIA university a redefining tertiary learning institution that want to revolutionize the Africa system education through digital learning."/>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  <style type="text/css">
    #dlink:hover{
      background: #000044 !important;
      color: white !important;
    }
  </style>
  <!-- Tel code -->
  <!--<link rel="stylesheet" href="build/css/intlTelInput.css">-->
</head>
<body>
    <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="image/logo.jpg" style="width: 42px; height: 42px;border:1px solid white;padding: 0px !important;">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php?#aboutus">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php?#courses">Courses</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" data-toggle="dropdown">Student</a>
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="student/slogin.php" id="dlink"><i class="fas fa-arrow-circle-right"></i> Student Login</a>
                  <a class="dropdown-item" href="reg.php" id="dlink"><i class="fas fa-arrow-circle-right"></i> Student Registration</a>
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
                  <a class="dropdown-item" href="blog.php" id="dlink">
                    <i class="fas fa-arrow-circle-right"></i> Blog
                  </a>
                  <a class="dropdown-item" href="careers.php" id="dlink">
                    <i class="fas fa-arrow-circle-right"></i> Careers
                  </a>
                </div>
              </li>
            </ul><a class="btn my-0" href="reg.php" style="border:2px solid white;border-radius:30px;">Join Us</a>
          </div>
        </div>
      </nav>
      <!-- Intro Section-->
    </header>
    <br><br>


    <div class="container">

      <div class="row">
      <div class="col-sm-12 col-md-2"></div>

      <div class="col-sm-12 col-md-8">
        
        <center>
                  <marquee behavior="alternate" direction="up" scrollamount="2" style="width: 100px;height: 120px;">
                      <img src="image/logo2.jpg" style="width: 100px; height:100px;border-radius: 20px;">
                  </marquee>
                  <h5 style="color: black;font-weight: bold;">STUDENT REGISTRATION</h5>
        </center>
        <p></p>
        <div id="form" style="border:2px dashed #0d47a1; padding: 10px;background: white;">
        
                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i> Surname</p>
                  <input class="form-control" name="sname" id="sname" type="text" style="border:1px solid #0d47a1;" required="">

                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i> Other names</p>
                  <input class="form-control" name="oname" id="oname" type="text" style="border:1px solid #0d47a1" required>

                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i> Email Address</p>
                  <input class="form-control" name="email" id="email" type="email" style="border:1px solid #0d47a1" required>

                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i> Country</p>
                  <select name="country" id="country" class="form-control" style="border:1px solid #0d47a1; height: 55px;" required>
                    <option value="default"></option>
                    <?php
                      $get = $pdo->prepare("SELECT * FROM country ORDER BY cname ASC");
                      $get->execute();
                      if($get->rowCount() > 0){
                        while($c = $get->fetch()){
                          echo'<option value='.str_replace(' ', '_', $c['cname']).'>'.$c['cname'].'</option>';
                        }
                      }
                    ?>
                  </select>

                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i> State/Province</p>
                  <input class="form-control" name="state" id="state" type="text" style="border:1px solid #0d47a1" required>

                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i> Home address</p>
                  <textarea class="form-control" name="address" id="address" style="border:1px solid #0d47a1;height: 100px;" required></textarea>

                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i> Gender</p>
                  <select name="gender" id="gender" class="form-control" style="border:1px solid #0d47a1; height: 55px;" required>
                    <option value="default"></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>

                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i>Which course are you registering for?</p>
                  <select name="course" id="course" class="form-control" style="border:1px solid #0d47a1; height: 55px;" required>
                    <option value="default"></option>
                    <?php
                      $get2 = $pdo->prepare("SELECT * FROM course ORDER BY id DESC");
                      $get2->execute();
                      if($get2->rowCount() > 0){
                        while($c = $get2->fetch()){
                          echo'<option value='.$c['abbr'].'>'.strtoupper($c['cname']).' ('.strtoupper($c['abbr']).')</option>';
                        }
                      }
                    ?>
                  </select>

                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i>Highest level of education</p>
                  <select name="leveledu" id="leveledu" class="form-control" style="border:1px solid #0d47a1; height: 55px;" required>
                    <option value="default"></option>
                    <option value="Doctorate">Doctorate</option>
                    <option value="Masters">Masters</option>
                    <option value="PGD">PGD</option>
                    <option value="Graduate">Graduate (Bsc/HND) </option>
                    <option value="OND">OND</option>
                    <option value="NCE">NCE</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="High School">High School/SSCE</option>
                  </select>

                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i> Password</p>
                  <input class="form-control" name="pass" id="pass" type="password" style="border:1px solid #0d47a1" required>
                  
                  <p style="font-family: lucida sans"><i class="fas fa-pen-square" style="padding: 4px;"></i> Retype Password</p>
                  <input class="form-control" name="cpass" id="cpass" type="password" style="border:1px solid #0d47a1" required>

                  Selecting Accept means you have read and accepted our <a href="#" data-toggle="modal" data-target="#fullHeightModalRight">Terms and Conditions</a>
                  <select name="terms" id="terms" class="form-control" style="border:1px solid #0d47a1; height: 40px;" required>
                    <option value="default"></option>
                    <option value="Accept">Accept</option>
                  </select>

                  <p></p><p></p>
                  <button id="sub" class="btn btn-lg btn-block" style="background: #0d47a1;color: white;">
                      Submit <i class="fas fa-paper-plane"></i>
                  </button>

        </div>

        <br>

        <a href="student/slogin.php" class="btn btn-lg btn-success btn-block"><i class="fas fa-user"></i> LOGIN HERE</a>

      </div>

      <div class="col-sm-12 col-md-2"></div>
      
    </div>

  </div>

  <!-- Terms and Condition -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-full-height modal-right" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Terms & Conditions</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 500px; overflow: auto;">
        
        <p style="text-align: justify;font-size:16px;font-family: lucida sans; letter-spacing: 1px;">
          By registering with GWIA you agree to the following terms and conditions.
        </p>

        <h5 style="font-weight: bold;">Personal Details</h5>
        <p style="text-align: justify;font-size:16px;font-family: lucida sans; letter-spacing: 1px;">
          Personal details collected are for the insitution use only. You agree give correct information asked of you. You agree that your account with GWIA even after payment of neccessary dues will be terminated at anytime when we find out the details submitted by you is false.
        </p>

        <h5 style="font-weight: bold;">Website Usage</h5>
        <p style="text-align: justify;font-size:16px;font-family: lucida sans; letter-spacing: 1px;">
          You agree to use GWIA online platform for the purpose you registered only. You agree that GWIA can sue you and terminate you account if it is noticed that you are illegally using the website in any form.
        </p>

        <h5 style="font-weight: bold;">Respect</h5>
        <p style="text-align: justify;font-size:16px;font-family: lucida sans; letter-spacing: 1px;">
          You agree to respect other students and give upmost respect to our tutors around the globe. You agree to respect our Greatenants around the world.
        </p>

        <h5 style="font-weight: bold;">Refund Policy</h5>
        <p style="text-align: justify;font-size:16px;font-family: lucida sans; letter-spacing: 1px;">
          Be informed that all payment made is non-refundable. In no case should a registered student or anyone ask for a refund after payment. If any issues arises, you are allowed to contact GWIA.
        </p>

        <i style="text-align: justify;font-size:14px;font-family: lucida sans; letter-spacing: 1px;color: #000088;">
          With 1% of a Greatenant we will change the world
        </i>

        <br>

      </div>

    </div>
  </div>
</div>
<!-- Full Height Modal Right -->

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
                  header('location:tutor/tutor-dash.php');

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

    <br><br><br>
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
              <a href="index.php?#aboutus" style="color: white;">
                <i class="fas fa-arrow-alt-circle-right"></i> About us
              </a>
            </p>
            <p>
              <a href="index.php?#courses" style="color: white;">
                <i class="fas fa-arrow-alt-circle-right"></i> Courses
              </a>
            </p>
            <p>
              <a href="index.php?#contact" style="color: white;">
                <i class="fas fa-arrow-alt-circle-right"></i> Contact
              </a>
            </p>

            <p>
              <a href="careers.php" style="color: white;">
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

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- form submittion -->

    <script>
      
      $(document).ready(function(){

        $('#sub').click(function(){

          $('#sub').html('<img src="img/lightbox/preloader.gif">');

          var sname     = $('#sname').val();
          var oname     = $('#oname').val();
          var email     = $('#email').val();
          var country   = $('#country').val();
          var state     = $('#state').val();
          var address   = $('#address').val();
          var gender    = $('#gender').val();
          var course    = $('#course').val();
          var leveledu  = $('#leveledu').val();
          var pass      = $('#pass').val();
          var cpass     = $('#cpass').val();
          var terms     = $('#terms').val();

          var atposition=email.indexOf("@");  
          var dotposition=email.lastIndexOf(".");  

          $.ajax({
            url:"student-insert.php",
            method:"post",
            data:{sname:sname, oname:oname, email:email, country:country, state:state, address:address, gender:gender, course:course, leveledu:leveledu, pass:pass, cpass:cpass, terms:terms},
            success:function(data){

              $('#sub').html('Submit <i class="fas fa-paper-plane"></i>');

              if(sname != '' && oname != '' && country != '' && state != '' && address != '' && gender != 'default' && course != 'default' && leveledu != 'default' && pass != '' && cpass != '' && terms != 'default' && pass == cpass){

                $('#sname').val('');
                $('#oname').val('');
                $('#email').val('');
                $('#country').val('');
                $('#state').val('');
                $('#address').val('');
                $('#gender').val('');
                $('#course').val('');
                $('#leveledu').val('');
                $('#pass').val('');
                $('#cpass').val('');
                $('#terms').val('');


              }
              alert(data);

            }
          });

        });

      });

    </script>
  </body>
</html>