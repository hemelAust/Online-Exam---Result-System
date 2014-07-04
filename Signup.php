<?php session_start(); ?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/style.css" rel="stylesheet" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bjqs.css">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script type="text/javascript" src="js/captcha.js"></script>
 
  
 <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> 
<title>Sign Up</title>



</head>


<body>
<script language="javascript">
	function button_actions()
	{
		if(!document.my_form.fname.value)
		{
			alert("Put your first name properly!");
			document.my_form.fname.focus();
			return false;
		}
		if(!document.my_form.lname.value)
		{
			alert("Put your last name properly!");
			document.my_form.lname.focus();
			return false;
		}
		if(!document.my_form.email_address.value)
		{
			alert("Put your Email Address properly!");
			document.my_form.email_address.focus();
			return false;
		}
		if(!document.my_form.student_id.value)
		{
			alert("Put your Student Id properly!");
			document.my_form.student_id.focus();
			return false;
		}
		if(!document.my_form.password.value)
		{
			alert("Put your password properly!");
			document.my_form.password.focus();
			return false;
		}
		if(!document.my_form.password2.value)
		{
			alert("Password do not matche");
			document.my_form.password2.focus();
			return false;
		}
	}

</script>
<div class="status">
	
	</div>
	<?php
		// Include the random string file for captcha
		require 'includes/rand.php';
		$randomObj = new RandomGen();
		$str = $randomObj->createRandom();

		// Set the session contents
		$_SESSION['captcha_id'] = $str;
	?>
<?php 
$msg="";
if(isset($_POST['fname']) && $_POST['lname']){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email_address=$_POST['email_address'];
$student_id=$_POST['student_id'];
$phone_no=$_POST['phone_no'];
$password1=$_POST['password'];
$password2=$_POST['password2'];


	if($password1 == $password2)
	{
		if(strlen($password1) >= 4)
		{
			$conn=mysql_connect("localhost","root","");
			if(!$conn)
			{
				die('Could not connect:'.mysql_error());
			}
			mysql_select_db("online_exam",$conn);
			
			$pass1=md5($password1);
			$pass2=md5($password2);
			
			
			if(mysql_num_rows(mysql_query("SELECT * FROM  student where student_id = '$student_id'")))
			{
				//$_SESSION['g']="";
				$_SESSION['msg']= "<img src=".'img/Button-Delete-icon.png'.">&nbsp;&nbsp;This student Id already registered!";
			}
			else{
			
			mysql_query("INSERT INTO  student (s_id,fname,lname,student_id,phone_no,email_address,password,confirm_password) VALUES('','$fname','$lname','$student_id','$phone_no','$email_address','$pass1','$pass2') ");
			
			$_SESSION['msg']="<img src=".'img/success-icon.png'.">&nbsp;&nbsp;<p style=".'color:red'.">You Have been registered.....!</p>";
			
			}
		}
		else
		{
			$_SESSION['msg']="<img src=".'img/Button-Delete-icon.png'.">&nbsp;&nbsp;Password is too short...Reg Again!";
		}
	}
	else
	{
		$_SESSION['msg'] ="<img src=".'img/Button-Delete-icon.png'.">&nbsp;&nbsp;Password do not match...Try Again!";	
	}
}





?>
      


                
                
   	<div class="main fix" >
		<div class="header fix">
			<?php include('header.php');?>
		</div>
	
		<div class="menu fix alignleft">
			
		</div>
		<div class="maincontent fix" id="maincontent">	
			<h1 class="signup_class">Signup</h1>
            <div class="echo_">
            	<h4>
				<?php 
				if($_SESSION['g'])
					{
						echo $_SESSION['g'];
						unset($_SESSION['g']);
					}
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);								
  
				?>
                </h4>
            </div>
            	<div class="fix signup_settings">
				<form method="post" name="my_form">
                	<table border="0" align="center"  class="table">
                    	<tr>
                        	<td class="fname">First Name</td>
                            <td>
                            	<input type="text" name="fname"  placeholder="First Name" maxlength="50"  tabindex="1"  class="filed_one" required="1" /><span class="required">*</span><td id="progressbar1" class="progress">
                        </tr>
                        <tr>
                        	<td class="fname">Last Name</td>
                            <td>
                            	<input type="text" name="lname" placeholder="Last Name" maxlength="50"  tabindex="2" class="filed_one"  required="1" /><span class="required">*</span>
                            </td>
                        </tr>
                        <tr>
                        	<td class="fname">Email Address</td>
                            <td>
                            	<input type="email" name="email_address" placeholder="Email Address"   tabindex="3"  class="filed_three" required="1" /><span class="required">*</span>
                            </td>
                        </tr>
                        
                         <tr>
                        	<td class="fname">Student Id</td>
                            <td>
                            	<input type="text" name="student_id" placeholder="11.01.04.***"   tabindex="4" class="filed_four" required="1"  /><span class="required">*</span>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td class="fname">Phone No</td>
                            <td>
                            	<input type="text" name="phone_no" placeholder="8801*********"   tabindex="4" class="filed_five" required="1"  /><span class="required">*</span>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td class="fname">Password</td>
                            <td>
                            	<input type="password" name="password" placeholder="********"   tabindex="5" class="filed" required="1"  /><span class="required">*</span>
                            	<td class="warning">(minimum 5 digit/character)</td>
                            </td>
                           
                        </tr>
                        
                         
                        <tr >
                        	
                        </tr>
                        
                        <tr>
                        	<td class="fname">Confirm Password</td>
                            <td class="fname">
                            	<input type="password" name="password2" placeholder="********"   tabindex="6" equals="password" class="filed"  /><span class="required">*</span>
                            </td>
                        </tr>
                        <tr>
    			<td><div id="captchaimage"><a href="" id="refreshimg"  title="Another image"><img src="captcha/image.php?<?php echo time(); ?>" alt="Captcha image" width="132" height="46" align="left" /></a></div></td>
    			<td>
                	<p><input type="text" maxlength="6" required="1" name="captcha" id="captcha" placeholder="Capthca Image" class="filed_" autocomplete=off  /><span class="required">*</span>
                </td>
  		</tr>
        
                        
                        <tr>
                        	<td>&nbsp;</td>
                            <td>
                            	<input type="submit" name="btn" value="Save"  class="back"  onclick="button_actions()"/>
        						<input type="reset" name="reset" class="back" />
                               <a href="index.php" class="home_btn_back"> <input type="button" name="btn"  class="back" value="Back" /></a>
                                </td>
                        </tr>
                        
                    </table>
                </form>
                </div>
		 </div>	
		<div class="footer fix">
				<?php include('footer.php'); ?>
		</div>           
    </div>             
</body>
</html>