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
    <title>Topic Content</title>
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
                <a class="nav-link" href="module-t.php?mn=<?=$_GET['mn']?>&mod=<?=$_GET['mod']?>&id=<?=$_GET['mid']?>">
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
            <?php  

              $user = $_SESSION['tutor'];

              $sel = $pdo->prepare("SELECT * FROM teacher WHERE email = ?");
              $sel->bindParam(1, $user);
              $sel->execute();

                if($sel->rowCount() > 0){

                  while($f = $sel->fetch()){

                    echo'<h6> <i class="fas fa-book"></i> '.strtoupper($f['tcourse']).' - MODULE '.base64_decode($_GET['mn']).' - TOPIC '.base64_decode($_GET['tnum']).' - '.strtoupper(base64_decode($_GET['top'])).'</h6>';

                }

              }
            ?> 
          </h4>

          <hr/>

          <div class="row">
            <div class="col-sm-12 col-md-6">
              <a href="#" class="btn btn-green btn-large btn-block" data-toggle="modal" data-target="#basicExampleModal">
                <i class="fas fa-plus"></i> ADD TOPIC CONTENT
              </a>
              <p></p>
            </div>
            <div class="col-sm-12 col-md-6">
              <a href="#" class="btn btn-red btn-large btn-block" data-toggle="modal" data-target="#centralModalSm">
                <i class="fas fa-times"></i> REMOVE TOPIC CONTENT
              </a>
              <p></p>
            </div>
          </div>
          <br>

          <?php

          $tid  = base64_decode($_GET['tid']);
          $mid  = base64_decode($_GET['mid']);
          $mn   = base64_decode($_GET['mn']);
          $mod  = base64_decode($_GET['mod']);
          $tnum = base64_decode($_GET['tnum']);
          $top  = base64_decode($_GET['top']);

          $sel2 = $pdo->prepare("SELECT * FROM mt_content WHERE tid = ? AND mid = ?");
          $sel2->bindParam(1, $tid);
          $sel2->bindParam(2, $mid);
          $sel2->execute();
          if($sel2->rowCount() > 0){

            while($fc = $sel2->fetch()){

          ?>
            <div style="background: rgba(0,50,0, 0.1);padding: 10px; border-radius: 5px;color: black;">
              <p style="width: 100%; word-spacing: 1px; font-size: 15px;padding-top: ">
                <?=$fc['para1']?>
              </p>
              <br>

              <p>
                <?php
                  if($fc['para2'] == 'no'){
                    //nothing
                  }else{
                    echo $fc['para2'];
                  }
                ?>
              </p>
            </div>

            <br>
            <hr>

            <br>
            <center>
              <?php

                if($fc['file'] == 'topic-file/'){
                  echo'<h5 style="color:#440000;">No Topic File</h5>';
                }else{

              ?>
              <a href="<?=$fc['file']?>">
                <i class="fas fa-file" style="font-size: 70px;color: #000044;"></i>
                <br>
                <h5 style="color:black;">Topic File</h5>
              </a>

              <?php
                }
              ?>
            </center>

            <p></p>

                    <!-- modal delete post -->
                    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">

                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-sm" role="document">

                        <div class="modal-content">
                          <div class="modal-body">
                            <p></p>
                            <center>
                             DO YOU REALLY WANT TO DELETE THIS CONTENT?
                            </center>
                            <p></p>
                          </div>
                          <div class="modal-footer justify-content-center">
                            <a href="topic-c.php?id=<?=base64_encode($fc['id'])?>&mn=<?=base64_encode($mn)?>&mod=<?=base64_encode($mod)?>&tid=<?=base64_encode($tid)?>&mid=<?=base64_encode($mid)?>&top=<?=base64_encode($top)?>&tnum=<?=base64_encode($tnum)?>" class="btn btn-success">Yes</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>                        
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- modal delete post -->

                    <?php  

                      if(isset($_GET['id'])){

                        $id = base64_decode($_GET['id']);

                        $seld = $pdo->prepare("SELECT * FROM mt_content WHERE id = ?");
                        $seld->bindParam(1, $id);
                        $seld->execute();

                        if($seld->rowCount() > 0){

                          while($f = $seld->fetch()){

                            unlink($f['file']);

                          }

                        }

                        $d = $pdo->prepare("DELETE FROM mt_content WHERE id = ?");
                        $d->bindParam(1, $id);
                        $d->execute();

                        if($d){

                          echo'<script>alert("CONTENT REMOVED SUCCESSFULLY !!");</script>';
                          echo'<meta http-equiv="refresh" content="0; url=topic-c.php?mn='.base64_encode($mn).'&mod='.base64_encode($mod).'&mid='.base64_encode($mid).'&tid='.base64_encode($tid).'&tnum='.base64_encode($tnum).'&top='.base64_encode($top).'">';

                        }

                      }
                      //end of delete...
                    ?>

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
      
    </div>

    <!-- Modal -->
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              ADD TOPIC CONTENT
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <?php

              $user = $_SESSION['tutor'];

              $sel = $pdo->prepare("SELECT * FROM teacher WHERE email = ?");
              $sel->bindParam(1, $user);
              $sel->execute();
              if($sel->rowCount() > 0){

                while($f = $sel->fetch()){

             ?>
              
              <form method="post" enctype="multipart/form-data">

                <div>
                    <i class="fas fa-file"></i>
                    <i>Upload topic file in PDF format only.</i>
                    <input class="form-control" type="file" name="photo" accept=".pdf"/>
                </div>
                  <p></p>

                <div>
                  <label for="email"><i class="fas fa-edit"></i> Paragraph 1</label>
                   <textarea class="form-control" id="email" name="para1" required="required" style="height: 100px;"></textarea>
                </div>
                <p></p>

                <div>
                  <label for="email"><i class="fas fa-edit"></i> Paragraph 2</label>
                  <textarea class="form-control" id="email" name="para2" style="height: 100px;"></textarea>
                </div>
                <p></p>

                <input type="hidden" name="tcourse" value="<?=$f['tcourse']?>">

                <button class="btn btn-green btn-block ml-0" name="subtc" type="submit"><i class="fas fa-paper-plane mr-2"></i> 
                  Submit
                </button>
              </form>

            <?php

                }
              }

              //submitting module

              $mn   = base64_decode($_GET['mn']);
              $mod  = base64_decode($_GET['mod']);
              $tid  = base64_decode($_GET['tid']);
              $tnum = base64_decode($_GET['tnum']);
              $top  = base64_decode($_GET['top']);
              $mid  = base64_decode($_GET['mid']);

              if(isset($_POST['subtc'])){

                $tc  = $_POST['tcourse'];
                $p1  = $_POST['para1'];
                $p2  = $_POST['para2'];

                $photo = $_FILES['photo']['tmp_name'];
                $photo_name = $_FILES['photo']['name'];
                $photo_size = $_FILES['photo']['size'];
                $location = "topic-file/". $photo_name;

                echo $photo_size;

                $chk2 = $pdo->prepare("SELECT * FROM mt_content WHERE tid = ?");
                $chk2->bindParam(1, $tid);
                $chk2->execute();

                if($chk2->rowCount() > 0){

                  echo'<script>alert("YOU HAVE ADD CONTENT BEFORE. IF YOU WISH TO UPDATE CONTENT, DELETE PREVIOUS AND ADD NEW CONTENT. !!");</script>';

                }else{

                    $chk = $pdo->prepare("SELECT * FROM mt_content WHERE file = ?");
                    $chk->bindParam(1, $location);
                    $chk->execute();

                    if($chk->rowCount() > 0){

                      echo'<script>alert("PLEASE RENAME YOUR FILE, ANOTHER FILE BEARS THE SAME NAME !!");</script>';

                    }else{

                        if($p2 == ''){
                          $p2 = 'no';
                        }

                        move_uploaded_file($photo, $location);
                        add_mt_content($pdo, $mid, $tid, $p1, $p2, $tc, $location, $mn, $mod, $tnum, $top);

                    }

                }

              }//-------------------------------

            ?>



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