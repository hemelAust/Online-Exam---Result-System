<?php
session_start();
if(isset($_POST['qsn_no']) && $_POST['qsn']){

$qsn_no=$_POST['qsn_no'];
$qsn=$_POST['qsn'];
$ans=$_POST['ans'];

	$conn=mysql_connect("localhost","root","")
	or die(mysql_error());
	
	mysql_select_db("online_exam",$conn);
	
	if($qsn_no != null && $qsn!=null && $ans!=null ){
	
	$sql="INSERT INTO samplequestions (sample_questions_id,question_no, question_, answer_) VALUES('','$qsn_no','$qsn','$ans')";
	$_SESSION['confirm'] = "<p style=".'color:red'.">Inserted!</p>";
	header('location: sampleQuestions.php');
	mysql_query($sql,$conn);
	}
	else
	{
		$_SESSION['confirm'] = "Error!";
		header('location: sampleQuestions.php');
	}
	
	
}


?>