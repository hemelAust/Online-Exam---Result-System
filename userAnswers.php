
<?php session_start(); ?>

<?php 

session_start();
 ob_start();
if(isset($_POST['radio']) && $_POST['radio'] != ""){
	$answer = preg_replace('/[^0-9]/', "", $_POST['radio']);
	if(!isset($_SESSION['answer_array']) || count($_SESSION['answer_array']) < 1){
		$_SESSION['answer_array'] = array($answer);
	}else{
		array_push($_SESSION['answer_array'], $answer);
	}
	
}
if(isset($_POST['qid']) && $_POST['qid'] != ""){
	$qid = preg_replace('/[^0-9]/', "", $_POST['qid']);
	if(!isset($_SESSION['qid_array']) || count($_SESSION['qid_array']) < 1){
		$_SESSION['qid_array'] = array($qid);
	}else{
		array_push($_SESSION['qid_array'], $qid);
	}
	$_SESSION['lastQuestion'] = $qid;
}
?>
<?php
require_once("scripts/connect_db.php");
$response = ""; 
	if(!isset($_SESSION['answer_array']) || count($_SESSION['answer_array']) < 1){
		$response = "<br><br><br><br><center><h1><b>You have not answered any questions yet</b></h1></center><br>
					<center><h1>Get the Result With a PDF</center></h1>";
		echo $response;
		echo '<center><form action="pdf/generate-pdf.php" method="post">
				<input type="submit" value="        Genarate PDF          ">
				</form></center>';
		
	exit();
}else{
		$countCheck = mysql_query("SELECT q_id FROM questions")or die(mysql_error());
		$count = mysql_num_rows($countCheck);
		$numCorrect = 0;
		foreach($_SESSION['answer_array'] as $current){
			if($current == 1){
				$numCorrect++;
			}
		}
		$percent = $numCorrect / $count * 100;
		$percent = intval($percent);
	if(isset($_POST['complete']) && $_POST['complete'] == "true"){
		if(!isset($_POST['student_id']) || $_POST['student_id'] == ""){
			$response = "<br><br><br><br><center><h1>Sorry, We had an error</h1></center>";
			echo $response;
			echo '<center><form action="pdf/generate-pdf.php" method="post">
				<input type="submit" value="        Genarate PDF          ">
				</form></center>';
			exit();
		}
		$student_id = $_POST['student_id'];
		$student_id = mysql_real_escape_string($student_id);
		$student_id = strip_tags($student_id);
	if(!in_array("1", $_SESSION['answer_array'])){
		$sql = mysql_query("INSERT INTO quiz_takers (student_id, percentage, date_time) 
		VALUES ('$student_id', '0', now())")or die(mysql_error());
		$response = "<br><br><br><br><center><h1>Did you even read the questions? You scored $percent%, You must work hard!</h1></center><br>
		<center><h1>Get the Result With a PDF</center></h1><br>";
		echo $response;
		echo '<center><form action="pdf/generate-pdf.php" method="post">
				<input type="submit" value="        Genarate PDF          ">
				</form></center>';
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		exit();
	}
	$sql = mysql_query("INSERT INTO quiz_takers (student_id, percentage, date_time) 
	VALUES ('$student_id', '$percent', now())")or die(mysql_error());
		$response =  "<br><br><br><br><center><h1>Thanks for taking the quiz! You scored $percent%</h1></center><br>
					<center><h1>Get the Result With a PDF</center></h1>	 ";
		echo $response;
		echo '<center><form action="pdf/generate-pdf.php" method="post">
				<input type="submit" value="        Genarate PDF          ">
				</form></center>';
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		exit();
	}
}
?>
