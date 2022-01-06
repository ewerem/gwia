<?php  

session_start();
ob_start();
include'../access/access.php';

if(isset($_SESSION['super'])){

	session_destroy();
	header('location:super-login.php');

}else{
	header('location:../index.php');
}

?>