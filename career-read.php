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
    <title>GWIA Careers</title>
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
            </ul>
          </div>
        </div>
      </nav>
      <!-- Intro Section-->
    </header>
    <br>

    <div class="container-fluid">

      <?php

        $id = base64_decode($_GET['id']);

        $sel = $pdo->prepare("SELECT * FROM open_job WHERE id = ?");
        $sel->bindParam(1, $id);
        $sel->execute();

        if($sel->rowCount() > 0){

          while($f = $sel->fetch()){

      ?>

      <h4 style="letter-spacing: 1px; word-spacing: 1px;">
        <i class="fas fa-briefcase"></i> <?=strtoupper($f['jtitle'])?>
      </h4>
      <p>
        <i class="fas fa-caret-square-right"></i> Location 
          <i class="fas fa-angle-right"></i> <?=$f['jlocate']?>
        <br>
        <i class="fas fa-caret-square-right"></i> Job Type 
          <i class="fas fa-angle-right"></i> <?=$f['jtype']?>
        <br>
        <i class="fas fa-caret-square-right"></i> Application Opened Till
          <i class="fas fa-angle-right"></i> <?=$f['jstop']?>
        <br>
      </p>
      <hr/>
      <br>

      <h5><i class="fas fa-arrow-circle-right"></i> Job Summary</h5>

      <p>
        <?=$f['jsum']?>
      </p>

      <hr/>
      <br>
      <h5><i class="fas fa-arrow-circle-right"></i> Job Duties</h5>

      <p>
        <?=$f['jduty']?>
      </p>

      <hr/>
      <br>
      <h5><i class="fas fa-arrow-circle-right"></i> Qualification Needed</h5>

      <p>
        <?=$f['jqualify']?>
      </p>

      <hr/>
      <br>

      <h5><i class="fas fa-arrow-circle-right"></i> Prefered Skills</h5>

      <p>
        <?=$f['jskill']?>
      </p>

        <!-- Full Height Modal Right -->
        <div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">

          <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
          <div class="modal-dialog modal-full-height modal-right" role="document">


            <div class="modal-content">
              <div class="modal-header" style="background: #33b5e5">
                <h4 class="modal-title w-100" id="myModalLabel" style="color:white;">Job Application</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <form method="post" enctype="multipart/form-data">

                  <div class="md-form">
                    <input class="form-control" id="email" type="text" name="sname" required="required"/>
                    <label for="email"><i class="fas fa-user"></i> Surname</label>
                  </div>

                  <div class="md-form">
                    <input class="form-control" id="email" type="text" name="oname" required="required"/>
                    <label for="email"><i class="fas fa-user"></i> Other name</label>
                  </div>

                  <div class="md-form">
                    <input class="form-control" id="email" type="email" name="email" required="required"/>
                    <label for="email"><i class="fas fa-envelope"></i> Email</label>
                  </div>

                  <div class="md-form">
                    <input class="form-control" id="email" type="text" name="country" required="required"/>
                    <label for="email"><i class="fas fa-home"></i> Country</label>
                  </div>

                  <input type="hidden" name="job" value="<?=$f['jtitle']?>">

                  <div class="md-form">
                    <i class="fas fa-file"></i>
                    <i>Please upload your C.V in PDF format only.</i>
                    <input class="form-control" type="file" name="photo" accept=".pdf" required="required"/>
                  </div>
                  <p></p>

                  <button class="btn btn-info btn-block ml-0" name="sub" type="submit"><i class="fas fa-paper-plane mr-2"></i> 
                    Submit Application
                  </button>
                  
                </form>

                <?php  

                  if(isset($_POST['sub'])){

                    $sn = $_POST['sname'];
                    $on = $_POST['oname'];
                    $em = $_POST['email'];
                    $co = $_POST['country'];
                    $jb = $_POST['job'];

                    $photo = $_FILES['photo']['tmp_name'];
                    $photo_name = $_FILES['photo']['name'];
                    $photo_size = $_FILES['photo']['size'];
                    $location = "job-file/". $photo_name;
                              
                    if($photo_size == 0 || $photo_size >999877){

                      echo'<script>alert("FILE SIZE SHOULD BE LESS THAN 1 MEGABYTE. PLEASE CHECK FILE SIZE BEFORE UPLOADING !!");</script>';

                    }else{

                      move_uploaded_file($photo, $location);
                      jobapp($pdo, $location, $sn, $on, $em, $co, $jb);

                    }

                  }

                ?>

              </div>
            </div>
          </div>
        </div>
        <!-- Full Height Modal Right -->

      <?php
          }

        }

      ?>

      <br>

      <a href="#" data-toggle="modal" data-target="#fullHeightModalRight" class="btn-block" style="padding: 15px; font-size: 20px;font-weight:bold; border-radius: 5px;border: 2px solid indigo;color: indigo;background: white;text-align: center;">
        APPLY HERE
      </a>
      
    </div>

    <br><br>
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
  </body>
</html>