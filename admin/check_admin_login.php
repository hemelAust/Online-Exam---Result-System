<?php
session_start();

$msg="";
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="online_exam"; // Database name 
$tbl_name="admin"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$admin_email_address=$_POST['admin_email_address']; 
$password=md5($_POST['password']); 

// To protect MySQL injection (more detail about MySQL injection)
$admin_email_address = stripslashes($admin_email_address);
$password = stripslashes($password);
$admin_email_address = mysql_real_escape_string($admin_email_address);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM admin WHERE admin_email_address='$admin_email_address' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	/*session_register("student_id");
	session_register("password"); */
	
	$_SESSION['admin_email_address']=$admin_email_address;	
	header("location:addQuestions.php");
}
else
{	
	$_SESSION['session_msg']  = "Invalid Admin Email or Password";
	header("location:index.php");
}

?>