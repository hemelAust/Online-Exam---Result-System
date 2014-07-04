<?php 
	session_start();
	unset($_SESSION['admin_email_address']);
	$_SESSION['session_msg']  = "Successfully logged out";
	header("location:index.php");
?>
