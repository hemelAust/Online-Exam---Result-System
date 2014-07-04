<?php 
session_start();
include_once('scripts/connect_db.php');
$sql=mysql_query("TRUNCATE TABLE quiz_takers");

if($sql)
{
	$_SESSION['truncate']="<p style=".'color:red'.">Table Has Been Emptied & Indexes Set Back To 0</p>";
	header('location: sampleQuestions.php');
}
else
{
	$_SESSION['truncate']="Error";
	header('location: sampleQuestions.php');
}


?>