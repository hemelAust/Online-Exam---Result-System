<?php
session_start();

$msg="";
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="online_exam"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$student_id=$_POST['student_id']; 
$password=md5($_POST['password']); 

// To protect MySQL injection (more detail about MySQL injection)
$student_id = stripslashes($student_id);
$password = stripslashes($password);
$student_id = mysql_real_escape_string($student_id);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM student WHERE student_id='$student_id' and password='$password'";
//$sql1="SELECT * FROM student WHERE student_id='$student_id' and password='$password' and status='1'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1)
{
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	/*session_register("student_id");
	session_register("password"); */
	
	$_SESSION['student_id']=$student_id;	
	header("location:login_success.php");
}

else
{	
	$_SESSION['session_msg']  = "<img src=".'img/Button-Delete-icon.png'.">&nbsp;&nbsp;Invalid Student Id or Password";
	header("location:login.php");
}

?>