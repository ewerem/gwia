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
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link href="../adcss/b.css" rel="stylesheet">
    <link href="../adcss/md.css" rel="stylesheet">
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
            <br>
          <div class="row">

            <!--Grid column-->
            <div class="col-lg-6 col-md-6 mb-4">

              <!-- Admin card -->
              <div class="card mt-3">

                <div class="">
                  <i class="fas fa-user-check fa-lg teal z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                  <div class="float-right text-right p-3">
                    <p class="text-uppercase text-muted mb-1" style="font-family: lucida sans; font-weight: bold;">STUDENTS</p>
                    <h4 class="font-weight-bold mb-0">
                      <?php

                        $y = 'yes';
                        $selp3 = $pdo->prepare("SELECT * FROM student WHERE payment = ?");
                        $selp3->bindParam(1, $y);
                        $selp3->execute();

                        if($selp3->rowCount() > 0){

                          echo $selp3->rowCount();

                        }else{
                          echo'0';
                        }

                      ?>
                    </h4>
                  </div>
                </div>

              </div>
              <!-- Admin card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-6 mb-4">

              <!-- Admin card -->
              <div class="card mt-3">

                <div class="">
                  <i class="fas fa-user-tie fa-lg purple z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                  <div class="float-right text-right p-3">
                    <p class="text-uppercase text-muted mb-1" style="font-family: lucida sans; font-weight: bold;">TUTOR</p>
                    <h4 class="font-weight-bold mb-0">
                      <?php

                        $selc3 = $pdo->prepare("SELECT * FROM teacher");
                        $selc3->execute();

                        if($selc3->rowCount() > 0){

                          echo $selc3->rowCount();

                        }else{
                          echo'0';
                        }

                      ?>
                    </h4>
                  </div>
                </div>

              </div>
              <!-- Admin card -->

            </div>
            <!--Grid column-->

          </div>
          <!-- //////////////////////////////////// -->
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <p></p>
              <a href="#" data-toggle="modal" data-target="#centralModalSm" class="btn btn-lg btn-block  btn-indigo">
               <i class="fas fa-plus"></i> Add Country to select field
             </a>
            </div>
            <div class="col-sm-12 col-md-6">
              <p></p>
              <a href="#" data-toggle="modal" data-target="#centralModalSm2" class="btn btn-lg btn-block  btn-primary">
                <i class="fas fa-eye"></i> View Countries Added
              </a>
            </div>
            <!-- Add course button -->
            <div class="col-sm-12 col-md-6">
              <p></p>
              <a href="#" data-toggle="modal" data-target="#centralModalSm3" class="btn btn-lg btn-block  btn-green">
                <i class="fas fa-plus"></i>  Add Course
              </a>
            </div>
            <div class="col-sm-12 col-md-6">
              <p></p>
              <a href="#" data-toggle="modal" data-target="#centralModalSm4" class="btn btn-lg btn-block  btn-success">
                <i class="fas fa-eye"></i> View Courses Added
              </a>
            </div>
          </div>
          <p></p>
          <!-- /////////////////////////////////// -->
          <div class="row" style="border:1px solid #ddd;height: 400px; overflow: auto;padding: 10px;">

            <div class="col-sm-12 col-md-12 col-lg-12" style="border:0px solid #ccc;">
              <center>
                <h6 style="font-family: lucida sans;">
                  PAYMENT ALERT
                </h6>
                <?php  

                  $cg2 = $pdo->prepare("SELECT * FROM payment ORDER BY id DESC");
                  $cg2->execute();

                  if($cg2->rowCount() > 0){

                    echo'<table class="table bordered">';
                    echo'
                      <tr style="background:#440000;color:white;text-align:center;">
                        <td style="width:50px;">S/N</td>
                        <td style="width:100px;">PAYMENT <br> CHANNEL</td>
                        <td>STUDENT <br> EMAIL</td>
                        <td>COURSE</td>
                        <td>AMOUNT <br> PAID</td>
                        <td>P-CHANNEL <br> EMAIL</td>
                        <td>DATE</td>
                      </tr>
                    ';
                    $count = 1;
                    while($f = $cg2->fetch()){

                ?>

                    <tr style="text-align:center;">
                      <td>
                        <?=$count++;?>
                      </td>
                      <td>
                        <?=$f['p_channel']?>
                      </td>
                      <td>
                        <?= $f['user'];?>
                      </td>
                      <td>
                        <?= $f['course'];?>
                      </td>
                      <td>
                        <?=$f['amt']?>
                      </td>
                      <td>
                        <?=$f['email']?>
                      </td>
                      <td>
                        <?=date('d/M/Y, h:i,a', strtotime($f['time']))?>
                      </td>
                    </tr>

                <?php

                    }
                    $count++;
                    echo'</table>';

                  }else{
                    echo'<font color="red">No payment alert !!</font>';
                  }

                ?>

              </center>
              <hr>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12" style="border:1px solid #ccc;">
              
                <p></p>

                  <div>
                    <center style="font-weight: bold;font-family: lucida sans">ACCOUNT ACTIVATION</center>
                    <br>
                    <i>Enter student Email</i>
                    <input class="form-control" id="email" type="text" name="subs" required="required"/>
                    <p></p>

                    <i>Select Action</i>
                    <select class="form-control" id="yes" name="subs" required="required">
                      <option value=""></option>
                      <option value="yes">Activate Account</option>
                      <option value="no">Deactivate Account</option>
                    </select>
                    <p></p>
                  </div>

                  <button name="sub" id="actac" class="btn btn-primary btn-block ml-0" type="submit"> 
                    PERFORM ACTION
                  </button>
                  
                <p></p>

            </div>
            
          </div>

        </div>

      </div>
      
    </div>

    <!-- modal add country -->
    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-sm" role="document">

        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel" style="font-weight: bold;">Add Country</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p></p>
            <center>

              <div class="md-form">
                <input class="form-control" id="country" type="text" name="subs" required="required"/>
                <label for="email"><i class="fas fa-home"></i> Enter Country</label>
              </div>

              <button name="sub" id="addco" class="btn btn-secondary btn-block ml-0" type="submit"> 
                Submit
              </button>
              
            </center>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Central Modal Small -->

    <!-- modal add course -->
    <div class="modal fade" id="centralModalSm3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel" style="font-weight: bold;">Add Course</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p></p>
            <center>

              <div class="md-form">
                <input class="form-control" id="cname" type="text" name="subs" required="required"/>
                <label for="email"><i class="fas fa-edit"></i> Course Name</label>
              </div>

              <div class="md-form">
                <input class="form-control" id="cdollar" type="text" name="subs" required="required"/>
                <label for="email"><i class="fas fa-edit"></i> Cost in Dollars</label>
              </div>

              <div class="md-form">
                <input class="form-control" id="cnaira" type="text" name="subs" required="required"/>
                <label for="email"><i class="fas fa-edit"></i> Cost in Naira</label>
              </div>

              <div class="md-form">
                <input class="form-control" id="abbr" type="text" name="subs" required="required"/>
                <label for="email"><i class="fas fa-edit"></i> Course Abbreviation</label>
              </div>

              <button name="addcou" id="addcourse" class="btn btn-green btn-block ml-0" type="submit"> 
                Submit
              </button>
              
            </center>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <!-- end of add course -->

    <!-- modal view country-->
    <div class="modal fade" id="centralModalSm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-sm" role="document">

        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel" style="font-weight: bold;">Countries Added</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="height: 600px; overflow: auto;">
            <p></p>
            <center>

              <?php  

                $cget = $pdo->prepare("SELECT * FROM country ORDER BY cname ASC");
                $cget->execute();

                if($cget->rowCount() > 0){

                  echo'<table class="table">';
                  echo'
                    <tr style="background:black;color:white;">
                      <td style="width:50px;">S/N</td>
                      <td>COUNTRY</td>
                    </tr>
                  ';
                  $count = 1;
                  while($f = $cget->fetch()){

              ?>

                  <tr>
                    <td>
                      <?=$count++;?>
                    </td>
                    <td>
                      <?=strtoupper($f['cname'])?>
                      <a href="gdashboard.php?id=<?=base64_encode($f['id'])?>&dco&co=<?=$f['cname']?>" style="float: right;">
                        <i class="fas fa-times" style="color: red;"></i>
                      </a>
                    </td>
                  </tr>

              <?php

                  }
                  $count++;
                  echo'</table>';

                }

              ?>
              
            </center>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <!-- end of view country -->

    <!-- modal view course-->
    <div class="modal fade" id="centralModalSm4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-fluid" role="document">

        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel" style="font-weight: bold;">Courses Added</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="height: 550px; overflow: auto;">
            <p></p>
            <center>

              <?php  

                $cg = $pdo->prepare("SELECT * FROM course ORDER BY id DESC");
                $cg->execute();

                if($cg->rowCount() > 0){

                  echo'<table class="table bordered">';
                  echo'
                    <tr style="background:black;color:white;text-align:center;">
                      <td style="width:50px;">S/N</td>
                      <td style="width:400px;">COURSE</td>
                      <td>COST IN <br> DOLLARS</td>
                      <td>COST IN <br> NAIRA</td>
                      <td>ABBR</td>
                      <td>DATE <br> ADDED</td>
                    </tr>
                  ';
                  $count = 1;
                  while($f = $cg->fetch()){

              ?>

                  <tr style="text-align:center;">
                    <td>
                      <?=$count++;?>
                    </td>
                    <td>
                      <?=strtoupper($f['cname'])?>
                    </td>
                    <td>
                      <?php echo'$'.$f['costd'];?>
                    </td>
                    <td>
                      <?php echo'&#8358;'.$f['costn'];?>
                    </td>
                    <td>
                      <?=strtoupper($f['abbr'])?>
                    </td>
                    <td>
                      <?=date('d/m/Y', strtotime($f['time']))?>
                      <a href="remove-co.php?id=<?=base64_encode($f['id'])?>&co=<?=$f['cname']?>" style="float: right;">
                        <i class="fas fa-times" style="color: red;"></i>
                      </a>
                    </td>
                  </tr>

              <?php

                  }
                  $count++;
                  echo'</table>';

                }else{
                  echo'<font color="red">No data !!</font>';
                }

              ?>
              
            </center>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <!-- endom of view course -->

    <?php  
    //deleting country
      if(isset($_GET['dco'])){

        $id = base64_decode($_GET['id']);
        $co = $_GET['co'];

        $d = $pdo->prepare("DELETE FROM country WHERE id = ?");
        $d->bindParam(1, $id);
        $d->execute();

        if($d){

          echo'<script>alert("DELETED SUCCESSFULLY !!");</script>';
          echo'<meta http-equiv="refresh" content="0; url=gdashboard.php">';

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

    <script>

      $(document).ready(function(){

        $('#addco').click(function(){

          $('#addco').html('submitting......');
          var country = $('#country').val();

          if(country == ''){

            alert('Enter Country Before submitting !!');
            $('#addco').html('SUBMIT');

          }else{

            $.ajax({

              url:'ajax-country.php',
              method:'post',
              data:{co:country},
              success:function(data){

                $('#addco').html('SUBMIT');
                $('#country').val('');
                alert(data);

              }

            });

          }

        });

        //--------------end of country submit

        
        $('#actac').click(function(){

          $('#actac').html('performing action...............');
          var em  = $('#email').val();
          var ac  = $('#yes').val();

          if(country == '' || ac == ''){

            alert('ALL FIELDS ARE REQUIRED !!');
            $('#actac').html('PERFORM ACTION');

          }else{

            $.ajax({

              url:'ajax-activate.php',
              method:'post',
              data:{email:em,action:ac},
              success:function(data){

                $('#actac').html('PERFORM ACTION');
                $('#email').val('');
                $('#yes').val('');
                alert(data);

              }

            });

          }

        });//-------------------- end of activating account


        $('#addcourse').click(function(){

          $('#addcourse').html('Adding Course...................');
          var cnm = $('#cname').val();
          var cna = $('#cnaira').val();
          var cdo = $('#cdollar').val();
          var abb = $('#abbr').val();

          if(cnm == '' || cna == '' || cdo == '' || abb == ''){

            alert('ALL FIELDS ARE REQUIRED !!');
            $('#addcourse').html('SUBMIT');

          }else{

            $.ajax({

              url:'addcourse.php',
              method:'post',
              data:{cname:cnm, cnaira:cna, cdollar:cdo, abbr:abb},
              success:function(data){

                $('#addcourse').html('SUBMIT');
                $('#cname').val('');
                $('#cnaira').val('');
                $('#cdollar').val('');
                $('#abbr').val('');
                alert(data);

              }

            });

          }

        });//----------------end of adding course


      });
      
    </script>
    
  </body>
</html>