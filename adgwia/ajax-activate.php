<?php  

include'../access/access.php';

if(isset($_POST['email'])){

	$em  = $_POST['email'];
	$ac  = $_POST['action'];

	$chk = $pdo->prepare("SELECT * FROM student WHERE email = ?");
	$chk->bindParam(1, $em);
	$chk->execute();

	if($chk->rowCount() > 0){

		$upd = $pdo->prepare("UPDATE student SET payment = ? WHERE email = ?");
		$upd->bindParam(1, $ac);
		$upd->bindParam(2, $em);
		$upd->execute();

		//deleting activation request after activation
		$rs = $pdo->prepare("DELETE FROM payment WHERE user = ?");
		$rs->bindParam(1, $em);
		$rs->execute();

		if($upd){

			echo'ACTION HAS BEEN CARRIED OUT ON '.$em.' ACCOUNT SUCCESSFULLY';

		}

	}else{

		echo'THERE IS NO ACCOUNT WITH THIS EMAIL';

	}

}

?>