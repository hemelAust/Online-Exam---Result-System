<?php session_start();?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Admin Login Form</title>
  <link rel="stylesheet" href="../admin_css/style.css">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Admin Login</h1>
      <form method="post" action="check_admin_login.php">
      	<div class="echo">
      	<?php
					if(isset($_SESSION['session_msg']))
					{
						echo $_SESSION['session_msg'];
						unset($_SESSION['session_msg']);
					}
					
				?>
            </div>
        <p><input type="text" name="admin_email_address" value="" placeholder="Admin Email Address" title="Admin Email Address" required="1"></p>
        <p><input type="password" name="password" value="" placeholder="Password" required="1" title="Admin Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password?</p>
    </div>
  </section>

 
</body>
</html>
