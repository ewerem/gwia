<?php  

session_start();
ob_start();
include'access/access.php';

?>

<!DOCTYPE html>
<html class="full-height" lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GWIA</title>
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
<body id="top">
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
              <li class="nav-item"><a class="nav-link" href="#aboutus">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" data-toggle="dropdown">Student</a>
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="student/slogin.php" id="dlink"> <i class="fas fa-arrow-circle-right"></i> Student Login</a>
                  <a class="dropdown-item" href="reg.php" id="dlink"> <i class="fas fa-arrow-circle-right"></i> Student Registration</a>
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
                    <i class="fas fa-arrow-circle-right"></i>Careers
                  </a>
                </div>
              </li>
            </ul><a class="btn my-0" href="reg.php" style="border:2px solid white;border-radius:30px;">Join Us</a>
          </div>
        </div>
      </nav>
      <!-- Intro Section-->
      <section class="view hm-gradient" id="intro">
        <div class="full-bg-img d-flex align-items-center">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-md-10 col-lg-6 text-center text-md-left margins">
                <div class="white-text">
                  <div class="wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive font-bold mt-sm-5">Greatenant World Institute Academic, GWIA UNIVERSITY</h1>
                    <div class="h6">
                      is establish to enhance 4th industrial revolution courses that are results oriented and social solution base providers to change ancient curriculum in education system, adding value to the world.
                    </div>
                  </div><br>
                  <div class="wow fadeInRight" data-wow-delay="0.5s">
                    <a class="btn btn-white dark-grey-text font-bold ml-0" href="reg.php"> Join Us</a>
                    <a class="btn btn-outline-white" href="blog.php" style="border-radius: 30px !important;"> Blog</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>

<div id="content">
<section class="row no-gutters" id="features">
  <div class="col-lg-3 col-md-6 col-sm-12 deep-purple lighten-1 text-white">
    <div class="p-5 text-center wow zoomIn" data-wow-delay=".1s">
      <i class="fas fa-binoculars fa-2x"></i>
      <div class="h5 mt-3">Vision</div>
      <p class="mt-5">
        To raise over one billion minds as captains of industries
      </p>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 purple lighten-1 text-white">
    <div class="p-5 text-center wow zoomIn" data-wow-delay=".2s">
      <i class="fas fa-file-alt fa-2x"></i>
      <div class="h5 mt-3">Mision</div>
      <p class="mt-5">
        To revolutionize the Africa education system using digital power
      </p>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 teal lighten-1 text-white">
    <div class="p-5 text-center wow zoomIn" data-wow-delay=".3s">
      <i class="fas fa-user-tie fa-2x"></i>
      <div class="h5 mt-3">Our Mind Set</div>
      <p class="mt-5">
        With one percent (1%) of greatenant the world will change
      </p>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 lighten-1 text-white" style="background: #3949ab;">
    <div class="p-5 text-center wow zoomIn" data-wow-delay=".4s">
      <i class="fas fa-bullhorn fa-2x"></i>
      <div class="h5 mt-3"> Core Values</div>
      <p class="mt-5">
        Integrity, Knowledge, Service, Selflessness, Discipline, Self-development and Diligence
      </p>
    </div>
  </div>
</section>

<section class="container-fluid py-4">
  <!--  News Letter -->

  <div class="row" style="border:1px solid #ddd;padding-bottom: 18px;">

    <div class="col-sm-12 col-md-3">
      <br>
      <img class="card-img-top" src="image/mainedu.jpg" alt="job post">
    </div>

    <div class="col-sm-12 col-md-6 wow fadeInUp">
      <br>
      <h6 class="deep-purple darken-1" style="padding: 5px; color: white;">
        <i class="far fa-newspaper"></i> Recent News
      </h6>

      <marquee direction="up" scrollamount="1" style="height: 130px;">
        <?php

          $sel = $pdo->prepare("SELECT * FROM news ORDER BY id DESC");
          $sel->execute();

          if($sel->rowCount() > 0){

            while($f = $sel->fetch()){

        ?>

          <p style="font-size: 14px;">
            <strong style="font-size: 12px !important; font-weight: bold;border-bottom: 1px solid #ddd;color:#770000;">
              <?=strtoupper($f['head'])?>
            </strong>
            <small>
              <?=date("d/M/Y", strtotime($f['time']))?>
            </small>
            <br>

            <i style="text-align: justify;">
              <?=$f['content']?>
            </i>

          </p>

        <?php
          }

         }else{
          echo'<center style="color:red;">No News !!</center>';
         }
        ?>

      </marquee>
  
    </div>

    <div class="col-sm-12 col-md-3">
      <br>
      <img class="card-img-top" src="image/ed2.jpg" alt="job post">
    </div>
    
  </div>

</section>

<section class="text-center py-4" id="about">
  <div class="container">
    <center>
      <img src="image/logo2.jpg" class="wow bounceIn" style="width:150px; height: 150px;border-radius: 20px;">
    </center>
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">Why join GWIA?</h2>
      <p class="px-5 mb-5 pb-3 lead" style="color: #444;">
        Hidden within you lies creativities, solutions, ideas and investment possibilities.Exploring out these ideas, creativities and potentials in you is what we help you do. As we revolutionize the system of education using digital power.We want to externalize in you an icon of object that cannot be ignored, a solution  for societal problems.
      </p>
    </div>
  </div>
</section>

<section class="text-center" style="margin-top: -40px;">
  <div class="container-fluid deep-purple darken-1 text-white">
      <div class="container wow fadeInRight">
        <h2 class="h1 pt-5 pb-3">What we do</h2>
        <div class="row pb-5">

          <div class="col-sm">
            <p class="px-5">
              <i class="far fa-arrow-alt-circle-right"></i> Creative systematic learning
               <br>
               <i class="far fa-arrow-alt-circle-right"></i> Sound academic per excellent
            </p>
          </div>

          <div class="col-sm">
            <p class="px-5">
              <i class="far fa-arrow-alt-circle-right"></i> Entrepreneurial thinking education
               <br>
               <i class="far fa-arrow-alt-circle-right"></i> Explorative learning for holistic development
            </p>
          </div>

          <div class="col-sm">
            <p class="px-5">
              <i class="far fa-arrow-alt-circle-right"></i> Personal developement
               <br>
               <i class="far fa-arrow-alt-circle-right"></i> Online Bookshop
            </p>
          </div>
          
        </div>
        
      </div>
    </div>
</section>

<section class="py-5" id="aboutus">
  <div class="container">
    <div class="row wow fadeInLeft" data-wow-delay=".3s">
      <div class="col-lg-6 col-xl-5 pr-lg-5 pb-5"><img class="img-fluid rounded z-depth-2" src="image/abt.jpg" alt="project image"/></div>
      <div class="col-lg-6 col-xl-7 pl-lg-5 pb-4">
        <div class="row mb-3">
          <div class="col-12">
           <h5 class="font-bold">About Us</h5>
            <p style="color: #444;word-spacing: 2px;text-align: justify;">
              Greatenant World Institute Academic, GWIA University is a learning academy for Africa revolution on education. A platform founded by Greatenant Odubanjo Adeoluwa to raise over one billion minds as captains of industries before 2050 and beyond irrespective of their discipline. To create a future and build Africa of our dream through digital learning was the reason for bringing this revolution. <br>
              The institution will be running different cohort courses including personal developement education (PDE), diploma and degree courses respectively. The institution is passionate to bring explorative learning both digital wise and one on one class across Africa continent and the world at large. <br>
              Greatenant World Institute Academic, GWIA UNIVERSITY is affliated to Africa University Without Walls (AUWOW AFRICA).
            </p>
          </div>
        </div>
        </div>
      </div>
    </div>
</section>

<section id="courses" style="background-image:url('image/mainedu.jpg');">
  <div class="container" style="background: rgba(0, 0, 0, 0.7);">
    <div class="wow fadeIn">
      <center style="color: white;">
        <h2 class="h1 pt-5 pb-3"><i class="fas fa-book-reader"></i> COURSES</h2>
        <p class="px-5 mb-5 pb-3 lead">
          Personal development education cohort courses are designed and put together by world class professionals, enhancing 4th revolution courses that are results oriented and societal solution base providers to change ancient curriculum in education system, adding value to the world.
        </p>
      </center>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-r">
        <div class="card wow zoomIn" style="background: black;">
          <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5" style="text-align: center;">Certificate <br> CPDE</div>
              <div class="py-5">
                <span style="font-size: 25px;">$50</span><span class="display-5">/2wks</span>
              </div>
              <ul class="list-unstyled">
                <li>
                  <p>Certificate in Personal Development Education</p>
                </li>
                <br><br><br><br>
                <li>
                  <p>- Enterpreneurship Studies </p>
                </li>
              </ul>
              <br><br><br><br>
              <a href="reg.php" class="btn btn-outline-white mt-5" style="border-radius: 20px;">Enrol Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-r">
        <div class="card card-image wow zoomIn" style="background: teal;">
          <div class="text-white text-center pricing-card d-flex align-items-center py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5" style="text-align: center;">Diploma <br> DPDE</div>
              <div class="py-5">
                <span style="font-size: 25px;">$100</span><span class="display-5">/4wks</span>
              </div>
              <ul class="list-unstyled">
                <li>
                  <p>Diploma in Personal Development Education</p>
                </li>
                <br><br>
                <li>
                  <p>- Enterpreneurship Studies</p>
                  <p>- Business Education</p>
                  <p>- Digital Skills Education</p>
                </li>
              </ul>
              <br>
              <p></p>
              <a href="reg.php" class="btn btn-outline-white mt-5" style="border-radius: 20px;">Enrol Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-r">
        <div class="card card-image wow zoomIn teal darken-3">
          <div class="text-white text-center pricing-card d-flex align-items-center py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5">Advance Diploma <br> ADPDE</div>
              <div class="py-5">
                <span style="font-size: 25px;">$150</span><span class="display-5">/6wks</span>
              </div>
              <ul class="list-unstyled">
                <li>
                  <p>Advance Diploma in Personal Development Education</p>
                </li>
                <li>
                  <p>
                     - Personal Development <br>
                     - Enterpreneurship Studies <br>
                     - Emotional Intelligence <br>
                     - Business Education<br>
                     - Digital Skill Management<br>
                     - Leadership Education<br>
                     - Creativity Development<br>
                    </p>
                </li>
              </ul>
              <a href="reg.php" class="btn btn-outline-white mt-4" style="border-radius: 20px;">Enrol Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-r">
        <div class="card card-image wow zoomIn" style="background: indigo;">
          <div class="text-white text-center pricing-card d-flex align-items-center py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5">Master Diploma <br> MDPDE</div>
              <div class="py-5">
                <span style="font-size: 25px;">$200</span><span class="display-5">/8wks</span>
              </div>
              <ul class="list-unstyled">
                <li>
                  <p>Master Diploma in Personal Development Education</p>
                </li>
                <li>
                  <p>
                    - Entrepreneurship Studies <br>
                    - Business Education <br>
                    - Leadership with Creativity <br>
                    - Money Management <br>
                    - Financial Skills <br>
                    - Emotional Intelligence <br>
                    - Self Productivity Management
                  </p>
                </li>
              </ul>
              <a href="reg.php" class="btn btn-outline-white mt-5" style="border-radius: 20px;">Enrol Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-3 deep-purple lighten-1 text-white" id="pricing">
  <div class="container">
    <div class="wow fadeIn text-center">
      <p class="px-5 mb-5 pb-3" style="color: white;font-family: mv boli;font-size: 20px;">
        The institution operates both online and offline learning. We also provide and offer diploma and degree programmes respectively. These faculties will run later.
      </p>
    </div>
    <div class="row">

          <div class="col-sm">
            <p class="wow swing">
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Health Science and Technology
               <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Science and Technology
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of African Education
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Art's
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of African Languages and Linguistics
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Sports and Gymnastics

            </p>
          </div>

          <div class="col-sm">
            <p class="wow swing">
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Internet of Things
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Africa Rural Development Digitalization
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Enterpreneurship and Business
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Law
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Marine Sciences
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Space Engineering
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Environment Science
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of African Tourism
            
            </p>
          </div>

          <div class="col-sm">
            <p class="wow swing">
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Robotics
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Information Technology
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Agriculture
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Management
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Structural Science
              <br>
              <i class="far fa-arrow-alt-circle-right"></i> Faculty of Music
        
            </p>
          </div>
          
        </div>
  </div>
</section>

<section class="py-5 container-fluid" id="team">

  <center>
    <h1 style="font-weight: bold;color: #000033;"><i class="far fa-handshake"></i> PARTNERS</h1>
  </center>
  <br>
  <div class="row wow fadeInLeft" style="height: 170px; overflow: auto; border:1px solid #eee;padding: 5px;border-radius: 5px;">

    <div class="col-sm-12 col-md-6 col-lg-6">
      <center>
        <img src="image/part.jpg" style="width: 150px; height:150px;">
      </center>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6">
      <center>
        <img src="image/jj.jpg" style="width: 160px; height:150px;">
      </center>
    </div>
    
  </div>
</section>

<section id="contact">

    <div class="container-fluid" style="background: #000022">
            <h2 class="h1 text-white pt-2 pb-2 text-center">Contact us</h2>
            <center>
            <i class="fas fa-arrow-alt-circle-down pb-2" style="font-size: 22px;color: white;"></i>
            </center>
    </div>

    <br>

    <center>
      <marquee behavior="alternate" direction="up" scrollamount="2" style="width: 140px;height: 160px;">
          <img src="image/logo2.jpg" style="width: 140px; height:140px;border-radius: 20px;">
      </marquee>
    </center>

  <div class="py-3">
    <div class="container">
      <div class="card mb-5 wow fadeInUp" data-wow-delay=".4s">
        <div class="card-body p-5">
          <div class="row">

            <div class="col-md-4">
              <ul class="list-unstyled text-center">
                <li class="mt-4"><i class="fa fa-map-marker-alt indigo-text fa-2x"></i>
                  <p class="mt-2">Greatenant world, 52, 0simore Street, Ijebu-Ode, Ogun State, Nigeria, West Africa.</p>
                </li>
                <li class="mt-4"><i class="fa fa-phone indigo-text fa-2x"></i>
                  <p class="mt-2">+234-8130044376 <br> +234-8071515872</p>
                </li>
                <li class="mt-4"><i class="fa fa-envelope indigo-text fa-2x"></i>
                  <p class="mt-2">gwia.edu@gmail.com <br> adeodus4ies@gmail.com</p>
                  <p>
                    <a href="https://m.facebook.com/Greatenant-World-Institute-Academic-Gwia-100287424748915/?ref=opera_speed_dial" target="_blank">
                      <i class="fab fa-facebook-square" style="font-size: 35px;color: #000077;padding: 5px;"></i>
                    </a>
                    <a href="https://www.instagram.com/gwiauniversity_/" target="_blank">
                      <i class="fab fa-instagram" style="font-size: 35px;color: #000077;padding: 5px;"></i>
                    </a>
                    <a href="https://mobile.twitter.com/GwiaUniversity" target="_blank">
                      <i class="fab fa-twitter-square" style="font-size: 35px;color: #000077;padding: 5px;"></i>
                    </a>
                  </p>
                </li>
              </ul>
            </div>

            <div class="col-md-8">
              <br><br>
              <form method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="name" type="text" name="fname" required="required"/>
                      <label for="name">Your name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="email" type="email" name="email" required="required"/>
                      <label for="email">Email</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="subject" type="text" name="phone" required="required"/>
                      <label for="subject">Phone</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="subject" type="text" name="country" required="required"/>
                      <label for="subject">Country</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form">
                      <textarea class="md-textarea" id="message" name="msg" required="required"></textarea>
                      <label for="message">Your message</label>
                    </div>
                  </div>
                </div>
                <div class="center-on-small-only mb-4">
                  <button class="btn btn-indigo ml-0" type="submit" name="send"><i class="fas fa-paper-plane mr-2"></i> Send</button>
                </div>
              </form>

              <?php  

                if(isset($_POST['send'])){

                  $fn = $_POST['fname'];
                  $em = $_POST['email'];
                  $ph = $_POST['phone'];
                  $co = $_POST['country'];
                  $msg = $_POST['msg'];

                  contact($pdo, $fn, $em, $ph, $co, $msg);

                }

              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid" id="team">
  <div class="row wow fadeInRight" style="height: 140px; overflow: auto; border:1px solid #eee;padding: 5px;border-radius: 5px;">

    <div class="col-sm-12 col-md-4 col-lg-4">
      <center>
        <img src="image/gfc.png" style="width: 130px; height:130px;">
      </center>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4">
      <center >
        <img src="image/gwi.jpg" style="width: 180px; height:130px;">
      </center>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4">
      <center >
        <img src="image/logo.jpg" style="width: 130px; height:130px;">
      </center>
    </div>
    
  </div>
</section>
<br><br><br>

  <div class="container-fluid">

    <!-- Translate -->
    
        <div id="google_translate_element" style="margin-top: -30px;"></div>
        
        <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
    
    <!-- end of translate -->

    <a href="#top">
      <i class="fas fa-arrow-alt-circle-up pb-2" style="font-size: 38px;color: black;float:right;margin-top: -45px;"></i>
    </a>
    
  </div>
  <br>

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
                <input class="form-control" id="pass" type="password" name="pass" required="required"/>
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

    <footer class="page-footer indigo darken-2 center-on-small-only pt-4 mt-0">
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
              <a href="#aboutus" style="color: white;">
                <i class="fas fa-arrow-alt-circle-right"></i> About us
              </a>
            </p>
            <p>
              <a href="#courses" style="color: white;">
                <i class="fas fa-arrow-alt-circle-right"></i> Courses
              </a>
            </p>
            <p>
              <a href="#contact" style="color: white;">
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
          &copy; Copyright <script> var d = new Date();var n = d. getFullYear(); document.write(n);</script> <a href="adgwia/glogin.php" style="color:#aaa;">GWIA</a>
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>new WOW().init();</script>

  </body>
</html>