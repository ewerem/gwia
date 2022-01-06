<?php 

$pdo = new pdo('mysql:host=localhost;dbname=gwia','root','');
$gcon = new mysqli('localhost', 'root', '', 'gwia');

date_default_timezone_set('Africa/Lagos');

function studlogin($pdo, $user, $pass){

	$sel = $pdo->prepare("SELECT * FROM student WHERE email = ? AND pass = ?");
	$sel->bindParam(1, $user);
	$sel->bindParam(2, $pass);
	$sel->execute();

	if($sel->rowCount() > 0){

	    echo'<center>
	    	<img src="../img/lightbox/preloader.gif">
			<i style="color:green;">processing request</i>
			</center>
	      <p></p>';

	    $_SESSION['user'] = $user;
		echo'<meta http-equiv="refresh" content="1; url=student.php">';

	}else{

		echo'<script>alert("WRONG AUTHENTICATION !!");</script>';

	}

}//-----------------------------------

function adlogin($pdo, $user, $pass){

	$sel = $pdo->prepare("SELECT * FROM admin_gwia WHERE user = ? AND pass = ?");
	$sel->bindParam(1, $user);
	$sel->bindParam(2, $pass);
	$sel->execute();

	if($sel->rowCount() > 0){

	    $_SESSION['admin'] = $user;
		header('location:gdashboard.php');

	}else{

		echo'<script>alert("WRONG AUTHENTICATION !!");</script>';

	}

}//-----------------------------------

function change_stud_pass($pdo, $op, $np, $cp, $user){

	$chk = $pdo->prepare("SELECT * FROM student WHERE email = ? AND pass = ?");
	$chk->bindParam(1, $user);
	$chk->bindParam(2, $op);
	$chk->execute();

	if($chk->rowCount() > 0){

		if($np != $cp){

			echo'<script>alert("PASSWORD MIS-MATCHED !!");</script>';
			echo'<meta http-equiv="refresh" content="0; url=set.php?add3=show">';

		}else{

			$upd = $pdo->prepare("UPDATE student SET pass = '$np' WHERE email = '$user'");
			$upd->execute();

			if($upd){

				echo'<script>alert("PASSWORD CHANGED SUCCESSFULLY !!");</script>';

			}

		}

	}else{

		echo'<script>alert("YOU CANNOT CHANGE THIS PASSWORD !!");</script>';
		echo'<meta http-equiv="refresh" content="0; url=set.php?add3=show">';

	}	

}//----------------------------

function blog_post($pdo, $location, $t, $p1, $p2, $p3, $p4){

	$ins = $pdo->prepare("INSERT INTO blog_post (photo,title,para1,para2,para3,para4,time) VALUES (?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
	$ins->bindParam(1, $location);
	$ins->bindParam(2, $t);
	$ins->bindParam(3, $p1);
	$ins->bindParam(4, $p2);
	$ins->bindParam(5, $p3);
	$ins->bindParam(6, $p4);
	$ins->execute();

	if($ins){

		echo'<script>alert("ARTICLE POSTED SUCCESSFULLY !!");</script>';
		echo'<meta http-equiv="refresh" content="0; url=article.php">';

	}

}//---------------------------

function notice($pdo, $t, $p1){

	$ins = $pdo->prepare("INSERT INTO notice (head,content,time) VALUES (?, ?, CURRENT_TIMESTAMP)");
	$ins->bindParam(1, $t);
	$ins->bindParam(2, $p1);
	$ins->execute();

	if($ins){

		echo'<script>alert("NOTICE POSTED SUCCESSFULLY !!");</script>';
		echo'<meta http-equiv="refresh" content="0; url=notice.php">';

	}

}//---------------------------

function news($pdo, $t, $p1){

	$ins = $pdo->prepare("INSERT INTO news (head,content,time) VALUES (?, ?, CURRENT_TIMESTAMP)");
	$ins->bindParam(1, $t);
	$ins->bindParam(2, $p1);
	$ins->execute();

	if($ins){

		echo'<script>alert("NEWS POSTED SUCCESSFULLY !!");</script>';
		echo'<meta http-equiv="refresh" content="0; url=news.php">';

	}

}//---------------------------

function contact($pdo, $fn, $em, $ph, $co, $msg){

	$ins = $pdo->prepare("INSERT INTO contact (name,email,phone,country,msg,time) VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
	$ins->bindParam(1, $fn);
	$ins->bindParam(2, $em);
	$ins->bindParam(3, $ph);
	$ins->bindParam(4, $co);
	$ins->bindParam(5, $msg);
	$ins->execute();

	if($ins){

		echo'<script>alert("MESSAGE SENT SUCCESSFULLY !!");</script>';
		echo'<meta http-equiv="refresh" content="0; url=index.php?#contact">';

	}

}//---------------------------

function ojob($pdo, $location, $t, $lo, $ty, $st, $js, $jd, $jq, $jsk){

	$ins = $pdo->prepare("INSERT INTO open_job (photo,jtitle,jlocate,jtype,jstop,jsum,jduty,jqualify,jskill,time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
	$ins->bindParam(1, $location);
	$ins->bindParam(2, $t);
	$ins->bindParam(3, $lo);
	$ins->bindParam(4, $ty);
	$ins->bindParam(5, $st);
	$ins->bindParam(6, $js);
	$ins->bindParam(7, $jd);
	$ins->bindParam(8, $jq);
	$ins->bindParam(9, $jsk);
	$ins->execute();

	if($ins){

		echo'<script>alert("JOB VACANCY POSTED SUCCESSFULLY !!");</script>';
		echo'<meta http-equiv="refresh" content="0; url=job.php">';

	}

}//---------------------------

function jobapp($pdo, $location, $sn, $on, $em, $co, $jb){

	$ins = $pdo->prepare("INSERT INTO job_vacancy (cv,sname,oname,email,country,job,time) VALUES (?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
	$ins->bindParam(1, $location);
	$ins->bindParam(2, $sn);
	$ins->bindParam(3, $on);
	$ins->bindParam(4, $em);
	$ins->bindParam(5, $co);
	$ins->bindParam(6, $jb);
	$ins->execute();

	if($ins){

		echo'<script>alert("YOUR APPLICATION HAS BEEN SENT SUCCESSFULLY !!");</script>';

	}

}//---------------------------

function add_tutor($pdo, $location, $na, $em, $ph, $co, $st, $tco, $lv, $ge, $pa){

	$chk = $pdo->prepare("SELECT * FROM teacher WHERE email = ?");
	$chk->bindParam(1, $em);
	$chk->execute();

	if($chk->rowCount() > 0){

		echo'<script>alert("EMAIL EXIST. TUTOR HAS BEEN ADDED BEFORE !!");</script>';

	}else{

		$ins = $pdo->prepare("INSERT INTO teacher (photo,name,email,phone,country,state,tcourse,leveledu,gender,pass,time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
		$ins->bindParam(1, $location);
		$ins->bindParam(2, $na);
		$ins->bindParam(3, $em);
		$ins->bindParam(4, $ph);
		$ins->bindParam(5, $co);
		$ins->bindParam(6, $st);
		$ins->bindParam(7, $tco);
		$ins->bindParam(8, $lv);
		$ins->bindParam(9, $ge);
		$ins->bindParam(10, $pa);
		$ins->execute();

		if($ins){

			echo'<script>alert("SUCCESSFULLY ADDED !!");</script>';
			echo'<meta http-equiv="refresh" content="0; url=tutor.php">';

		}

	}	

}//----------------------------

function change_tutor_pass($pdo, $op, $np, $cp, $user){

	$chk = $pdo->prepare("SELECT * FROM teacher WHERE email = ? AND pass = ?");
	$chk->bindParam(1, $user);
	$chk->bindParam(2, $op);
	$chk->execute();

	if($chk->rowCount() > 0){

		if($np != $cp){

			echo'<script>alert("PASSWORD MIS-MATCHED !!");</script>';
			echo'<meta http-equiv="refresh" content="0; url=set.php?add3=show">';

		}else{

			$upd = $pdo->prepare("UPDATE teacher SET pass = '$np' WHERE email = '$user'");
			$upd->execute();

			if($upd){

				echo'<script>alert("PASSWORD CHANGED SUCCESSFULLY !!");</script>';

			}

		}

	}else{

		echo'<script>alert("YOU CANNOT CHANGE THIS PASSWORD !!");</script>';
		echo'<meta http-equiv="refresh" content="0; url=set.php?add3=show">';

	}	

}//----------------------------

function add_module($pdo, $mt, $tc){

	$chk = $pdo->prepare("SELECT * FROM c_modules WHERE mcourse = ?");
	$chk->bindParam(1, $tc);
	$chk->execute();

	if($chk->rowCount() > 0){

		$mu = $chk->rowCount() + 1;

	}else{

		$mu = 1;

	}

	$ins = $pdo->prepare("INSERT INTO c_modules (mtitle,mcourse,mnum,time) VALUES (?, ?, ?, CURRENT_TIMESTAMP)");
	$ins->bindParam(1, $mt);
	$ins->bindParam(2, $tc);
	$ins->bindParam(3, $mu);
	$ins->execute();

	if($ins){

		echo'<script>alert("MODULE SUCCESSFULLY ADDED !!");</script>';
		echo'<meta http-equiv="refresh" content="0; url=create-c.php">';

	}

}//----------------------------

function add_module_topic($pdo, $mt, $tc, $mid, $mn, $mod){

	$chk = $pdo->prepare("SELECT * FROM module_topics WHERE mid = ?");
	$chk->bindParam(1, $mid);
	$chk->execute();

	if($chk->rowCount() > 0){

		$mu = $chk->rowCount() + 1;

	}else{

		$mu = 1;

	}

	$ins = $pdo->prepare("INSERT INTO module_topics (mid,topic,tnum,tcourse,time) VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP)");
	$ins->bindParam(1, $mid);
	$ins->bindParam(2, $mt);
	$ins->bindParam(3, $mu);
	$ins->bindParam(4, $tc);
	$ins->execute();

	if($ins){

		echo'<script>alert("TOPIC SUCCESSFULLY ADDED !!");</script>';
		echo'<meta http-equiv="refresh" content="0; url=module-t.php?mn='.base64_encode($mn).'&mod='.base64_encode($mod).'&id='.base64_encode($mid).'">';

	}

}//----------------------------

function add_mt_content($pdo, $mid, $tid, $p1, $p2, $tc, $location, $mn, $mod, $tnum, $top){

	$ins = $pdo->prepare("INSERT INTO mt_content (mid, tid, para1, para2, tcourse, file, time) VALUES (?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
	$ins->bindParam(1, $mid);
	$ins->bindParam(2, $tid);
	$ins->bindParam(3, $p1);
	$ins->bindParam(4, $p2);
	$ins->bindParam(5, $tc);
	$ins->bindParam(6, $location);
	$ins->execute();

	if($ins){

		echo'<script>alert("CONTENT SUCCESSFULLY ADDED !!");</script>';
		echo'<meta http-equiv="refresh" content="0; url=topic-c.php?mn='.base64_encode($mn).'&mod='.base64_encode($mod).'&mid='.base64_encode($mid).'&tid='.base64_encode($tid).'&tnum='.base64_encode($tnum).'&top='.base64_encode($top).'">';

	}

}//----------------------------

?>