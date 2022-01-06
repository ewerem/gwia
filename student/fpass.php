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
    <title>Forget Password</title>
    <meta name="keywords" content="GWIA, GFC, Greatenant, online school, university, digital learning, africa school, online class"/>
    <meta name="description" content="Greatenant World Institute Academy, GWIA university a redefining tertiary learning institution that want to revolutionize the Africa system education through digital learning."/>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">

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
              <li class="nav-item"><a class="nav-link" href="slogin.php">
              	<i class="far fa-arrow-alt-circle-left"></i> Back</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Intro Section-->
      <section class="view hm-gradient" id="intro">
        <div class="full-bg-img d-flex align-items-center">
          <div class="container">

            <div class="row no-gutters" style="height: 700px !important;">
              
              <div class="col-sm-12 col-md-3"></div>
              <div class="col-sm-12 col-md-6">
                <br><br><br>
                <center>
                  <marquee behavior="alternate" direction="up" scrollamount="2" style="width: 100px;height: 120px;">
                      <img src="../image/logo2.jpg" style="width: 100px; height:100px;border-radius: 20px;">
                  </marquee>
                  <h5 style="color: white;font-weight: bold;">FORGET PASSWORD</h5>
                </center>

                <p></p>

                <?php  

                  $result = '';

                  if(isset($_POST['sub'])){

                    $em = $_POST['email'];

                    $get = $pdo->prepare("SELECT * FROM student WHERE email = ?");
                    $get->bindParam(1, $em);
                    $get->execute();

                    if($get->rowCount() > 0){
                      while($fp = $get->fetch()){
                        $msg = $fp['pass'];
                      }
                    }

                    //sending mail to user email

                    require'../phpmailer/PHPMailerAutoload.php';
                    $mail = new PHPMailer;

                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 587;
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = 'tls';
                    $mail->Username = 'gwia.edu@gmail.com';
                    $mail->Password = 'gwia@2020';

                    $mail->setFrom('gwia.edu@gmail.com');
                    $mail->addAddress($em);
                    
                    $mail->isHTML(true);
                    $mail->Subject = 'GWIA PASSWORD RECOVERING';
                    $mail->Body = '<h3>Your Password is '.$msg.'</h3>
                                  <h5>You are adviced to change your password immediately after you login. Thanks</h5>';

                    if(!$mail->send()){
                      $result = 'Something went wrong, Please try again';
                    }else{
                      $result = 'If this email exist with us, we have send your password to your email. Plseas check your spam if you did not see the mail. Thanks';
                    }

                  }

                ?>

                <!-- end of sending email -->

                <form method="post" style="border:2px dashed #0d47a1; padding: 10px;background: white;">

                  <center>
                    <p style="color: green; font-size:14px">
                      <?= $result; ?>
                    </p>
                  </center>
                  <p></p>
        
                  <p style="font-family: lucida sans"><i class="fas fa-envelope" style="padding: 4px;"></i> Enter your email</p>
                  <input class="form-control form-control-lg" name="email" type="email" style="border:1px solid #0d47a1;" required>
                  
                  <button name="sub" class="btn btn-lg btn-block" style="background: #0d47a1;color: white;">
                      submit <i class="far fa-send"></i>
                  </button>
                  <p></p>

                </form>

                <br><br>
              </div>
              <div class="col-sm-12 col-md-3"></div>

            </div>
            
          </div>
        </div>
      </section>
    </header>
    <br><p></p>
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

    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script>new WOW().init();</script>
  </body>
</html>