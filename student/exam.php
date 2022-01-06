<?php
session_start();
ob_start();
include'../access/access.php';

if(!isset($_SESSION['user'])){
  header('location:slogin.php');
}
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exams</title>
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

    #dlink2:hover{
      background: #770000 !important;
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
    	color: white;
    	padding: 8px;
    }

    #plink:hover{
    	background: white;
    	color: black;
    	border-radius: 5px;
    }
    #plink4{
    	color: orange;
    	padding: 8px;
    }
    #plink4:hover{
    	background: white;
    	color:red;
    	border-radius: 5px;
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
      <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container">
            <img src="../image/logo.jpg" style="width: 42px; height: 42px;border:1px solid white;padding: 0px !important;">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" data-toggle="dropdown">Extrax</a>
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="stud-dash.php" id="dlink">
                    <i class="fas fa-user"></i> Profile
                  </a>
                  <a class="dropdown-item" href="#" id="dlink" data-toggle="modal" data-target="#basicExampleModal">
                   <i class="fas fa-flag"></i> Notice
                 </a>
                  <a class="dropdown-item" href="class.php" id="dlink">
                    <i class="fas fa-book-reader"></i> Enter Class
                  </a>
                  <a class="dropdown-item" href="set.php" id="dlink">
                    <i class="fas fa-cogs"></i> Settings
                  </a>
                  <a class="dropdown-item" href="exam.php" id="dlink">
                    <i class="fas fa-book-reader"></i> Take Exam
                  </a>
                  <a class="dropdown-item" href="logout.php" id="dlink">
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
              
        <div class="col-md-3 col-lg-2" id="navigation" style="border-right:5px solid #444;padding-bottom: 0px;height: 600px;margin-top: 0px;background: #000;font-family: lucida sans">
              	
        	<center style="color:black; font-size:23px; background: white;padding: 10px;">
    				<i class="fas fa-user-circle"></i> STUDENT
    			</center>

    			<br>
    			<p id="plink2">
    				<a href="stud-dash.php" id="plink"> <i class="fas fa-user"></i> Profile <i class="fas fa-angle-right"></i></a>	
    			</p>
    			<p id="plink2">
    				<a href="#" id="plink" data-toggle="modal" data-target="#basicExampleModal"> <i class="fas fa-flag"></i> Notice <i class="fas fa-angle-right"></i></a>	
    			</p>
    			<p id="plink2">
    				<a href="class.php" id="plink"> <i class="fas fa-book-reader"></i> Enter Class <i class="fas fa-angle-right"></i></a>	
    			</p>
    			<p id="plink2">
    				<a href="set.php" id="plink"><i class="fas fa-cogs"></i> Settings <i class="fas fa-angle-right"></i></a>	
    			</p>
    			<p id="plink2">
    				<a href="exam.php" id="plink"><i class="fas fa-book-reader"></i> Take exam <i class="fas fa-angle-right"></i></a>	
    			</p>
    			<p id="plink2">
    				<a href="logout.php" id="plink4"><i class="fas fa-sign-out-alt"></i> Logout <i class="fas fa-angle-right"></i></a>	
    			</p>

        </div>
              
        <div class="col-sm-12 col-md-9 col-lg-10" style="height: 600px; overflow: auto;">
              
          <br> 
            <?php

                  $user = $_SESSION['user'];

                  $sel = $pdo->prepare("SELECT * FROM student WHERE email = ?");
                  $sel->bindParam(1, $user);
                  $sel->execute();

                  if($sel->rowCount() > 0){

                    while($f = $sel->fetch()){

                      if($f['adnum'] == 'no'){

                        echo'<b style="color:red;">GENERATE MATRIC</b>';

                      }else{

                        echo'<p style="color:#000; font-size: 20px;">
                            <i class="fas fa-chevron-circle-right"></i> '.strtoupper($f['adnum']).'</p><hr/>';
                      }//-------------

                    }

                  }

            ?>

            <div id="class">
              
            <?php

              $user = $_SESSION['user'];

              $sel = $pdo->prepare("SELECT * FROM student WHERE email = ?");
              $sel->bindParam(1, $user);
              $sel->execute();
              if($sel->rowCount() > 0){

                while($f = $sel->fetch()){

                  $mc = $f['course'];
                  //--------------------------
                }

                echo'<h4>';
                  $selc = $pdo->prepare("SELECT * FROM course WHERE abbr = '$mc'");
                  $selc->execute();
                  if($selc->rowCount() > 0){
                    while($c = $selc->fetch()){
                       echo'<i class="fas fa-book"></i> '.strtoupper($c['cname']);
                    }
                  }
                echo'</h4><br>';

              }//end of getting course

              ?>

              <center>
                  
                <?php

                  if(isset($_GET['score'])){

                    $s = base64_decode($_GET['score']);

                    if($s < 80){

                      echo'<br><br>';
                      echo'<h3 style="color:red;">SCORE = '.$s.'%<h3>';
                      echo'<h4 style="color:#770000;">SOORY, YOU FAILED THE COURSE TEST<h4>';
                      echo'<a href="exam2.php" class="btn btn-lg btn-danger">TAKE TEST AGAIN <i class="fas fa-arrow-right"></i></a>';

                    }else{

                      echo'<br><br>';
                      echo'<h3 style="color:green;">SCORE = '.$s.'%<h3>';
                      echo'<h4 style="color:green;">CONGRATULATIONS, YOU PASSED THE TEST<h4>';
                      echo'<h5 style="color:#000077;">YOUR CERTIFICATE WILL BE SENT TO YOUR EMAIL WITHIN 4 (FOUR) WORKING DAYS<h4>';

                    }//-----------------------------

                  }else{

                    $user = $_SESSION['user'];

                    $getc = $pdo->prepare("SELECT * FROM certified WHERE email = ?");
                    $getc->bindParam(1, $user);
                    $getc->execute();

                    if($getc->rowCount() > 0){

                      echo'<br><br>';
                      echo'<h4 style="color:green;">YOU HAVE TAKEN THE TEST AND HAVE PASSED<h4>';
                      echo'<h5 style="color:green;">If You Have Not Seen Your Certificate, It Will Be Sent To Your Email Within 4 (Four) Working Days<h5>';

                    }else{

                      echo'<br><br>';
                      echo'<h4>YOU ARE ABOUT TO TAKE THE TEST<h4>';
                      echo'<h4>ANSWER EACH QUESTION CAREFULLY<h4>';
                      echo'<h4>YOU NEED 80% SCORE TO PASS<h4>';

                      echo'<a href="exam2.php" class="btn btn-lg btn-green">TAKE TEST <i class="fas fa-arrow-right"></i></a>';

                    }

                  }

                ?>

              </center>

              <!-- //////////////////////////////////// -->

            </div>

          <br>

        </div>

      </div>
      
    </div>

    <!-- Modal -->
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background: #000022;color:white;">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fas fa-flag"></i> NOTICE
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: white !important">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div id="notice" style="overflow: auto">
              
              <?php

                $sel = $pdo->prepare("SELECT * FROM notice ORDER BY id DESC");
                $sel->execute();

                if($sel->rowCount() > 0){

                while($f = $sel->fetch()){
              ?>

              <h6 style="font-weight: bold;border-bottom: 1px solid #ccc;padding-bottom: 3px;color: #550000;">
                <?=strtoupper($f['head'])?> (<?=date("D/M/Y", strtotime($f['time']))?>)
              </h6>
              <p style="font-size: 13px; text-align: justify;">
                <?=$f['content']?>
              </p>

              <br>

              <?php
                  }

                }else{
                  echo'<center style="color:red;">No Notice</center>';
                }


              ?>

            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->

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