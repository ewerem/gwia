<?php  

session_start();
ob_start();
include'../access/access.php';

if(isset($_SESSION['tutor'])){

	session_destroy();

	header('location:../index.php');

}else{

	header('location:../index.php');

}

?>