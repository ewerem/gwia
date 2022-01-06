<?php
session_start();
ob_start();
include'../access/access.php';

if(!isset($_SESSION['tutor'])){
  header('location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Modules</title>
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link href="../adcss/b.css" rel="stylesheet">
    <link href="../adcss/md.css" rel="stylesheet">
    <link href="../styles/main.css" rel="stylesheet">
  <style type="text/css">
  	#dlink:hover{
      background: #000 !important;
      color: white !important;
    }

    #dlink2:hover{
      background: red !important;
      color: white !important;
    }

    @media screen and (max-width: 767px) and (orientation:portrait) {
      #navigation {
        display: none !important;
        /*tablet*/
      }
    }

    #plink2{
    	padding-bottom: 8px;
    }

    #plink{
    	letter-spacing: 0px;
    	color: black;
    	padding: 8px;
    }

    #plink:hover{
    	background: black;
    	color: white;
    	border-radius: 5px;
    }
    #plink4{
    	color: red;
    	padding: 8px;
    }
    #plink4:hover{
    	background: red;
    	color:white;
    	border-radius: 5px;
    }
    #clink{
      color:#000077;
    }
    #clink:hover{
      color:#4285F4;
    }
    #mlink:hover{
      letter-spacing: 1px !important;
      transition: 1s;
    }
  </style>
</head>
<body>
    <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background: #000033 !important;">
        <div class="container">
            <img src="../image/logo.jpg" style="width: 42px; height: 42px;border:1px solid white;padding: 0px !important;">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="course.php">
                  <i class="fas fa-arrow-circle-left"></i> Back
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" data-toggle="dropdown">Extrax</a>
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="tutor-dash.php" id="dlink">
                    <i class="fas fa-user"></i> Profile
                  </a>
                 <a class="dropdown-item" href="course.php" id="dlink">
                   <i class="fas fa-book"></i> Course Portal
                 </a>
                  <a class="dropdown-item" href="set.php" id="dlink">
                    <i class="fas fa-cogs"></i> Settings
                  </a>
                  </a>
                  <a class="dropdown-item" href="logout.php" id="dlink2">
                    <i class="fas fa-sign-out-alt"></i> Logout
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Intro Section-->
    </header>

    <div class="container-fluid">

      <div class="row">
              
        <div class="col-md-3 col-lg-2" id="navigation" style="border-right:5px solid #444;padding-bottom: 0px;height: 600px;margin-top: 0px;background: #eee;font-family: lucida sans">
              	
        	<center style="color:black; font-size:23px; background: white;padding: 10px;border:2px solid black; border-top:0px !important;">
    				<i class="fas fa-user-tie"></i> TUTOR
    			</center>

			<br>
			<p id="plink2">
				<a href="tutor-dash.php" id="plink"> <i class="fas fa-user"></i> Profile <i class="fas fa-angle-right"></i></a>	
			</p>
      <p id="plink2">
        <a href="course.php" id="plink"> <i class="fas fa-book"></i> Course Portal <i class="fas fa-angle-right"></i></a>  
      </p>
			<p id="plink2">
				<a href="set.php" id="plink"> <i class="fas fa-cogs"></i> Settings <i class="fas fa-angle-right"></i></a>	
			</p>
			<p id="plink2">
				<a href="logout.php" id="plink4"><i class="fas fa-sign-out-alt"></i> Logout <i class="fas fa-angle-right"></i></a>	
			</p>

        </div>
              
        <div class="col-sm-12 col-md-9 col-lg-10" style="height: 600px; overflow: auto;">

          <br>

          <h4 style="color: black;">
            <i class="fas fa-book"></i> 
            <?php  

              $user = $_SESSION['tutor'];

              $sel = $pdo->prepare("SELECT * FROM teacher WHERE email = ?");
              $sel->bindParam(1, $user);
              $sel->execute();

                if($sel->rowCount() > 0){

                  while($f = $sel->fetch()){

                    $cabr = $f['tcourse'];

                  }

                  $selc = $pdo->prepare("SELECT * FROM course WHERE abbr = '$cabr'");
                  $selc->execute();
                  if($selc->rowCount() > 0){
                    while($c = $selc->fetch()){
                       echo strtoupper($c['cname']);
                    }
                  }

                }
            ?> 
          </h4>

          <hr/><br>

          <?php

          $user = $_SESSION['tutor'];

          $sel = $pdo->prepare("SELECT * FROM teacher WHERE email = ?");
          $sel->bindParam(1, $user);
          $sel->execute();
          if($sel->rowCount() > 0){

            while($f = $sel->fetch()){

              $mc = $f['tcourse'];
            }

          }//end of getting course

          $sel2 = $pdo->prepare("SELECT * FROM c_modules WHERE mcourse = ?");
          $sel2->bindParam(1, $mc);
          $sel2->execute();
          if($sel2->rowCount() > 0){

            while($fc = $sel2->fetch()){

          ?>

            <h6 style="padding: 15px; border: 1px solid #aaa;border-radius: 5px;">
              <a href="#" id="mlink" style="color: #000;">
               MODULE <?=$fc['mnum']?> <i class="fas fa-angle-right"></i> <?=strtoupper($fc['mtitle'])?>
              </a>
              <a data-toggle="modal" data-target="#centralModalSm<?=$fc['id']?>" style="float: right;color:red">
                <i class="fas fa-times"></i>
              </a>
            </h6>
            <p></p>

                  <!-- modal delete post -->
                    <div class="modal fade" id="centralModalSm<?=$fc['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">

                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-sm" role="document">

                        <div class="modal-content">
                          <div class="modal-body">
                            <p></p>
                            <center>
                             DO YOU REALLY WANT TO DELETE THIS MODULE?
                            </center>
                            <p></p>
                          </div>
                          <div class="modal-footer justify-content-center">
                            <a href="d-course.php?id=<?=base64_encode($fc['id'])?>" class="btn btn-success">Yes</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>                        
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- modal delete post -->

          <?php
            }

          }else{
            echo'<center style="color:red">No data Yet !!</center>';
          }
          ?>

          <!-- //////////////////////////////////// -->
        </div>

          <br>

        </div>

      </div>
      
    <?php  

      if(isset($_GET['id'])){

        $id = base64_decode($_GET['id']);

        $sel = $pdo->prepare("SELECT * FROM mt_content WHERE mid = ?");
        $sel->bindParam(1, $id);
        $sel->execute();

        if($sel->rowCount() > 0){

          while($f = $sel->fetch()){

            unlink($f['file']);

          }

        }

        $d = $pdo->prepare("DELETE FROM c_modules WHERE id = ?");
        $d->bindParam(1, $id);
        $d->execute();

        $d2 = $pdo->prepare("DELETE FROM module_topics WHERE mid = ?");
        $d2->bindParam(1, $id);
        $d2->execute();

        $d3 = $pdo->prepare("DELETE FROM mt_content WHERE mid = ?");
        $d3->bindParam(1, $id);
        $d3->execute();

        if($d){

          echo'<script>alert("DELETED SUCCESSFULLY !!");</script>';
          echo'<meta http-equiv="refresh" content="0; url=d-course.php">';

        }

      }

    ?>

    <footer class="page-footer white center-on-small-only" style="">
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

    <script type="text/javascript" src="../adjs/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../adjs/po.js"></script>
    <script type="text/javascript" src="../adjs/b.js"></script>
    <script type="text/javascript" src="../adjs/md.js"></script>
    
  </body>
</html>