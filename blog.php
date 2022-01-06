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
    <title>Our Blog</title>
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

    <div class="container">

      <?php

        $sel = $pdo->prepare("SELECT * FROM blog_post ORDER BY id DESC");
        $sel->execute();

        if($sel->rowCount() > 0){

          while($f = $sel->fetch()){

      ?>

        <div class="row">

          <div class="col-sm-12 col-md-4">
            <img class="card-img-top" src="adgwia/<?=$f['photo']?>" alt="<?=$f['title']?>">
          </div>

          <div class="col-sm-12 col-md-8">
            <h5 style="font-weight: bold;border-bottom: 1px solid #ddd;padding-top: 10px;">
              <?=strtoupper($f['title'])?>
            </h5>
            <p style="letter-spacing: 1px; text-align: justify;">
            <?=$f['para1']?>
            </p>  
            <a href="blog-read.php?id=<?=base64_encode($f['id'])?>" class="btn btn-info btn-sm" style="float: right;">
              Continue reading <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
          
        </div>
        <hr/>
        <br>

      <?php

          }

        }else{
          echo'<center style="color:red">No data yet !!</center>';
        }

      ?>
      
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
    <!-- Country code -->
    <script src="build2/js/jquery.countryselector.js"></script>
  </body>
</html>