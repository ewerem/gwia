<?php
session_start();
ob_start();
include'../access/access.php';

if(!isset($_SESSION['user'])){
  header('location:slogin.php');
}

//exam calculation

if(isset($_GET['user'])){

  $us = base64_decode($_GET['user']);
  $co = base64_decode($_GET['cour']);

  $m = $pdo->prepare("SELECT * FROM student_q_ans WHERE course = ? AND user = ?");
  $m->bindParam(1, $co);
  $m->bindParam(2, $us);
  $m->execute();

  if($m->rowCount() > 0){
    $score = 0;
    while($fm = $m->fetch()){
      $score += $fm['mark'];
    }
  }

  //percentage
  $tot = $m->rowCount();
  $divide = $score/$tot;
  $pcent = round($divide * 100);

  if($pcent > 80){
    $subs = $pdo->prepare("INSERT INTO certified (course,email,time) VALUES (?,?,CURRENT_TIMESTAMP)");
    $subs->bindParam(1, $co);
    $subs->bindParam(2, $us);
    $subs->execute();

    if($subs){
      $del = $pdo->prepare("DELETE FROM student_q_ans WHERE user = ? AND course = ?");
      $del->bindParam(1, $us);
      $del->bindParam(1, $co);
      $del->execute();

      header('location:exam.php?score='.base64_encode($pcent));
    }
  }else{

      $del = $pdo->prepare("DELETE FROM student_q_ans WHERE user = ? AND course = ?");
      $del->bindParam(1, $us);
      $del->bindParam(2, $co);
      $del->execute();

      if($del){
        header('location:exam.php?score='.base64_encode($pcent));
      }
  }
}

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Take Exams</title>
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

  <script>
    
    var xmlHttp = createXmlHttpRequestObject();

    function createXmlHttpRequestObject(){
      var xmlHttp;
      if(window.ActiveXObject){

        try{
          xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");

        }catch(e){
          xmlHttp = false;
        }

      }else{


        try{
          xmlHttp = new XMLHttpRequest();

        }catch(e){
          xmlHttp = false;
        }

      }

      if(!xmlHttp){
        alert("Object not created");
      }else{

        return xmlHttp;
      }
    }

    function processA(){
      if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){

        opt = encodeURIComponent(document.getElementById('a').value);
        user = encodeURIComponent(document.getElementById('user').value);
        cour = encodeURIComponent(document.getElementById('cour').value);
        qid  = encodeURIComponent(document.getElementById('qid').value);

        xmlHttp.open("GET","submit-exam.php?opt="+opt+"&user="+user+"&cour="+cour+"&qid="+qid,true);
        xmlHttp.send(null);

      }else{

        setTimeout('process()',2000);
        
      }

    }

    function processB(){
      if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){

        opt = encodeURIComponent(document.getElementById('b').value);
        user = encodeURIComponent(document.getElementById('user').value);
        cour = encodeURIComponent(document.getElementById('cour').value);
        qid  = encodeURIComponent(document.getElementById('qid').value);

        xmlHttp.open("GET","submit-exam.php?opt="+opt+"&user="+user+"&cour="+cour+"&qid="+qid,true);
        xmlHttp.send(null);

      }else{

        setTimeout('process()',2000);
        
      }

    }

    function processC(){
      if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){

        opt = encodeURIComponent(document.getElementById('c').value);
        user = encodeURIComponent(document.getElementById('user').value);
        cour = encodeURIComponent(document.getElementById('cour').value);
        qid  = encodeURIComponent(document.getElementById('qid').value);

        xmlHttp.open("GET","submit-exam.php?opt="+opt+"&user="+user+"&cour="+cour+"&qid="+qid,true);
        xmlHttp.send(null);

      }else{

        setTimeout('process()',2000);
        
      }

    }

    function processD(){
      if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){

        opt = encodeURIComponent(document.getElementById('d').value);
        user = encodeURIComponent(document.getElementById('user').value);
        cour = encodeURIComponent(document.getElementById('cour').value);
        qid  = encodeURIComponent(document.getElementById('qid').value);

        xmlHttp.open("GET","submit-exam.php?opt="+opt+"&user="+user+"&cour="+cour+"&qid="+qid,true);
        xmlHttp.send(null);

      }else{

        setTimeout('process()',2000);
        
      }

    }

  </script>
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
                  <a class="dropdown-item" href="#" id="dlink">
                    <i class="fas fa-book-reader"></i> Test
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
				<a href="#" id="plink"> <i class="fas fa-book-reader"></i> Test <i class="fas fa-angle-right"></i></a>	
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

                  echo'<h4>';
                    echo'<i class="fas fa-book"></i> '.strtoupper($mc).' QUESTIONS.';
                  echo'</h4><br>';
                  //--------------------------
                }

              }//end of getting course

              //pagination
              //get current page
              if (isset($_GET['page_no']) && $_GET['page_no']) {
                  $page_no = $_GET['page_no'];
                  } else {
                      $page_no = 1;
                      }
              //set total record per page
              $total_records_per_page = 1;

              //calculate offset, next and previous page
              $offset = ($page_no-1) * $total_records_per_page;
              $previous_page = $page_no - 1;
              $next_page = $page_no + 1;
              $adjacents = "2";

              $selq = $gcon->query("SELECT * FROM course_question WHERE course = '$mc'");
              $total = $selq->num_rows;

              $total_no_of_pages = ceil($total/$total_records_per_page);
              $second_last = $total_no_of_pages - 1;

              //get rocords
              $selg = $gcon->query("SELECT * FROM course_question WHERE course = '$mc' LIMIT $offset, $total_records_per_page");
              if($selg->num_rows > 0){

                while($fc = $selg->fetch_object()){

              ?>

                <div style="height: auto; border:1px solid grey; border-radius: 5px; padding: 10px; ">

                  <h5 style="font-size: 20px;">
                    Q <?=$page_no?> <i class="fas fa-angle-right"></i> <?=strtoupper($fc->question)?>
                  </h5>
                  <br>

                  <h6>
                    (A) <input type="radio" name="ans" id="a" value="a" onchange="processA()"> <?=$fc->optA?>
                    <input type="hidden" id="cour" value="<?=$mc?>">
                    <input type="hidden" id="user" value="<?=$user?>">
                    <input type="hidden" id="qid" value="<?=$fc->id?>">
                  </h6>

                  <h6>
                    (B) <input type="radio" name="ans" id="b" value="b" onchange="processB()"> <?=$fc->optB?>
                    <input type="hidden" id="cour" value="<?=$mc?>">
                    <input type="hidden" id="user" value="<?=$user?>">
                    <input type="hidden" id="qid" value="<?=$fc->id?>">
                  </h6>

                  <h6>
                    (C) <input type="radio" name="ans" id="c" value="c" onchange="processC()"> <?=$fc->optC?>
                    <input type="hidden" id="cour" value="<?=$mc?>">
                    <input type="hidden" id="user" value="<?=$user?>">
                    <input type="hidden" id="qid" value="<?=$fc->id?>">
                  </h6>

                  <h6>
                    (D) <input type="radio" name="ans" id="d" value="d" onchange="processD()"> <?=$fc->optD?>
                    <input type="hidden" id="cour" value="<?=$mc?>">
                    <input type="hidden" id="user" value="<?=$user?>">
                    <input type="hidden" id="qid" value="<?=$fc->id?>">
                  </h6>

                </div>

              <?php

                 }

              }
                
              ?>

              <br><p></p>

                <ul class="pagination justify-content-center">
                <?php if($page_no > 1){
                echo "<li style='padding:5px 10px; border-radius:2px;border:1px solid #bbb;'><a href='?page_no=1'>First Page</a></li>";
                } 
                ?>
                    
                <li style="padding:5px 10px; border-radius:2px;border:1px solid #bbb;" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                <a <?php if($page_no > 1){
                echo "href='?page_no=$previous_page'";
                } ?>>Previous</a>
                </li>
                    
                <li style="padding:5px 10px; border-radius:2px;border:1px solid #bbb;" <?php if($page_no >= $total_no_of_pages){
                echo "class='disabled'";
                } ?>>

                <a <?php if($page_no < $total_no_of_pages) {
                echo "href='?page_no=$next_page'";
                } ?>>Next</a>
                </li>
                 
                <?php if($page_no < $total_no_of_pages){
                echo "<li style='padding:5px 10px; border-radius:2px;border:1px solid #bbb;'><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                } ?>
                </ul>

                <br>

                <?php
                  error_reporting(0);
                  $us = $_SESSION['user'];

                  $q = $pdo->prepare("SELECT * FROM student_q_ans WHERE user = ?");
                  $q->bindParam(1, $us);
                  $q->execute();

                  if($q->rowCount() > 0){
                    while($gm = $q->fetch()){
                      $c = $gm['course'];
                    }
                  }//getting course for finishing

                  echo'<center>
                    <a href="exam2.php?user='.base64_encode($us).'&cour='.base64_encode($c).'" class="btn btn-lg btn-red">
                      FINISH TEST <i class="fas fa-arrow-right"></i>
                    </a>
                  </center>';

                ?>

              <!-- //////////////////////////////////// -->
              <br>
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