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
    <title>Student Dashboard</title>
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

                        echo'<form method="post">
                              <input type="hidden" name="user" na value="'.$_SESSION['user'].'">
                              <input type="hidden" name="cos" na value="'.$f['course'].'">
                              <button name="matric" class="btn btn-danger">Generate Matric No</button>
                            </form><hr/>';

                      }else{

                        echo'<p style="color:#000; font-size: 20px;">
                            <i class="fas fa-chevron-circle-right"></i> '.strtoupper($f['adnum']).'</p><hr/>';
                      }//-------------

                    }

                  }

                  //generating matric number

                  if(isset($_POST['matric'])){

                    $us = $_POST['user'];
                    $co = $_POST['cos'];

                    $y = date('y');
                    $d = date('d');

                    $seln = $pdo->prepare("SELECT * FROM student WHERE course = ?");
                    $seln->bindParam(1, $co);
                    $seln->execute();
                    $total = $seln->rowCount();

                    $num = '1234567890';
                    $shuffled = str_shuffle($num);
                    $c = substr($shuffled, 6);

                    $matric = $co.'/'.$total.'/'.$d.''.$y.'/'.$c;

                    $ins = $pdo->prepare("UPDATE student SET adnum = ? WHERE email = ?");
                    $ins->bindParam(1, $matric);
                    $ins->bindParam(2, $us);
                    $ins->execute();

                    if($ins){

                      header('location:stud-dash.php');

                    }//--------------

                  }//---------------

            ?>

            <div id="student-details">
              
              <?php

              $user = $_SESSION['user'];

              $sel = $pdo->prepare("SELECT * FROM student WHERE email = ?");
              $sel->bindParam(1, $user);
              $sel->execute();
              if($sel->rowCount() > 0){

                while($f = $sel->fetch()){

             ?>

             <div id="update-phone">
              
              <?php  

                  $sel3 = $pdo->prepare("SELECT * FROM student WHERE email = ? AND phone = 'no'");
                  $sel3->bindParam(1, $user);
                  $sel3->execute();

                  if($sel3->rowCount() > 0){

                    echo'<div class="alert alert-warning" role="alert" style="font-size:14px;">
                      <i class="fas fa-exclamation-triangle"></i> Go to settings and update your phone number !!
                    </div>';

                  }else{
                    //nothing
                  }

              ?>

             </div>

             <div id="v-pix">

              <?php
                if($f['photo'] == 'no'){

                  echo'<div class="alert alert-secondary" role="alert" style="font-size:14px;">
                      <i class="fas fa-exclamation-triangle"></i> Go to settings and upload your photo !!
                    </div>';

                }else{

                  echo'<center>
                      <img src="'.$f['photo'].'" style="width:100px; height:110px;border-radius:10%; border:1px solid #ccc;">
                    </center>
                    <br>';

                }//end of photo warning
              ?>

             </div>

              <table class="table table-sm" style="width: 100%;border-left:5px solid #000044;border-right:5px solid #000044;border-top:2px solid #ddd;border-bottom:2px solid #ddd;">

                <tr>
                  <td style="font-size:15px">
                    <p style="font-family: candara; font-weight:bold;color:#0d47a1 ">
                      FULLNAME <i class="fas fa-angle-right"></i>
                    </p>
                  </td>

                </tr>
                <tr>
                  <td style="font-size:15px">
                    <p style="margin-left:50px;">
                      <?php echo $f['sname'].' '.$f['oname'];?>
                    </p>
                  </td>
                </tr>

                <tr>
                  <td style="font-size:15px">
                    <p style="font-family: candara; font-weight:bold;color:#0d47a1 ">
                      EMAIL <i class="fas fa-angle-right"></i>
                    </p>
                  </td>

                </tr>
                <tr>
                  <td style="font-size:15px">
                    <p style="margin-left:50px;">
                      <?php echo $f['email'];?>
                    </p>
                  </td>
                </tr>

                <tr>
                  <td style="font-size:15px">
                    <p style="font-family: candara; font-weight:bold;color:#0d47a1 ">
                      PHONE <i class="fas fa-angle-right"></i>
                    </p>
                  </td>

                </tr>
                <tr>
                  <td style="font-size:15px">
                    <p style="margin-left:50px;">
                      <?php
                        if($f['phone'] == 'no'){
                          echo'------------';
                        }else{
                          echo $f['phone'];
                        }
                      ?>
                    </p>
                  </td>
                </tr>

                <tr>
                  <td style="font-size:15px">
                    <p style="font-family: candara; font-weight:bold;color:#0d47a1 ">
                      HOME ADDRESS <i class="fas fa-angle-right"></i>
                    </p>
                  </td>

                </tr>
                <tr>
                  <td style="font-size:15px">
                    <p style="margin-left:50px;">
                      <?php echo $f['address'];?>
                    </p>
                  </td>
                </tr>

                <tr>
                  <td style="font-size:15px">
                    <p style="font-family: candara; font-weight:bold;color:#0d47a1 ">
                      STATE <i class="fas fa-angle-right"></i>
                    </p>
                  </td>

                </tr>
                <tr>
                  <td style="font-size:15px">
                    <p style="margin-left:50px;">
                      <?php echo $f['state'];?>
                    </p>
                  </td>
                </tr>

                <tr>
                  <td style="font-size:15px">
                    <p style="font-family: candara; font-weight:bold;color:#0d47a1 ">
                      COUNTRY <i class="fas fa-angle-right"></i>
                    </p>
                  </td>

                </tr>
                <tr>
                  <td style="font-size:15px">
                    <p style="margin-left:50px;">
                      <?php echo str_replace('_', ' ', $f['country']);?>
                    </p>
                  </td>
                </tr>

                <tr>
                  <td style="font-size:15px">
                    <p style="font-family: candara; font-weight:bold;color:#0d47a1 ">
                      COURSE <i class="fas fa-angle-right"></i>
                    </p>
                  </td>

                </tr>
                <tr>
                  <td style="font-size:15px">
                    <p style="margin-left:50px;">
                      <?php 
                        $cabr = $f['course'];
                        $selc = $pdo->prepare("SELECT * FROM course WHERE abbr = '$cabr'");
                        $selc->execute();
                        if($selc->rowCount() > 0){
                          while($c = $selc->fetch()){
                            echo strtoupper($c['cname']);
                          }
                        }
                      ?>
                    </p>
                  </td>
                </tr>

                <tr>
                  <td style="font-size:15px">
                    <p style="font-family: candara; font-weight:bold;color:#0d47a1 ">
                      HIGHEST LEVEL OF EDUCATION <i class="fas fa-angle-right"></i>
                    </p>
                  </td>

                </tr>
                <tr>
                  <td style="font-size:15px">
                    <p style="margin-left:50px;">
                      <?php echo $f['leveledu'];?>
                    </p>
                  </td>
                </tr>

                <tr>
                  <td style="font-size:15px">
                    <p style="font-family: candara; font-weight:bold;color:#0d47a1 ">
                      GENDER <i class="fas fa-angle-right"></i>
                    </p>
                  </td>

                </tr>
                <tr>
                  <td style="font-size:15px">
                    <p style="margin-left:50px;">
                      <?php echo $f['gender'];?>
                    </p>
                  </td>
                </tr>

              </table>

             <?php

              }
             }else{
              echo'<p style="color:red">No Data Yet !!</p>';
             }

             ?>

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