<?php
session_start();
ob_start();
include'../access/access.php';

if(!isset($_SESSION['admin'])){
  header('location:glogin.php');
}
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacts</title>
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link href="../adcss/b.css" rel="stylesheet">
    <link href="../adcss/md.css" rel="stylesheet">
  <style type="text/css">
    body{
      font-family: lucida sans;
    }
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

  </style>
</head>
<body>
    <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background: #4285F4 !important;">
        <div class="container">
            <img src="../image/logo.jpg" style="width: 42px; height: 42px;border:1px solid white;padding: 0px !important;">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" data-toggle="dropdown">Extrax</a>
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="gdashboard.php" id="dlink">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                  </a>
                  <a class="dropdown-item" href="stud.php" id="dlink">
                   <i class="fas fa-user-check"></i> Students
                 </a>
                  <a class="dropdown-item" href="non-stud.php" id="dlink">
                    <i class="fas fa-user-times"></i> Non Students
                  </a>
                  <a class="dropdown-item" href="tutor.php" id="dlink">
                    <i class="fas fa-user-tie"></i> Tutor
                  </a>
                  <a class="dropdown-item" href="article.php" id="dlink">
                    <i class="fas fa-file-alt"></i> Articles
                  </a>
                  <a class="dropdown-item" href="notice.php" id="dlink">
                    <i class="fas fa-flag"></i> Student Notice
                  </a>
                  <a class="dropdown-item" href="book.php" id="dlink">
                    <i class="fas fa-book"></i> Bookshop
                  </a>
                  <a class="dropdown-item" href="news.php" id="dlink">
                    <i class="fas fa-newspaper"></i> News Letter
                  </a>
                  <a class="dropdown-item" href="contact.php" id="dlink">
                    <i class="fas fa-address-book"></i> Contacts
                  </a>
                  <a class="dropdown-item" href="job.php" id="dlink">
                    <i class="fas fa-briefcase"></i> Job Section
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
              
      <div class="col-md-3 col-lg-2" id="navigation" style="border-right:5px solid #444;padding-bottom: 0px;height: 600px;margin-top: 0px;background: #000;font-family: lucida sans">
              	
        	<center style="color:black; font-size:25px; background: white;padding: 10px;">
				<i class="fas fa-user-circle"></i> ADMIN
			</center>

			<br>
			<p id="plink2">
				<a href="gdashboard.php" id="plink"> <i class="fas fa-tachometer-alt"></i> Dashboard <i class="fas fa-angle-right"></i></a>	
			</p>
			<p id="plink2">
				<a href="stud.php" id="plink"> <i class="fas fa-user-check"></i> Students <i class="fas fa-angle-right"></i></a>	
			</p>
			<p id="plink2">
				<a href="non-stud.php" id="plink"> <i class="fas fa-user-times"></i> Non Students <i class="fas fa-angle-right"></i></a>	
			</p>
			<p id="plink2">
				<a href="tutor.php" id="plink"><i class="fas fa-user-tie"></i> Tutors <i class="fas fa-angle-right"></i></a>	
			</p>
			<p id="plink2">
				<a href="article.php" id="plink"><i class="fas fa-file-alt"></i> Articles <i class="fas fa-angle-right"></i></a>	
			</p>
      <p id="plink2">
        <a href="notice.php" id="plink"><i class="fas fa-flag"></i> Student Notice <i class="fas fa-angle-right"></i></a> 
      </p>
			<p id="plink2">
				<a href="book.php" id="plink"><i class="fas fa-book"></i> Bookshop <i class="fas fa-angle-right"></i></a>	
			</p>
			<p id="plink2">
				<a href="news.php" id="plink"><i class="fas fa-newspaper"></i> News Letter <i class="fas fa-angle-right"></i></a>	
			</p>
			<p id="plink2">
				<a href="contact.php" id="plink"><i class="fas fa-address-book"></i> Contacts <i class="fas fa-angle-right"></i></a>	
			</p>
			<p id="plink2">
				<a href="job.php" id="plink"><i class="fas fa-briefcase"></i> Job Section <i class="fas fa-angle-right"></i></a>	
			</p>
			<p id="plink2">
				<a href="logout.php" id="plink4"><i class="fas fa-sign-out-alt"></i> Logout <i class="fas fa-angle-right"></i></a>	
			</p>

        </div>
              
        <div class="col-sm-12 col-md-9 col-lg-10" style="height: 600px; overflow: auto;">
              
          <div class="row" style="border-bottom: 1px solid #bbb;">

            <div class="col-sm-12 col-md-12">
              <br>
              <h4 style="font-size:25px;">
                <i class="fas fa-address-book"></i> Contacts
              </h4>
            </div>

          </div><!-- ending for head in main -->

          <div id="article-section">
            <p></p>
            
            <?php

              $sel = $pdo->prepare("SELECT * FROM contact ORDER BY id DESC");
              $sel->execute();

              if($sel->rowCount() > 0){

                while($f = $sel->fetch()){

            ?>

              <div class="alert alert-success" style="border:1px solid black;">

              <div class="row" style="background: white;color: black;">
                <br>
                
                <div class="col-sm-12 col-md-3 col-lg-3" style="font-size:14px;font-family: lucida sans;">
                  <p></p>
                  <b style="font-weight: bold;">
                    NAME <i class="fas fa-angle-right"></i>
                  </b>
                    <?=strtoupper($f['name'])?>
                    <p></p>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6" style="font-size:14px;font-family: lucida sans;">
                  <p></p>
                  <b style="font-weight: bold;">
                    PHONE <i class="fas fa-angle-right"></i>
                  </b>
                    <?=$f['phone']?> <br>
                  <b style="font-weight: bold;">
                    E-MAIL <i class="fas fa-angle-right"></i>
                  </b>
                    <?=$f['email']?>
                    <p></p>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3" style="font-size:14px;font-family: lucida sans;">
                  <b style="font-weight: bold;">
                    <p></p>
                    DATE <i class="fas fa-angle-right"></i>
                  </b>
                    <?=date("Y/M/d, H:i,a", strtotime($f['time']))?>
                    <p></p>
                    <a href="#" data-toggle="modal" data-target="#centralModalSm" style="float: right;padding: 2px 15px;background: #880000;color: white;margin-top: -5px;">X</a>
                </div>

              </div>
              <p></p>
              <div id="message" style="font-size: 16px !important;">
                <p style="font-size:14px;font-family: lucida sans;font-weight: bold;">MESSAGE <i class="fas fa-angle-down"></i></p>
                <?=$f['msg']?>
              </div>

            </div>
            <br>

                  <!-- modal delete post -->
                    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">

                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-sm" role="document">

                        <div class="modal-content">
                          <div class="modal-body">
                            <p></p>
                            <center>
                             DO YOU REALLY WANT TO DELETE CONTACT?
                            </center>
                            <p></p>
                          </div>
                          <div class="modal-footer justify-content-center">
                            <a href="contact.php?id=<?=base64_encode($f['id'])?>" class="btn btn-success">Yes</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>                        
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- modal delete post -->

            <?php
                }

              }else{
                echo'<center style="color:red">No data yet !!</center>';
              }
            ?>


          </div><!-- ///////////////// -->

          <!-- ending of main -->
        </div>

      </div>
      
    </div>

    <?php  

      if(isset($_GET['id'])){

        $id = base64_decode($_GET['id']);

        $d = $pdo->prepare("DELETE FROM contact WHERE id = ?");
        $d->bindParam(1, $id);
        $d->execute();

        if($d){

          echo'<script>alert("DELETED SUCCESSFULLY !!");</script>';
          echo'<meta http-equiv="refresh" content="0; url=contact.php">';

        }

      }

    ?>

    <footer class="page-footer white center-on-small-only">
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