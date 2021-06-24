<?php


// if user clicks logout button
if (isset($_GET['logout'])) {
	session_start();
	session_destroy(); 
	unset($_SESSION['id']);
	unset($_SESSION['email']);
	session_unset();
	header('location: ../login.php');
	exit();
} // end of logout btn


?>