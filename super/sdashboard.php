<?php
session_start();
ob_start();
include'../access/access.php';

if(!isset($_SESSION['super'])){

  header('location:../index.php');

}

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GWIA SUPER</title>
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
          <a class="navbar-brand" href="#">
            <img src="../image/logo.jpg" style="width: 42px; height: 42px;border:1px solid white;padding: 0px !important;">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <i class="fas fa-power-off"></i> Logout</a>
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
                  <h5 style="color: black;font-weight: bold;font-family: lucida sans;">Welcome Super Admin</h5>
                </center>

                <p></p>

                <form method="post" class="container">
              
                  <p style="font-family: lucida sans"><i class="fas fa-lock" style="padding: 4px; border-radius: 50%;"></i> Old Password</p>
                  <input name="opass" class="form-control" type="password" required style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
                  <br>

                  <p style="font-family: lucida sans"><i class="fas fa-lock" style="padding: 4px; border-radius: 50%;"></i>New Password</p>
                  <input name="npass" class="form-control" type="password" required style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
                  <br>

                  <p style="font-family: lucida sans"><i class="fas fa-lock" style="padding: 4px; border-radius: 50%;"></i>Retype New Password</p>
                  <input name="cpass" class="form-control" type="password" required style="padding: 5px;color:black;border:1px solid #ccc; width:100%;border-bottom:3px solid black !important;font-size: 16px;">
                  <br>

                  <center>
                    <button name="subpas" style="padding: 15px 20px; background: #000044; color: white;">
                      Change Password <i class="fa fa-lock"></i>
                    </button>
                  </center>

                </form>
                <br><br>

                <?php  

                  if(isset($_POST['subpas'])){

                    $op = $_POST['opass'];
                    $np = $_POST['npass'];
                    $cp = $_POST['cpass'];

                    $chk = $pdo->prepare("SELECT * FROM admin_gwia WHERE pass = ?");
                    $chk->bindParam(1, $op);
                    $chk->execute();

                    if($chk->rowCount() > 0){

                      if($np != $cp){

                        echo'<script>alert("PASSWORD MIS-MATCHED !!");</script>';

                      }else{

                        $upd = $pdo->prepare("UPDATE admin_gwia SET pass = '$np'");
                        $upd->execute();

                        if($upd){

                          echo'<script>alert("PASSWORD CHANGED SUCCESSFULLY !!");</script>';

                        }

                      }

                    }else{

                      echo'<script>alert("YOU CANNOT CHANGE THIS PASSWORD !!");</script>';

                    } 

                  }

                ?>

                <a href="logout.php" class="btn btn-danger btn-block">
                <i class="fas fa-power-off"></i>  Logout
                </a>

                <br>

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