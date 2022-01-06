<?php

$getc = $pdo->prepare("SELECT * FROM lchat WHERE course  = ? ORDER BY id DESC");
$getc->bindParam(1, $mc);
$getc->execute();
  
  if($getc->rowCount() > 0){

    while($fc = $getc->fetch()){

      if($fc['who'] == 'student'){

        echo'<p style="float:right;width:85%;background:rgba(0,50,50,0.2);color:black;padding:10px;border-top-left-radius:20px;border-bottom-left-radius:20px;">';

          echo '<i style="color:green; font-size:12px;font-weight:bold;">'.$fc['name'].'</i> <br> '.$fc['msg'];

        echo'</p>';

      }else{

        echo'<p style="float:left;width:85%;background:rgba(0,50,0,0.7);color:white;padding:10px;border-top-right-radius:20px;border-bottom-right-radius:20px;">';

         echo '<i style="color:gold; font-size:12px;font-weight:bold;">Tutor('.$fc['course'].')</i> <br> '.$fc['msg'];

        echo'</p>';

      }

    }

  }else{
    echo'<center style="color:red">No Chat !!</center>';
  }

	
?>
