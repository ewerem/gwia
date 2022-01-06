<?php  

session_start();
ob_start();

include'../access/access.php';

if(isset($_SESSION['user'])){

	session_destroy();

	header('location:slogin.php');

}else{

	header('location:../index.php');
}

?>