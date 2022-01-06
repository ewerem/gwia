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
    <title>Class</title>
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

                        echo'<b style="color:red;">GENERATE MATRIC</b><hr>';

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

              $sel2 = $pdo->prepare("SELECT * FROM c_modules WHERE mcourse = ? ORDER BY mnum ASC");
              $sel2->bindParam(1, $mc);
              $sel2->execute();
              if($sel2->rowCount() > 0){

                while($fc = $sel2->fetch()){

              ?>

                <h6 style="padding: 15px; border: 1px solid #aaa;border-radius: 5px;">
                  <a href="class-topics.php?id=<?=base64_encode($fc['id'])?>&mod=<?=base64_encode($fc['mtitle'])?>&mn=<?=base64_encode($fc['mnum'])?>" id="mlink" style="color: #000;">
                   MODULE <?=$fc['mnum']?> <i class="fas fa-angle-right"></i> <?=strtoupper($fc['mtitle'])?>
                  </a>
                </h6>
                <p></p>

              <?php
                }

                //live chat with tutor
                echo'<br><br>';
                echo'<center><a href="lchat.php" class="btn btn-green btn-lg">';
                  echo'ASK QUESTIONS HERE <i class="fas fa-comments"></i>';
                echo'</a></center>';

              }else{
                echo'<center style="color:red">No data Yet !!</center>';
              }
              ?>

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