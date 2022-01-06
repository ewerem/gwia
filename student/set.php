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
    <title>Settings</title>
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

                  }//---------------end of matric

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

              <!-- /////////////////////////// -->
              <div class="accordion" id="accordionExample">
                <div class="card z-depth-0 bordered" style="border-bottom:1px solid #bbb;">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne" style="color: black; font-weight: bold;">
                       <i class="fas fa-image"></i> UPLOAD PHOTO <i class="fas fa-angle-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse <?php echo $_GET['add']?>" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      
                      <div class="row">

                        <div class="col-sm"></div>
                        <div class="col-sm">
                        
                          <center>
                          <div>
                            
                            <?php

                              $user = $_SESSION['user'];

                              $sel = $pdo->prepare("SELECT * FROM student WHERE email = ?");
                              $sel->bindParam(1, $user);
                              $sel->execute();

                              if($sel->rowCount() > 0){

                                while($f = $sel->fetch()){

                                  if($f['photo'] == 'no'){

                                    echo '<i class="fas fa-user-circle" style="font-size:120px;"></i>';

                                  }else{

                                    echo '<img src="'.$f['photo'].'" style="width:117px; height:120px; border:1px solid #ccc; border-radius:10%;">';

                                  }

                                }

                              }

                        ?>  

                          </div>
                          <br>

                          <form method="post" enctype="multipart/form-data">
                            <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="photo" accept=".jpg,.jpeg,.png" class="custom-file-input" id="inputGroupFile01"
                              required="">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>
                        <p></p>
                          <button name="subpix" class="btn btn-primary btn-block">
                            Upload Photo <i class="fas fa-image"></i>
                          </button>
                          </form>
                          </center>

                        </div>
                        <div class="col-sm"></div>
                        
                      </div>



                          <?php

                            if(isset($_POST['subpix'])){

                              $user = $_SESSION['user'];

                              $photo = $_FILES['photo']['tmp_name'];
                              $photo_name = $_FILES['photo']['name'];
                              $photo_size = $_FILES['photo']['size'];
                              $location = "stud-pix/". $photo_name;
                              
                              if($photo_size == 0 || $photo_size >999877){

                                echo'<script>alert("PHOTO SIZE SHOULD BE LESS THAN 1 MEGABYTE. PLEASE CHECK PHOTO SIZE BEFORE UPLOADING !!");</script>';
                                echo'<meta http-equiv="refresh" content="0; url=set.php?add=show">';

                              }else{
                                //---------------------------------
                                $selp = $pdo->prepare("SELECT * FROM student WHERE email = ?");
                                $selp->bindParam(1, $user);
                                $selp->execute();

                                if($selp->rowCount() > 0){

                                  while($p = $selp->fetch()){
                                    unlink($p['photo']);
                                  }

                                }//--------------------------------

                                move_uploaded_file($photo, $location);
                                $upd = $pdo->prepare("UPDATE student SET photo = '$location' WHERE email = '$user'");
                                $upd->execute();

                                if($upd){

                                  echo'<script>alert("Successfully Uploaded !!");</script>';
                                  echo'<meta http-equiv="refresh" content="0; url=set.php?add=show">';

                                }

                              }

                            }
                            //----------------------
                          ?>

                    </div>
                  </div>
                </div>

                <br>

                <div class="card z-depth-0 bordered" style="border-bottom:1px solid #bbb;">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: black; font-weight: bold;">
                       <i class="fas fa-phone"></i> UPDATE PHONE <i class="fas fa-angle-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse <?php echo $_GET['add2']?>" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                     
                      <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                          <center>
                            <form method="post">

                              <p><i class="fas fa-phone"></i> Phone Number with Country Code</p>
                              <input id="phone" name="phone" type="tel" class="form-control" placeholder="e.g: +2348167887652" required="">

                              <p></p>
                              <button name="subph" type="submit" class="btn btn-primary btn-block">
                                Submit <i class="fa fa-send"></i>
                              </button>

                            </form>
                          </center>
                        </div>
                        <div class="col-sm"></div>
                      </div>  

                    <?php  

                      if(isset($_POST['subph'])){

                        $user = $_SESSION['user'];

                        $p   = $_POST['phone'];

                        $up = $pdo->prepare("UPDATE student SET phone = ? WHERE email = ?");
                        $up->bindParam(1, $p);
                        $up->bindParam(2, $user);
                        $up->execute();

                        if($up){
                          echo'<script>alert("PHONE NUMBER UPDATED SUCCESSFULLY");</script>';
                        }

                      }

                    ?>

                     <!-- -->
                    </div>
                  </div>
                </div>

                <br>

                <div class="card z-depth-0 bordered">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: black; font-weight: bold;">
                      <i class="fas fa-unlock-alt"></i> CHANGE PASSWORD <i class="fas fa-angle-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse <?php echo $_GET['add3']?>" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      
                      <div class="row">

                        <div class="col-sm-12 col-md-2"></div>

                        <div class="col-sm-12 col-md-8">
                          
                          <form method="post" style="border:1px solid #bbb; padding: 10px;">
              
                            <p style="font-family: lucida sans"><i class="fas fa-lock" style="padding: 4px; border-radius: 50%;"></i> Old Password</p>
                            <input name="opass" class="form-control" type="password" required>
                            <br>

                            <p style="font-family: lucida sans"><i class="fas fa-lock" style="padding: 4px; border-radius: 50%;"></i>New Password</p>
                            <input name="npass" class="form-control" type="password" required>
                            <br>

                            <p style="font-family: lucida sans"><i class="fas fa-lock" style="padding: 4px; border-radius: 50%;"></i>Retype New Password</p>
                            <input name="cpass" class="form-control" type="password" required>
                            <br>

                            <button name="subpas" class="btn btn-primary btn-block">
                              Submit <i class="fa fa-send"></i>
                            </button>

                        </form>

                        <?php  

                          if(isset($_POST['subpas'])){

                            $user = $_SESSION['user'];
                            $op = $_POST['opass'];
                            $np = $_POST['npass'];
                            $cp = $_POST['cpass'];

                            change_stud_pass($pdo, $op, $np, $cp, $user);

                          }

                        ?>

                        </div>

                        <div class="col-sm-12 col-md-2"></div>
                        
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <!-- ////////////////////////// -->

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