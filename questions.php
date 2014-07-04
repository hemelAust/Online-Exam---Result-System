<?php session_start(); ?>
<?php 

session_start();
 ob_start();
require_once("scripts/connect_db.php");
$arrCount = "";
if(isset($_GET['question'])){
	$question = preg_replace('/[^0-9]/', "", $_GET['question']);
	$output = "";
	$answers = "";
	$q = "";
	$sql = mysql_query("SELECT q_id FROM questions");
	$numQuestions = mysql_num_rows($sql);
	if(!isset($_SESSION['answer_array']) || $_SESSION['answer_array'] < 1){
		$currQuestion = "1";
	}else{
		$arrCount = count($_SESSION['answer_array']);
	}
	if($arrCount > $numQuestions){
		unset($_SESSION['answer_array']);
		header("location:login_success.php");
		exit();
	}
	if($arrCount >= $numQuestions){
		
			$value=$_SESSION['student_id'];
		
		echo 'finished|<img src="img/goodluck.gif" alt="" class="final_image alignright"><p class="u"><br>There are no more questions. <br>Check your Student Id and click next</p>
				
				<form action="userAnswers.php" method="post" class="final_form">
				<input type="hidden" name="complete" value="true" >
				<input type="text" name="student_id" class="final_field" value="'.$value.'" READONLY>
				<input type="submit" value="Next" class="final_button">
				</form>';
		exit();
	}
	$singleSQL = mysql_query("SELECT * FROM questions WHERE q_id='$question' LIMIT 1");
		while($row = mysql_fetch_array($singleSQL)){
			$id = $row['q_id'];
			$thisQuestion = $row['question'];
			$type = $row['type'];
			$question_id = $row['question_id'];
			$q = '<h2>'.$thisQuestion.'</h2>';
			$sql2 = mysql_query("SELECT * FROM answers WHERE question_id='$question' ORDER BY rand()");
			while($row2 = mysql_fetch_array($sql2)){
				$answer = $row2['answer'];
				$correct = $row2['correct'];
				$answers .= '<label style="cursor:pointer;"><input type="radio" name="rads" value="'.$correct.'">'.$answer.'</label> 
				<input type="hidden" id="qid" value="'.$id.'" name="qid"><br /><br />
				';
				
			}
			$output = ''.$q.','.$answers.',<span id="btnSpan"><button onclick="post_answer()" style="width:90px; height:30px; font-size:17px; border:1px solid"><b>Submit</button></b></span>';
			echo $output;
		   }
		}
	

?>
