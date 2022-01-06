<?php  

include'../access/access.php';

if(isset($_POST['co'])){

	$co = strtoupper($_POST['co']);

	$chk = $pdo->prepare("SELECT * FROM country WHERE cname = ?");
	$chk->bindParam(1, $co);
	$chk->execute();

	if($chk->rowCount() > 0){

		echo $co.' HAS BEEN ADDED BEFORE !!';

	}else{

		$ins = $pdo->prepare("INSERT INTO country (cname) VALUES (?)");
		$ins->bindParam(1, $co);
		$ins->execute();

		if($ins){

			echo $co.' ADDED SUCCESSFULLY';

		}

	}

}

?>