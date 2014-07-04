<?php 
	session_start();
	unset($_SESSION['student_id']);
	$_SESSION['session_msg']  = "<p style=".'color:red'.">Successfully logged out</p>";
	header("location:login.php");
?>
