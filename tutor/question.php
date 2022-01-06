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
    <title>Course Test Questions</title>
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

          <hr/>

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

          $sel2 = $pdo->prepare("SELECT * FROM course_question WHERE course = ? ORDER BY id ASC");
          $sel2->bindParam(1, $mc);
          $sel2->execute();
          if($sel2->rowCount() > 0){

            echo'<h5 style="text-align:center;color:#550000;">';

              echo $sel2->rowCount().' TEST QUESTIONS';

            echo'</h5><br>';

            echo'<div style="height: 400px; border:1px solid grey; border-radius: 5px; padding: 10px; overflow: auto;">';

            $count = 1;
            while($fc = $sel2->fetch()){

          ?>

            <h5 style="font-size: 20px;">
              Question <?=$count++;?> <i class="fas fa-angle-right"></i> <?=strtoupper($fc['question'])?>
            </h5>
            <p></p>

            <h6>
              (A) <i class="fas fa-angle-right"></i> <?=$fc['optA']?>
            </h6>

            <h6>
              (B) <i class="fas fa-angle-right"></i> <?=$fc['optB']?>
            </h6>

            <h6>
              (C) <i class="fas fa-angle-right"></i> <?=$fc['optC']?>
            </h6>

            <h6>
              (D) <i class="fas fa-angle-right"></i> <?=$fc['optD']?>
            </h6>

            <h5 style="color:green;">
              Answer <i class="fas fa-angle-right"></i> <?=strtoupper($fc['answer'])?>
            </h5>

            <a href="question.php?id=<?=base64_encode($fc['id'])?>" class="btn btn-danger btn-sm" title="Remove Question">
              <i class="fas fa-trash"></i> Remove
            </a>

            <br><hr>

          <?php
            }
            $count++;
            echo'</div>';

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

        $d = $pdo->prepare("DELETE FROM course_question WHERE id = ?");
        $d->bindParam(1, $id);
        $d->execute();

        if($d){

          echo'<script>alert("DELETED SUCCESSFULLY !!");</script>';
          echo'<meta http-equiv="refresh" content="0; url=question.php">';

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