<?php  

include'../access/access.php';

if(isset($_POST['cname'])){

	$cnm = $_POST['cname'];
	$cna = $_POST['cnaira'];
	$cdo = $_POST['cdollar'];
	$abb = $_POST['abbr'];

	$chk = $pdo->prepare("SELECT * FROM course WHERE cname = ? OR abbr = ?");
	$chk->bindParam(1, $cnm);
	$chk->bindParam(2, $abb);
	$chk->execute();

	if($chk->rowCount() > 0){

		echo'THIS COURSE HAS BEEN ADDED BEFORE !!';

	}else{

		$ins = $pdo->prepare("INSERT INTO course (cname,costn,costd,abbr,time) VALUES (?,?,?,?,CURRENT_TIMESTAMP)");
		$ins->bindParam(1, $cnm);
		$ins->bindParam(2, $cna);
		$ins->bindParam(3, $cdo);
		$ins->bindParam(4, $abb);
		$ins->execute();

		if($ins){

			echo strtoupper($cnm).' ADDED SUCCESSFULLY';

		}

	}

}

?>