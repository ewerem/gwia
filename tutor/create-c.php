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
    <title>Create Course</title>
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

          <hr/>

          <div class="row">
            <div class="col-sm-12 col-md-6">
              <a href="#" class="btn btn-primary btn-large btn-block" data-toggle="modal" data-target="#basicExampleModal">
                <i class="fas fa-plus"></i> ADD COURSE MODULES
              </a>
            </div>
            <div class="col-sm-12 col-md-6">
              <a href="#" class="btn btn-green btn-large btn-block" data-toggle="modal" data-target="#basicExampleModaltq">
                <i class="fas fa-plus"></i> COURSE TEST QUESTIONS
              </a>
              <p></p>
            </div>
          </div>
          <br><br>

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

          $sel2 = $pdo->prepare("SELECT * FROM c_modules WHERE mcourse = ? ORDER BY mnum ASC");
          $sel2->bindParam(1, $mc);
          $sel2->execute();
          if($sel2->rowCount() > 0){

            while($fc = $sel2->fetch()){

          ?>

            <h6 style="padding: 15px; border: 1px solid #aaa;border-radius: 5px;">
              <a href="module-t.php?id=<?=base64_encode($fc['id'])?>&mod=<?=base64_encode($fc['mtitle'])?>&mn=<?=base64_encode($fc['mnum'])?>" id="mlink" style="color: #000;">
               MODULE <?=$fc['mnum']?> <i class="fas fa-angle-right"></i> <?=strtoupper($fc['mtitle'])?>
              </a>
              <a data-toggle="modal" data-target="#basicExampleModal<?=$fc['id']?>" style="float: right;color:black">
                <i class="fas fa-edit"></i>
              </a>
            </h6>
            <p></p>

            <!-- Modal Edit Module-->
              <div class="modal fade" id="basicExampleModal<?=$fc['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        EDIT COURSE MODULE
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        
                        <form method="post">
                          <div class="md-form">
                            <input class="form-control" id="email" type="text" name="mtitle" value="<?=$fc['mtitle']?>" />
                            <label for="email"><i class="fas fa-edit"></i> Enter New Module Title</label>
                          </div>

                          <div class="md-form">
                            <input class="form-control" id="email" type="text" name="mnum" value="<?=$fc['mnum']?>" />
                            <label for="email"><i class="fas fa-edit"></i> Enter New Module Number</label>
                          </div>

                          <input type="hidden" name="mid" value="<?=$fc['id']?>">

                          <button class="btn btn-indigo btn-block ml-0" name="sub<?=$fc['id']?>" type="submit"><i class="fas fa-paper-plane mr-2"></i> 
                            Edit Course Module
                          </button>
                        </form>

                      <?php

                        $id = $fc['id'];

                        if(isset($_POST['sub'.$id])){

                          $mt = $_POST['mtitle'];
                          $mid = $_POST['mid'];
                          $mn = $_POST['mnum'];

                            $upd2 = $pdo->prepare("UPDATE c_modules SET mtitle = ?, mnum = ? WHERE id = ?");
                            $upd2->bindParam(1, $mt);
                            $upd2->bindParam(2, $mn);
                            $upd2->bindParam(3, $mid);
                            $upd2->execute();

                            if($upd2){

                              echo'<script>alert("SUCCESSFULLY EDITED !!");</script>';
                              echo'<meta http-equiv="refresh" content="0; url=create-c.php">';

                            }//------------------

                        }//-------------------------------

                      ?>



                    </div>
                  </div>
                </div>
              </div>
              <!-- end of modal -->

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
              ADD COURSE MODULE
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
              
              <form method="post">
                <div class="md-form">
                  <input class="form-control" id="email" type="text" name="mtitle" required="required"/>
                  <label for="email"><i class="fas fa-edit"></i> Module Title</label>
                </div>

                <input type="hidden" name="tcourse" value="<?=$f['tcourse']?>">

                <button class="btn btn-indigo btn-block ml-0" name="subm" type="submit"><i class="fas fa-paper-plane mr-2"></i> 
                  Submit
                </button>
              </form>

            <?php

                }
              }

              //submitting module

              if(isset($_POST['subm'])){

                $mt = $_POST['mtitle'];
                $tc = $_POST['tcourse'];

                add_module($pdo, $mt, $tc);

              }//-------------------------------

            ?>



          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->

    <!-- Modal test question-->
    <div class="modal fade" id="basicExampleModaltq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              ADD MODULE TEST QUESTIONS
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
              
                <div class="">
                  <label for="email"><i class="fas fa-edit"></i> Question</label>
                  <textarea class="form-control" id="quest" required="required"></textarea>
                </div>

                <div class="">
                  <p></p>
                  <input class="form-control" type="text" placeholder="Enter option A" id="opta" required="required"/>
                </div>

                <div class="">
                  <p></p>
                  <input class="form-control" type="text" placeholder="Enter option B" id="optb" required="required"/>
                </div>

                <div class="">
                  <p></p>
                  <input class="form-control" type="text" placeholder="Enter option C" id="optc" required="required"/>
                </div>

                <div class="">
                  <p></p>
                  <input class="form-control" type="text" placeholder="Enter option D" id="optd" required="required"/>
                </div>

                <div class="">
                  <p></p>
                  <label for="email"><i class="fas fa-edit"></i> Answer to question</label>
                  <select id="ans" class="form-control">
                    <option value="default"></option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                  </select>
                </div>

                <input type="hidden" id="course" value="<?=$f['tcourse']?>">

                <p></p>
                <button class="btn btn-indigo btn-block ml-0" id="submqt" type="submit"><i class="fas fa-paper-plane mr-2"></i> 
                  Submit
                </button>

            <?php

                }
              }

            ?>



          </div>
        </div>
      </div>
    </div>
    <!-- end of modal test quetion-->

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

    <script>
      
      $(document).ready(function(){

        $('#submqt').click(function(){

          $('#submqt').html('submitting...........');

          var quest = $('#quest').val();
          var opta  = $('#opta').val();
          var optb  = $('#optb').val();
          var optc  = $('#optc').val();
          var optd  = $('#optd').val();
          var ans   = $('#ans').val();
          var cou   = $('#course').val();

          //alert(quest+' - '+opta+' - '+optb+' - '+optc+' - '+optd+' - '+ans+' - '+cou);

          if(quest == '' || opta == '' || optb == '' || optc == '' || optd == '' || ans == ''){

            alert('ALL FIELDS ARE REQUIRED !!');
            $('#submqt').html('submit');

          }else{

            $.ajax({

              url:'submitquest.php',
              method:'post',
              data:{q:quest, oa:opta, ob:optb, oc:optc, od:optd, ans:ans, co:cou},
              success:function(data){

                $('#submqt').html('submit');
                quest = $('#quest').val('');
                opta  = $('#opta').val('');
                optb  = $('#optb').val('');
                optc  = $('#optc').val('');
                optd  = $('#optd').val('');
                ans   = $('#ans').val('');

                alert(data);

              }

            });

          }

        });

      });

    </script>
    
  </body>
</html>