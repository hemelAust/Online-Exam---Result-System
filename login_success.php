<?php session_start(); ?>
<?php

session_start();
if(!session_is_registered(student_id)){
header("location:login.php");
exit();
}

?>
<?php 

$msg = "";
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	$msg = strip_tags($msg);
	$msg = addslashes($msg);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/style.css" rel="stylesheet" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
 <link href="css/menu.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/bjqs.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<title><?php echo  $_SESSION['student_id'] ?></title>
<script>
function startQuiz(url){
	window.location = url;
}
</script>
<script type="text/javascript">
	window.history.forward(1);
	function noBack()
  { 
  window.history.forward(); 
  }
</script>

 
 

</head>

<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="" >


     
   	<div class="main fix">
		<div class="header fix">
			<?php include('header.php');?>
		</div>
	
		<div class="menu fix alignleft">
			
		</div>
        
		<div class="maincontent fix" id="maincontent">	
        	
			<h1 class="login_class"></h1>
  					
                <?php 
				$student_id=$_SESSION['student_id'];
				
				$conn=mysql_connect("localhost","root","");
			if(!$conn)
			{
				die('Could not connect:'.mysql_error());
			}
			mysql_select_db("online_exam",$conn);
			
			
			
			if(mysql_num_rows(mysql_query("SELECT * FROM  quiz_takers where student_id = '$student_id'")))
			{
				$_SESSION['h']= "You have already given exam!!!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Press Logout!!!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank You!!! ";
				$_SESSION['he'] = "<center><img src=".'img/1.jpg'."></center>";
				//header("location:login_success.php");
			}
			//include 'start.php';
			else {
			
				?>
               
<h3 class="click">Click below when you are ready to start the quiz</h3>
<button onClick="startQuiz('quiz.php?question=1')" class="onlcick_">Click Here To Begin</button>
		 </div>	
         <div class="image_class_for_exam_start">
         	<img src="img/1.png" alt="" />
         </div>
         <?php } 
		 
		
		 ?>
         
 
         
         <h4 class="protect alignleft">
				<?php 
					
					echo $_SESSION['h'];
					unset($_SESSION['h']); 
						
				?>
              
                </h4>
                <div class="protect_ alignleft">
				<?php 
				
						echo $_SESSION['he'];
						unset($_SESSION['he']); 
					?>
               </div>
                
		<div class="footer fix">
				<?php include('footer.php'); ?>
		</div>           
    </div>             
</body>
</html>








































