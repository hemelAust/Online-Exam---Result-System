<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/style.css" rel="stylesheet" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
 <link href="css/menu.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/bjqs.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<title>Log in</title>
</head>

<body>



         
   	<div class="main fix" >
		<div class="header fix">
			<?php include('header.php');?>
		</div>
	
		<div class="menu fix alignleft">
			
		</div>
		<div class="maincontent fix" id="maincontent">	
			<h1 class="login_class">Login</h1>
             <div class="echo">
            	<h4>
				<?php
					if(isset($_SESSION['session_msg']))
					{
						echo $_SESSION['session_msg'];
						unset($_SESSION['session_msg']);
					}
					
				?>
                </h4>
            </div>
				<form action="check_login.php" method="post" class="login_form_style" >
                	<table border="0" align="center" class="login_table">
                    	<tr>
                        	<td class="s_id_class">Student Id</td>
                            <td>
                            	<input type="text" name="student_id" class="s_id_class_field" placeholder="11.01.04.***" required="1" title="Student ID"  />
                            </td>
                        </tr>
                        <tr>
                        	<td class="s_id_class">Password</td>
                            <td>
                            	<input type="password" name="password" class="s_id_class_field_" placeholder="*******" required="1"  title="Password"/>
                                <a href="#" class="forget_password_link"><p class="forget_password">Forget password!</p></a>
                            </td>
                           
                        </tr>
                    </table>
                    <tr>
                        	<td>&nbsp;</td>
                            <td>
                            	<input type="submit" name="Submit" value="Login" class="back_" title="Login" />
                            </td>
                        </tr>
                </form>
                 
             
		 </div>	
		<div class="footer fix">
				<?php include('footer.php'); ?>
		</div>           
    </div>             
</body>
</html>