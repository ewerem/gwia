<?php 

include'../access/access.php';

if(isset($_POST['q'])){

	$q 	 = $_POST['q'];
	$oa  = $_POST['oa'];
	$ob  = $_POST['ob'];
	$oc  = $_POST['oc'];
	$od  = $_POST['od'];
	$ans = $_POST['ans'];
	$co = $_POST['co'];

	$ins = $pdo->prepare("INSERT INTO course_question (course,question,optA,optB,optC,optD,answer) VALUES (?,?,?,?,?,?,?)");
	$ins->bindParam(1, $co);
	$ins->bindParam(2, $q);
	$ins->bindParam(3, $oa);
	$ins->bindParam(4, $ob);
	$ins->bindParam(5, $oc);
	$ins->bindParam(6, $od);
	$ins->bindParam(7, $ans);
	$ins->execute();

	if($ins){

		$chk = $pdo->prepare("SELECT * FROM course_question WHERE course = ?");
		$chk->bindParam(1, $co);
		$chk->execute();

		$num = $chk->rowCount();

		echo $num.' QUESTIONS ADDED SUCCESSFULLY';

	}

}

?>