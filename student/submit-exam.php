<?php
header("Content-Type : text/xml");
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';

session_start();
ob_start();
include'../access/access.php';

$opt  = $_GET['opt'];
$user = $_GET['user'];
$cour = $_GET['cour'];
$qid  = $_GET['qid'];

$get = $pdo->prepare("SELECT * FROM course_question WHERE id = ? AND course = ?");
$get->bindParam(1, $qid);
$get->bindParam(2, $cour);
$get->execute();

if($get->rowCount() > 0){
  while($f = $get->fetch()){
    $ans = $f['answer'];
  }
}

if($ans == $opt){
  $mark = 1;
}else{
  $mark = 0;
}

$chk = $pdo->prepare("SELECT * FROM student_q_ans WHERE qid = ? AND course = ? AND user = ?");
$chk->bindParam(1, $qid);
$chk->bindParam(2, $cour);
$chk->bindParam(3, $user);
$chk->execute();

if($chk->rowCount() > 0){

  $upd = $pdo->prepare("UPDATE student_q_ans SET quest_ans = '$ans', stud_ans = '$opt', mark = '$mark' WHERE qid = '$qid' AND course = '$cour' AND user = '$user'");
  $upd->execute();

}else{

  $ins = $pdo->prepare("INSERT INTO student_q_ans (qid,course,user,quest_ans,stud_ans,mark) VALUES (?,?,?,?,?,?)");
  $ins->bindParam(1, $qid);
  $ins->bindParam(2, $cour);
  $ins->bindParam(3, $user);
  $ins->bindParam(4, $ans);
  $ins->bindParam(5, $opt);
  $ins->bindParam(6, $mark);
  $ins->execute();  

}


	
?>
