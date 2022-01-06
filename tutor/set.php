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
    <title>Tutor settings</title>
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

          <h4 style="color: black;"><i class="fas fa-cogs"></i> Settings </h4>

          <hr/>

            <div id="tutor-details">
              
            <?php

              $user = $_SESSION['tutor'];

              $sel = $pdo->prepare("SELECT * FROM teacher WHERE email = ?");
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

                              $user = $_SESSION['tutor'];

                              $sel = $pdo->prepare("SELECT * FROM teacher WHERE email = ?");
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

                              $user = $_SESSION['tutor'];

                              $photo = $_FILES['photo']['tmp_name'];
                              $photo_name = $_FILES['photo']['name'];
                              $photo_size = $_FILES['photo']['size'];
                              $location = "tutor-pix/". $photo_name;
                              
                              if($photo_size == 0 || $photo_size >999877){

                                echo'<script>alert("PHOTO SIZE SHOULD BE LESS THAN 1 MEGABYTE. PLEASE CHECK PHOTO SIZE BEFORE UPLOADING !!");</script>';
                                echo'<meta http-equiv="refresh" content="0; url=set.php?add=show">';

                              }else{
                                //---------------------------------
                                $selp = $pdo->prepare("SELECT * FROM teacher WHERE email = ?");
                                $selp->bindParam(1, $user);
                                $selp->execute();

                                if($selp->rowCount() > 0){

                                  while($p = $selp->fetch()){
                                    unlink($p['photo']);
                                  }

                                }//--------------------------------

                                move_uploaded_file($photo, $location);
                                $upd = $pdo->prepare("UPDATE teacher SET photo = '$location' WHERE email = '$user'");
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
                       <i class="fas fa-phone"></i> UPDATE PROFILE <i class="fas fa-angle-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse <?php echo $_GET['add2']?>" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                     
                      <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                        
                            <form method="post">

                              <p><i class="fas fa-edit"></i> Full name</p>
                              <input id="phone" name="fname" type="text" class="form-control" required="">
                              <p></p>

                              <p><i class="fas fa-edit"></i> Phone Number with Country Code</p>
                              <input id="phone" name="phone" type="tel" class="form-control" placeholder="e.g: +2348167887652" required="">
                              <p></p>

                              <p><i class="fas fa-edit"></i> State</p>
                              <input id="phone" name="state" type="text" class="form-control" required="">
                              <p></p>

                              <p><i class="fas fa-edit"></i> Gender</p>
                              <select name="gender" class="form-control mb-4" style="" required="">
                                <option value="default"></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>

                              <p></p>
                              <button name="subph" type="submit" class="btn btn-primary btn-block">
                                Submit <i class="fa fa-send"></i>
                              </button>

                            </form>
                          
                        </div>
                        <div class="col-sm"></div>
                      </div>  

                    <?php  

                      if(isset($_POST['subph'])){

                        $user = $_SESSION['tutor'];

                        $ph   = $_POST['phone'];
                        $fn   = $_POST['fname'];
                        $ge   = $_POST['gender'];
                        $st   = $_POST['state'];

                        $up = $pdo->prepare("UPDATE teacher SET name = ?, phone = ?, gender = ?, state = ? WHERE email = ?");
                        $up->bindParam(1, $fn);
                        $up->bindParam(2, $ph);
                        $up->bindParam(3, $ge);
                        $up->bindParam(4, $st);
                        $up->bindParam(5, $user);
                        $up->execute();

                        if($up){
                          echo'<script>alert("DETAILS UPDATED SUCCESSFULLY");</script>';
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

                            $user = $_SESSION['tutor'];
                            $op = $_POST['opass'];
                            $np = $_POST['npass'];
                            $cp = $_POST['cpass'];

                            change_tutor_pass($pdo, $op, $np, $cp, $user);

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