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
    <title>Job Post</title>
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
                <i class="fas fa-briefcase"></i> Job Section
              </h4>
            </div>

          </div><!-- ending for head in main -->

          <div id="article-section">
            <p></p>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" style="border:1px solid black; color: #880000;font-weight: bold;">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                  aria-selected="true">
                  Post Job
                </a>
              </li>
              <li class="nav-item" style="border:1px solid black; color: #000088;font-weight: bold;">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                  aria-selected="false">
                  Job Application
                    <i style="background: #0d47a1;color: white;padding: 5px;font-size: 14px;border-radius: 20px;">
                      <?php

                        $sel3 = $pdo->prepare("SELECT * FROM job_vacancy");
                        $sel3->execute();

                        echo $sel3->rowCount();

                       ?>
                    </i>
                
                </a>
              </li>

              <li class="nav-item" style="border:1px solid black; color: #000088;font-weight: bold;">
                <a class="nav-link" id="vjobs-tab" data-toggle="tab" href="#vjobs" role="tab" aria-controls="profile"
                  aria-selected="false">
                  View Jobs
                    <i style="background: green;color: white;padding: 5px;font-size: 14px;border-radius: 20px;">
                      <?php

                        $sel4 = $pdo->prepare("SELECT * FROM open_job");
                        $sel4->execute();

                        echo $sel4->rowCount();

                       ?>
                    </i>
                
                </a>
              </li>

              <li class="nav-item" style="border:1px solid black; color: #000088;font-weight: bold;">
                <a class="nav-link" id="subscribe-tab" data-toggle="tab" href="#subscribe" role="tab" aria-controls="profile"
                  aria-selected="false">
                  Subscribers
                    <i style="background: #770000;color: white;padding: 5px;font-size: 14px;border-radius: 20px;">
                      <?php

                        $sel4 = $pdo->prepare("SELECT * FROM job_subscribe");
                        $sel4->execute();

                        echo $sel4->rowCount();

                       ?>
                    </i>
                
                </a>
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="padding: 10px;">
                <br>
                <h5 style="font-family: mv boli;color:#440000;font-weight: bold;">
                  POST JOBS
                </h5>
                <p></p>
                <form class="text-center p-2" method="post" enctype="multipart/form-data">

                    <input type="file" name="photo" style="width: 100%; border:1px solid #ddd; padding: 4px;border-radius: 2px;" required="">
                    <br><br>

                    <!-- Name -->
                    <input type="text" name="title" id="defaultContactFormName" class="form-control mb-4" placeholder="Job Title" required="">

                    <input type="text" name="locate" id="defaultContactFormName" class="form-control mb-4" placeholder="Job Location" required="">

                    <select name="type" class="form-control mb-4" required="">
                      <option value="default">Select Job Type</option>
                      <option value="Full-time">Full-time</option>
                      <option value="Part-time">Part-time</option>
                      <option value="Contract">Contract</option>
                      <option value="Online">Online</option>
                    </select>

                     <input type="text" name="close" id="defaultContactFormName" class="form-control mb-4" placeholder="Job is opened till when?" required="">

                    <!-- Message -->
                    <div class="form-group">
                        <textarea class="form-control rounded-0" name="jsum" id="exampleFormControlTextarea2" rows="3" placeholder="Job Summary" required=""></textarea>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control rounded-0" name="jduties" id="exampleFormControlTextarea2" rows="3" placeholder="Job Duties" required=""></textarea>
                    </div>  

                    <div class="form-group">
                        <textarea class="form-control rounded-0" name="qualify" id="exampleFormControlTextarea2" rows="3" placeholder="Qualification Needed" required=""></textarea>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control rounded-0" name="pskill" id="exampleFormControlTextarea2" rows="3" placeholder="Prefered Skill" required=""></textarea>
                    </div>                  

                    <!-- Send button -->
                    <button class="btn btn-indigo btn-block" name="sub" type="submit"><i class="fas fa-paper-plane"></i> Submit</button>

                </form>

                <?php  

                  if(isset($_POST['sub'])){

                    $t    = $_POST['title'];
                    $lo   = $_POST['locate'];
                    $ty   = $_POST['type'];
                    $st   = $_POST['close'];
                    $js   = $_POST['jsum'];
                    $jd   = $_POST['jduties'];
                    $jq   = $_POST['qualify'];
                    $jsk  = $_POST['pskill'];


                    $photo = $_FILES['photo']['tmp_name'];
                    $photo_name = $_FILES['photo']['name'];
                    $photo_size = $_FILES['photo']['size'];
                    $location = "job/". $photo_name;
                              
                    if($photo_size == 0 || $photo_size >699877){

                      echo'<script>alert("PHOTO SIZE SHOULD BE LESS THAN 600 KILOBYTE. PLEASE CHECK PHOTO SIZE BEFORE UPLOADING !!");</script>';

                    }else{
                      move_uploaded_file($photo, $location);

                      ojob($pdo, $location, $t, $lo, $ty, $st, $js, $jd, $jq, $jsk);

                    }

                  }

                ?>

              </div>

              <div class="tab-pane animated fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="padding: 10px;">
                <br>

                <div class="row">

                  <?php

                    $sel = $pdo->prepare("SELECT * FROM job_vacancy ORDER BY id DESC");
                    $sel->execute();

                    if($sel->rowCount() > 0){

                      while($f = $sel->fetch()){

                  ?>

                      <br>
                      <table class="table alert-warning" style="width: 100%;">
                        <tr>
                          <td style="width: 90px;">
                            <?php
                              
                              echo'<i class="fas fa-user-circle" style="font-size:50px;"></i>';
                              
                            ?>
                          </td>
                          <td style="">

                            <strong style="color: purple">NAME</strong> <i class="far fa-arrow-alt-circle-right"></i> 
                            <?php echo strtoupper($f['sname']).' '.strtoupper($f['oname']);?>
                            <br>
                            <strong style="color: purple">EMAIL</strong> <i class="far fa-arrow-alt-circle-right"></i> 
                            <?php echo strtolower($f['email']);?>
                            <br>
                            <strong style="color: purple">COUNTRY</strong> <i class="far fa-arrow-alt-circle-right"></i> 
                            <?php echo strtoupper($f['country']);?>
                            <br>
                            <strong style="color: purple">APPLIED FOR</strong> <i class="far fa-arrow-alt-circle-right"></i> 
                            <?php echo strtoupper($f['job']);?>
                            <br>
                            <p></p>
                            <a href="#" data-toggle="modal" data-target="#centralModalSmjv" style="padding: 4px 10px; background: #770000; color: white;">X</a>
                          </td>
                          <td>
                            <br>
                            <center>
                              <a href="../<?=$f['cv']?>">
                                <i class="fas fa-file-alt" style="font-size: 50px"></i>
                                <br>
                                C.V
                              </a>
                            </center>
                          </td>
                        </tr>
                      </table>

                    <!-- modal delete post -->
                    <div class="modal fade" id="centralModalSmjv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">

                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-sm" role="document">

                        <div class="modal-content">
                          <div class="modal-body">
                            <p></p>
                            <center>
                             DO YOU REALLY WANT TO DELETE THIS JOB APPLICANT?
                            </center>
                            <p></p>
                          </div>
                          <div class="modal-footer justify-content-center">
                            <a href="job.php?id=<?=base64_encode($f['id'])?>&jvac" class="btn btn-success">Yes</a>
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
                  
                </div>

              </div>

              <div class="tab-pane animated fade" id="vjobs" role="tabpanel" aria-labelledby="vjobs-tab" style="padding: 10px;">
                <br>

                <div class="row">

                  <?php

                    $sel = $pdo->prepare("SELECT * FROM open_job ORDER BY id DESC");
                    $sel->execute();

                    if($sel->rowCount() > 0){

                      while($f = $sel->fetch()){

                  ?>

                      <div class="col-sm-12 col-md-4">

                      <!-- Card -->
                        <div class="card">

                          <!-- Card image -->
                          <img class="card-img-top" src="<?=$f['photo']?>">

                          <!-- Card content -->
                          <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title" style="text-align: center;"><?=$f['jtitle']?></h4>
                            <!-- Text -->
                            <center>
                              <a href="#" data-toggle="modal" data-target="#centralModalSm2" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
                            </center>
                          </div>

                        </div>
                        <br>
                      <!-- Card -->
                    </div>

                    <!-- modal delete post -->
                    <div class="modal fade" id="centralModalSm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">

                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-sm" role="document">

                        <div class="modal-content">
                          <div class="modal-body">
                            <p></p>
                            <center>
                             DO YOU REALLY WANT TO DELETE JOB POST?
                            </center>
                            <p></p>
                          </div>
                          <div class="modal-footer justify-content-center">
                            <a href="job.php?id=<?=base64_encode($f['id'])?>&job" class="btn btn-success">Yes</a>
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
                  
                </div>

              </div>

              <div class="tab-pane animated fade" id="subscribe" role="tabpanel" aria-labelledby="subscribe-tab" style="padding: 10px;">
                <br>

                <div class="row">

                  <?php

                    $sel = $pdo->prepare("SELECT * FROM job_subscribe ORDER BY id DESC");
                    $sel->execute();

                    if($sel->rowCount() > 0){

                      while($f = $sel->fetch()){

                  ?>

                      <br>
                      <table class="table alert-success" style="width: 100%;">
                        <tr>
                          <td style="width: 90px;">
                            <?php
                              
                              echo'<i class="fas fa-user-circle" style="font-size:50px;"></i>';
                              
                            ?>
                          </td>
                          <td style="">

                            <strong style="color: purple">EMAIL</strong> <i class="far fa-arrow-alt-circle-right"></i> 
                            <?php echo strtolower($f['email']);?>
                            <p></p>
                            <a href="#" data-toggle="modal" data-target="#centralModalSm" style="padding: 4px 10px; background: #770000; color: white;">X</a>
                          </td>
                        </tr>
                      </table>

                    <!-- modal delete post -->
                    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">

                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-sm" role="document">

                        <div class="modal-content">
                          <div class="modal-body">
                            <p></p>
                            <center>
                             DO YOU REALLY WANT TO DELETE THIS SUBSCRIBER?
                            </center>
                            <p></p>
                          </div>
                          <div class="modal-footer justify-content-center">
                            <a href="job.php?id=<?=base64_encode($f['id'])?>&subs" class="btn btn-success">Yes</a>
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
                  
                </div>

              </div>

            </div>

          </div><!-- ///////////////// -->

          <!-- ending of main -->
        </div>

      </div>
      
    </div>

    <?php  

      if(isset($_GET['job'])){

        $id = base64_decode($_GET['id']);

        $sel = $pdo->prepare("SELECT * FROM open_job WHERE id = ?");
        $sel->bindParam(1, $id);
        $sel->execute();

        if($sel->rowCount() > 0){

          while($f = $sel->fetch()){

            unlink($f['photo']);

          }

        }

        $d = $pdo->prepare("DELETE FROM open_job WHERE id = ?");
        $d->bindParam(1, $id);
        $d->execute();

        if($d){

          echo'<script>alert("DELETED SUCCESSFULLY !!");</script>';
          echo'<meta http-equiv="refresh" content="0; url=job.php">';

        }

      }
//-------------------------------------
    ?>

    <?php  

      if(isset($_GET['subs'])){

        $id = base64_decode($_GET['id']);

        $d = $pdo->prepare("DELETE FROM job_subscribe WHERE id = ?");
        $d->bindParam(1, $id);
        $d->execute();

        if($d){

          echo'<script>alert("SUBSCRIBER DELETED SUCCESSFULLY !!");</script>';
          echo'<meta http-equiv="refresh" content="0; url=job.php">';

        }

      }
//------------------------------------------
    ?>

    <?php  

      if(isset($_GET['jvac'])){

        $id = base64_decode($_GET['id']);

        $sel = $pdo->prepare("SELECT * FROM job_vacancy WHERE id = ?");
        $sel->bindParam(1, $id);
        $sel->execute();

        if($sel->rowCount() > 0){

          while($f = $sel->fetch()){

            unlink($f['cv']);

          }

        }

        $d = $pdo->prepare("DELETE FROM job_vacancy WHERE id = ?");
        $d->bindParam(1, $id);
        $d->execute();

        if($d){

          echo'<script>alert("JOB APPLICANT DELETED SUCCESSFULLY !!");</script>';
          echo'<meta http-equiv="refresh" content="0; url=job.php">';

        }

      }
//-------------------------------------
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