<?php
session_start();
ob_start();
include'../access/access.php';

if(!isset($_SESSION['user'])){

  header('location:slogin.php');

}else{

  if(isset($_GET['paid'])){

    $p = $_GET['paid'];
    $m = $_SESSION['user'];

    $pay = $pdo->prepare("UPDATE student SET payment = ? WHERE email = ?");
    $pay->bindParam(1, $p);
    $pay->bindParam(2, $m);
    $pay->execute();

    if($pay){
      header('location:student.php');
    }

  }//--- activating account from visa

  //----------------------

  $user = $_SESSION['user'];
  $n = 'no';

  $get = $pdo->prepare("SELECT * FROM student WHERE email = ? AND payment = ?");
  $get->bindParam(1, $user);
  $get->bindParam(2, $n);
  $get->execute();

    if($get->rowCount() > 0){

?>

<!DOCTYPE html>
<html class="full-height" lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student</title>
    <meta name="keywords" content="GWIA, GFC, Greatenant, online school, university, digital learning, africa school, online class"/>
    <meta name="description" content="Greatenant World Institute Academy, GWIA university a redefining tertiary learning institution that want to revolutionize the Africa system education through digital learning."/>
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link href="../adcss/b.css" rel="stylesheet">
    <link href="../adcss/md.css" rel="stylesheet">
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
          <a class="navbar-brand" href="#">
            <img src="../image/logo.jpg" style="width: 42px; height: 42px;border:1px solid white;padding: 0px !important;">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
  
    <div class="container">
      
      <?php  

        $user = $_SESSION['user'];

        $sel = $pdo->prepare("SELECT * FROM student WHERE email = ?");
        $sel->bindParam(1, $user);
        $sel->execute();

          if($sel->rowCount() > 0){

            while($f = $sel->fetch()){
      ?>
            <br>
            <h4 style="letter-spacing: 1px; word-spacing: 1px;text-align: center;">
              Please pay the course fee for 
              <?php 

                $cabr = $f['course'];
                $selc = $pdo->prepare("SELECT * FROM course WHERE abbr = '$cabr'");
                $selc->execute();
                if($selc->rowCount() > 0){
                  while($c = $selc->fetch()){
                    echo strtoupper($c['cname']).' Course fee is $'.$c['costd'];
                  }
                }

              ?> 
            </h4>
            <hr/>

            <br><br>
              <div class="accordion" id="accordionExample275">
                
                <div class="card z-depth-0 bordered" style="border-bottom:1px solid #bbb;">
                  <div class="card-header" id="headingTwo2">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                        <i class="far fa-arrow-alt-circle-right"></i> Pay With Skrill
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo2" class="collapse show" aria-labelledby="headingTwo2"
                    data-parent="#accordionExample275">
                    <div class="card-body">

                      <center>
                        <p style="font=size: 14px;">
                          You can open a skrill account <a href="https://account.skrill.com/signup?rid=140611216" target="_blank" style="color: blue">Here</a> if you don't have an account with Skrill
                        </p>
                        <br>
                        <img src="../image/skr2.png">
                        <br><br>
                        <h5>
                          YOU ARE PAYING
                          <?php 

                            $cabr = $f['course'];
                            $selc = $pdo->prepare("SELECT * FROM course WHERE abbr = '$cabr'");
                            $selc->execute();
                            if($selc->rowCount() > 0){
                              while($c = $selc->fetch()){
                                echo '$'.$c['costd'];
                                $camtd = $c['costd'];
                                $camtn = $c['costn'];
                              }
                            }

                          ?>
                          <p></p>
                          <i>Skrill email</i> <i class="fas fa-arrow-alt-circle-right"></i> gwia.edu@gmail.com
                          <p></p>
                          <i style="color: green">After payment fill the form bellow and click activate my account </i>
                        </h5>
                      </center>

                      <br>
                      <center>
                      <form method="post">

                        <input type="hidden" name="email" value="<?=$_SESSION['user']?>" id="defaultContactFormEmail" class="form-control mb-4" readonly>

                        <input type="hidden" name="course" value="<?=$f['course']?>" id="defaultContactFormEmail" class="form-control mb-4">

                        <input type="hidden" name="amt" value="<?php echo '$'.$camtd.' - '.$camtn?>" id="defaultContactFormEmail" class="form-control mb-4">

                        <input type="email" class="form-control" name="sem" placeholder="Skrill Email" style="width:80%;" required>

                        <p></p>
                        <button class="btn btn-success btn-lg" name="skrill">
                          Activate My Account <i class="fas fa-arrow-alt-circle-right"></i>
                        </button>
                        
                      </form>

                        <?php  
                          if(isset($_POST['skrill'])){

                            $user = $_POST['email'];
                            $cour = $_POST['course'];
                            $amot = $_POST['amt'];
                            $sema = $_POST['sem'];
                            $chan = 'Skrill';

                              $ins = $pdo->prepare("INSERT INTO payment (p_channel,user,course,amt,email,time) VALUES (?,?,?,?,?,CURRENT_TIMESTAMP)");
                              $ins->bindParam(1, $chan);
                              $ins->bindParam(2, $user);
                              $ins->bindParam(3, $cour);
                              $ins->bindParam(4, $amot);
                              $ins->bindParam(5, $sema);
                              $ins->execute();

                              if($ins){
                                echo'<script>alert("ACTIVATION REQUEST RECEIVED SUCCESSFULLY. ACCOUNT WILL BE ACTIVATED WITHIN 24 HOURS !!");</script>';
                                echo'<meta http-equiv="refresh" content="0; url=student.php">';
                              }

                          }
                        ?>

                      </center>
                      
                    </div>
                  </div>
                </div>
                <br>
                <div class="card z-depth-0 bordered" style="border-bottom:1px solid #bbb;">
                  <div class="card-header" id="headingThree2">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                        <i class="far fa-arrow-alt-circle-right"></i> Pay With PayPal
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree2" class="collapse show" aria-labelledby="headingThree2"
                    data-parent="#accordionExample275">
                    <div class="card-body">
                      
                      <center>
                        <p style="font=size: 14px;">
                          You can open a PayPal account <a href="https://www.paypal.com/ng/welcome/signup/#/email_password" target="_blank" style="color: blue">Here</a> if you don't have an account with Skrill
                        </p>
                        <br>
                        <img src="../image/paypal.png">
                        <br><br>
                        <h5>
                          YOU ARE PAYING
                          <?php 

                            $cabr = $f['course'];
                            $selc = $pdo->prepare("SELECT * FROM course WHERE abbr = '$cabr'");
                            $selc->execute();
                            if($selc->rowCount() > 0){
                              while($c = $selc->fetch()){
                                echo '$'.$c['costd'];
                              }
                            }

                          ?>
                          <p></p>
                          <i>Paypal email</i> <i class="fas fa-arrow-alt-circle-right"></i> gwia.edu@gmail.com
                          <p></p>
                          <i style="color: green">After payment fill the form bellow and click activate my account </i>
                        </h5>
                      </center>

                      <br>
                      <center>
                      <form method="post">

                        <input type="hidden" name="email" value="<?=$_SESSION['user']?>" id="defaultContactFormEmail" class="form-control mb-4" readonly>

                        <input type="hidden" name="course" value="<?=$f['course']?>" id="defaultContactFormEmail" class="form-control mb-4">

                        <input type="hidden" name="amt" value="<?php echo '$'.$camtd.' - '.$camtn?>" id="defaultContactFormEmail" class="form-control mb-4">

                        <input type="email" class="form-control" name="pem" placeholder="PayPal Email" style="width:80%;" required>

                        <p></p>
                        <button class="btn btn-success btn-lg" name="paypal">
                          Activate My Account <i class="fas fa-arrow-alt-circle-right"></i>
                        </button>
                        
                      </form>

                        <?php  
                          if(isset($_POST['paypal'])){

                            $user = $_POST['email'];
                            $cour = $_POST['course'];
                            $amot = $_POST['amt'];
                            $sema = $_POST['pem'];
                            $chan = 'PayPal';

                              $ins = $pdo->prepare("INSERT INTO payment (p_channel,user,course,amt,email,time) VALUES (?,?,?,?,?,CURRENT_TIMESTAMP)");
                              $ins->bindParam(1, $chan);
                              $ins->bindParam(2, $user);
                              $ins->bindParam(3, $cour);
                              $ins->bindParam(4, $amot);
                              $ins->bindParam(5, $sema);
                              $ins->execute();

                              if($ins){
                                echo'<script>alert("ACTIVATION REQUEST RECEIVED SUCCESSFULLY. ACCOUNT WILL BE ACTIVATED WITHIN 24 HOURS !!");</script>';
                                echo'<meta http-equiv="refresh" content="0; url=student.php">';
                              }

                          }
                        ?>

                      </center>

                    </div>
                  </div>
                </div>
                <br>
                
              </div>

      <?php
            }

          }
        //------------------------
      ?>

    </div>   

    <br><br><br>
    <footer class="page-footer white center-on-small-only" style="margin-top: -20px;">
      <div class="footer-copyright" style="background: #000033">
        <div class="container-fluid">
          <p></p>
          <center>
            &copy; Copyright <script> var d = new Date();var n = d. getFullYear(); document.write(n);</script> GWIA
          </center>
          <p></p>
        </div>
      </div>
    </footer>   

    <!-- ending -->
    <script type="text/javascript" src="../adjs/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../adjs/po.js"></script>
    <script type="text/javascript" src="../adjs/b.js"></script>
    <script type="text/javascript" src="../adjs/md.js"></script>
    <script>new WOW().init();</script>
  </body>
</html>

<?php

    }else{

      header('location:stud-dash.php');

    }

}
?>