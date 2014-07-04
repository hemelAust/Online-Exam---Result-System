<?php session_start();?>
<?php

if(isset($_POST['desc'])){
	if(!isset($_POST['iscorrect']) || $_POST['iscorrect'] == ""){
		echo "<br><br><br><br><br><br><center><h1>Sorry, important data to submit your question is missing.<br><br> Please press back in your browser and try again and make sure you select a correct answer for the question.</h1></center>";
		exit();
	}
	if(!isset($_POST['type']) || $_POST['type'] == ""){
		echo "<br><br><br><br><br><br><center><h1>Sorry, there was an error parsing the form.<br><br> Please press back in your browser and try again</h1></center>";
		exit();
	}
	require_once("scripts/connect_db.php");
	$question = $_POST['desc'];
	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];
	$answer4 = $_POST['answer4'];
	$type = $_POST['type'];
	$type = preg_replace('/[^a-z]/', "", $type);
	$isCorrect = preg_replace('/[^0-9a-z]/', "", $_POST['iscorrect']);
	$answer1 = strip_tags($answer1);
	$answer1 = mysql_real_escape_string($answer1);
	$answer2 = strip_tags($answer2);
	$answer2 = mysql_real_escape_string($answer2);
	$answer3 = strip_tags($answer3);
	$answer3 = mysql_real_escape_string($answer3);
	$answer4 = strip_tags($answer4);
	$answer4 = mysql_real_escape_string($answer4);
	$question = strip_tags($question);
	$question = mysql_real_escape_string($question);
	if($type == 'tf'){
	if((!$question) || (!$answer1) || (!$answer2) || (!$isCorrect)){
		echo "<br><br><br><br><br><br><center><h1>Sorry, All fields must be filled in to add a new question to the quiz.<br><br> Please press back in your browser and try again.</h1></center>";
		exit();
		}
	}
	if($type == 'mc'){
	if((!$question) || (!$answer1) || (!$answer2) || (!$answer3) || (!$answer4) || (!$isCorrect)){
		echo "<br><br><br><br><br><br><center><h1>Sorry, All fields must be filled in to add a new question to the quiz.<br><br>Please press back in your browser and try again.</h1></center>";
		exit();
		}
	}
	$sql = mysql_query("INSERT INTO questions (question, type) VALUES ('$question', '$type')")or die(mysql_error());
		$lastId = mysql_insert_id();
		mysql_query("UPDATE questions SET question_id='$lastId' WHERE q_id='$lastId' LIMIT 1")or die(mysql_error());
	//// Update answers based on which is correct //////////
	if($type == 'tf'){
		if($isCorrect == "answer1"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer1', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer2', '0')")or die(mysql_error());
		$_SESSION['session_msg'] = 'Thanks, your question has been added';
	  header('location: addQuestions.php');
	  
	exit();
	}
	if($isCorrect == "answer2"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer2', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer1', '0')")or die(mysql_error());
		$_SESSION['session_msg'] = 'Thanks, your question has been added';
		
	  header('location: addQuestions.php');
	 
	exit();
		}	
	}
	if($type == 'mc'){
		if($isCorrect == "answer1"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer1', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer2', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer3', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer4', '0')")or die(mysql_error());
		$_SESSION['session_msg'] = 'Thanks, your question has been added';
	  header('location: addQuestions.php');
	exit();
	}
	if($isCorrect == "answer2"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer2', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer1', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer3', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer4', '0')")or die(mysql_error());
		$_SESSION['session_msg']= 'Thanks, your question has been added';
	  	header('location: addQuestions.php');
	  
	exit();
	}
	if($isCorrect == "answer3"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer3', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer1', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer2', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer4', '0')")or die(mysql_error());
		$_SESSION['session_msg'] = 'Thanks, your question has been added';
	  header('location: addQuestions.php');
	exit();
	}
	if($isCorrect == "answer4"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer4', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer1', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer2', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer3', '0')")or die(mysql_error());
		$_SESSION['session_msg'] = 'Thanks, your question has been added';
	  header('location: addQuestions.php');
	exit();
		}
	}
}
?>
<?php 
$msg = "";
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];

}

?>
<?php 
if(isset($_POST['reset']) && $_POST['reset'] != ""){
	$reset = preg_replace('/^[a-z]/', "", $_POST['reset']);
	require_once("scripts/connect_db.php");
	mysql_query("TRUNCATE TABLE questions")or die(mysql_error());
	mysql_query("TRUNCATE TABLE answers")or die(mysql_error());
	$sql1 = mysql_query("SELECT q_id FROM questions LIMIT 1")or die(mysql_error());
	$sql2 = mysql_query("SELECT a_id FROM answers LIMIT 1")or die(mysql_error());
	$numQuestions = mysql_num_rows($sql1);
	$numAnswers = mysql_num_rows($sql2);
	if($numQuestions > 0 || $numAnswers > 0){
		echo  "Sorry, there was a problem reseting the quiz. Please try again later.";
		exit();
		
	}else{
		echo "<p style=".'color:red'.">Thanks! The quiz has now been reset back to 0 questions.</p>";
		exit();
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
 
<title>Create Quiz</title>
</head>
<style  type="text/css">
body{font-family:"Arial Black";min-height: 768px;font-weight:normal;font-size:16px;color:#000;background-color:#999; 
}
.content{margin-top:20px;margin-left:auto;margin-right:auto;width:780px;border:#333 1px solid;border-radius:12px;-moz-border-radius:12px;padding:12px;	display:none;margin-bottom:10px;}
.fix{overflow:hidden;}
.alignlieft{ float:left}
.alignright{ float:right}
.main{width:960px;display:block;margin:0 auto; background:#FFF; border:1px solid;}
.header{}

.header_left{}
.header_right{}
.btn_class_link{ text-decoration:none; list-style:none}
.btn_class{height: 37px;margin-right: 9px;text-decoration: none;width: 85px; margin-top:28px}
.h1_{color:#3361BF; margin-left:16px;}
.footer{background-color:#3361BF; height:120px ;width:960px;}
.leftfooter{border: 1px solid #000000;border-radius: 10px 10px 10px 10px;margin-top: 19px;margin-left: 13px;}
.about_us{font-size: 29px; margin:23px; margin: 23px; color:#000}
.develop_{font-weight:bold}
.develop{ font-size: 20px;margin-left: 127px;margin-top: 25px; font-weight:bold}
.rightfooter{border: 1px solid #000000;
    border-radius: 10px;
    margin-right: 14px;
    margin-top: 14px;}
.follow_us{color: #000000;
    font-size: 29px;
    margin-top: 13px;
    margin-bottom: 0px;
    margin-left: 38px;}
.MC{border: 1px solid;
font-size: 17px;
height: 42px;
margin-bottom: 10px;}
.MC_{border: 1px solid;font-size: 17px;
    height: 42px;
    margin-bottom: -3px;
    margin-right: 22px;}
.h1_q{color:#3361BF;}
.watch{ margin-left:30px; position:relative;}
.h5_{}
.admin_image{ margin-left:393px;}
.social_bookmarks{margin-top: 10px;
    margin-left: 25px;
    margin-right: 25px;}
.MC_pdf{ text-decoration:none; list-style:none}
.sample_questions{text-decoration:none; list-style:none}
.tf_input_field{ border:1px solid #000}
</style>
<script>
function showDiv(el1,el2){
	document.getElementById(el1).style.display = 'block';
	document.getElementById(el2).style.display = 'none';
}
</script>

<script>
function resetQuiz(){
	var x = new XMLHttpRequest();
			var url = "addQuestions.php";
			var vars = 'reset=yes';
			x.open("POST", url, true);
			x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			x.onreadystatechange = function() {
		if(x.readyState == 4 && x.status == 200) {
			document.getElementById("resetBtn").innerHTML = x.responseText;
			
	}
}
x.send(vars);
document.getElementById("resetBtn").innerHTML = "processing...";
	
}
</script>


<body>
	<div class="main fix">
    	<div class="header fix">
        	<div class="header_left alignlieft">
            	<h1 class="h1_">Ahsanullah University Of Science & Technology</h1>
            </div>
            <?php
if(isset($_SESSION['admin_email_address']))
{
?>
	
            <div class="header_right alignright">
            	<a class="btn_class_link" href="logout.php"><input type="button" value="Logout" class="btn_class" /></a>
            </div>
            <?php } ?>
        </div>
        <div class="admin_image">
        	<img src="img/AUST.jpg" alt="" />
        </div>
        <div class="maincontent fix">
        		<div style="width:700px;margin-left:auto;margin-right:auto;text-align:center;" class="fix">
 				  <p style="color:#06F;"><?php
					if(isset($_SESSION['session_msg']))
					{
						echo $_SESSION['session_msg'];
						unset($_SESSION['session_msg']);
					}
					
				?><?php echo $msg=""; ?></p>
		
        <div >
        	<a href="pdf/generate-pdf.php" class="MC_pdf"><button class="MC_">Show Results</button></a><a href="sampleQuestions.php" class="sample_questions"><button class="MC_">Sample Questions</button></a>
        </div>
	<h2 class="h1_q">What type of question would you like to create?</h2>
    <button onClick="showDiv('tf', 'mc')" class="MC">True/False</button>&nbsp;&nbsp;<button onClick="showDiv('mc', 'tf')" class="MC">Multiple Choice</button>&nbsp;&nbsp;
    <span id="resetBtn"><button onClick="resetQuiz()" class="MC">Reset quiz to zero</button></span>
   </div>
  <div class="content" id="tf">
  	<h3>True or false</h3>
    	<form action="addQuestions.php" name="addQuestion" method="post">
    <strong>Please type your new question here</strong>
    	<br />
    		<textarea id="tfDesc" name="desc" style="width:400px;height:95px;"></textarea>
    	  <br />
    	<br />
    	<strong>Please select whether true or false is the correct answer</strong>
    	<br />
            <input type="text" id="answer1" name="answer1" class="tf_input_field" value="True" readonly>&nbsp;
              <label style="cursor:pointer; color:#06F;">
            <input type="radio" name="iscorrect" value="answer1">Correct Answer?</label>
    	  <br />
   		<br />
            <input type="text" id="answer2" name="answer2" class="tf_input_field" value="False" readonly>&nbsp;
              <label style="cursor:pointer; color:#06F;">
              <input type="radio" name="iscorrect" value="answer2">Correct Answer?
            </label>
    	  <br />
    	<br />
    	<input type="hidden" value="tf" name="type">
    	<input type="submit" value="Add To Quiz" class="MC">
    </form>
 </div>
 <div class="content" id="mc">
  	<h3>Multiple Choice</h3>
    <form action="addQuestions.php" name="addMcQuestion" method="post">
    <strong>Please type your new question here</strong>
        <br />
        <textarea id="mcdesc" name="desc" style="width:400px;height:95px;"></textarea>
        <br />
      <br />
    <strong>Please create the first answer for the question</strong>
    	<br />
        <input type="text" id="mcanswer1" name="answer1" class="tf_input_field">&nbsp;
          <label style="cursor:pointer; color:#06F;">
          <input type="radio" name="iscorrect" value="answer1">Correct Answer?
        </label>
      <br />
    <br />
    <strong>Please create the second answer for the question</strong>
    <br />
        <input type="text" id="mcanswer2" name="answer2" class="tf_input_field">&nbsp;
          <label style="cursor:pointer; color:#06F;">
          <input type="radio" name="iscorrect" value="answer2">Correct Answer?
        </label>
      <br />
    <br />
    <strong>Please create the third answer for the question</strong>
    <br />
        <input type="text" id="mcanswer3" name="answer3" class="tf_input_field">&nbsp;
          <label style="cursor:pointer; color:#06F;">
          <input type="radio" name="iscorrect" value="answer3">Correct Answer?
        </label>
      <br />
    <br />
    <strong>Please create the fourth answer for the question</strong>
    <br />
        <input type="text" id="mcanswer4" name="answer4" class="tf_input_field">&nbsp;
          <label style="cursor:pointer; color:#06F;">
          <input type="radio" name="iscorrect" value="answer4">Correct Answer?
        </label>
      <br />
    <br />
    <input type="hidden" value="mc" name="type">
    <input type="submit" value="Add To Quiz" class="MC">
    </form>
 </div>
        </div>
        <div class="footer fix">
        	<div class="leftfooter fix alignlieft">
            	<h4 class="about_us">About Us</h4>
            </div>
            <div class="develop fix alignlieft">
            	<h5 class="h5_">Devoloped By &copy;Galacticos</h5>
            </div>
            <div class="rightfooter fix alignright">
            	<h4 class="follow_us">Follow Us</h4>
                 <div class="social_bookmarks fix">
            		<a href="#"><img src="img/facebook.png" alt=""  title="Facebook" /></a>
                	<a href="#>"><img src="img/feed.png" alt=""  title="Feed Orange"  /></a>
                	<a href="#"><img src="img/twitter.png" alt="" title="Twitter"   /></a>
                	<a href="#"><img src="img/flicker.png" alt="" title="Flicker"   /></a>
                	<a href="#"><img src="img/in.png" alt=""  title="Linkedin"  /></a>
                </div>
            </div>
            
        </div>
    
    </div>
</body>
</html>
