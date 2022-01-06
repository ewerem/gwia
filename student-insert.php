<?php  

include'access/access.php';

if(isset($_POST['sname'])){

	$sn = $_POST['sname'];
	$on = $_POST['oname'];
	$em = $_POST['email'];
	$co = $_POST['country'];
	$st = $_POST['state'];
	$ad = $_POST['address'];
	$ge = $_POST['gender'];
	$cs = $_POST['course'];
	$ld = $_POST['leveledu'];
	$pa = $_POST['pass'];
	$cp = $_POST['cpass'];
	$te = $_POST['terms'];

	if($em == '' || $co == 'default' || $sn == '' || $pa == '' || $cp == '' || $on == '' || $st == '' || $ad == '' || $ld == 'default' || $ge == 'default' || $cs == 'default'){

		echo'ALL FIELDS ARE REQUIRED !!';

	}else{
	
		if(filter_var($em, FILTER_VALIDATE_EMAIL)){

			if($pa != $cp){

			echo'PASSWORD MIS-MATCHED !!';

			}else{

				if($te == 'default'){

					echo'ACCEPT TERMS AND CONDITIONS !!';

				}else{

					$phone = 'no';
					$photo = 'no';
					$pay = 'no';
					$adnum = 'no';

					$get = $pdo->prepare("SELECT * FROM student WHERE email = ?");
					$get->bindParam(1, $em);
					$get->execute();

					if($get->rowCount() < 1){

						$ins = $pdo->prepare("INSERT INTO student (sname,oname,email,country,state,address,gender,course,leveledu,pass,phone,photo,terms,payment,adnum,time) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP)");
						$ins->bindParam(1, $sn);
						$ins->bindParam(2, $on);
						$ins->bindParam(3, $em);
						$ins->bindParam(4, $co);
						$ins->bindParam(5, $st);
						$ins->bindParam(6, $ad);
						$ins->bindParam(7, $ge);
						$ins->bindParam(8, $cs);
						$ins->bindParam(9, $ld);
						$ins->bindParam(10, $pa);
						$ins->bindParam(11, $phone);
						$ins->bindParam(12, $photo);
						$ins->bindParam(13, $te);
						$ins->bindParam(14, $pay);
						$ins->bindParam(15, $adnum);
						$ins->execute();

						if($ins){

							/*$headers = 'GWIA gwiaedu.com'."\r\n".
									'Reply-To:gwia.edu@gmail.com'."\r\n".
									'X-Mailer: php/'. phpversion() . "\r\n";

							$message = 'WELCOME TO GWIA THE WORLD OF THE GREATENANT';

							$mail = mail($em, 'REGISTRATION SUBMITTED', $message, $headers);*/

							

								echo'SUCCESSFULLY SUBMITTED, PLEASE LOGIN TO CONTINUE';

							

						}

					}else{

						echo'THIS EMAIL ALREADY EXIST !!';

					}

				}
			}

		}else{

			echo'PLEASE ENTER A VALID EMAIL ADDRESS !!';
		}

	}

}

?>