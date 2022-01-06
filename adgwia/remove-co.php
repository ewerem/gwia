<?php  
session_start();
ob_start();
include'../access/access.php';
error_reporting(0);

if(!isset($_SESSION['admin'])){
	header('location:glogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link href="../adcss/b.css" rel="stylesheet">
    <link href="../adcss/md.css" rel="stylesheet">

</head>
<body style="background: #fff;">


<br><br><br><br><br>
	<center style="font-size: 25px;color: red;font-family: lucida sans;">

		Are you sure you want to remove <?=strtoupper($_GET['co'])?> from courses

	</center>
		<br><br>
	<center>
		<a href="remove-co.php?id=<?=$_GET['id']?>&del" class="btn" style="background: green; color: white;">YES</a>
		<a href="gdashboard.php" class="btn" style="background: red; color: white;">NO</a>
	</center>


<?php  

	if(isset($_GET['del'])){

		$id = base64_decode($_GET['id']);

		$del = $pdo->prepare("DELETE FROM course WHERE id = ?");
		$del->bindParam(1, $id);
		$del->execute();

		if($del){
			echo'<script>alert("DELETED SUCCESSFULLY !!");</script>';
			echo'<meta http-equiv="refresh" content="0; url=gdashboard.php">';
		}

	}

?>


<!-- scripting file -->
<script src="../javascript/jquery-2.1.1.min.js"></script>
<script src="../javascript/materialize.js"></script>
<script src="../javascript/init.js"></script>

</body>
</html>