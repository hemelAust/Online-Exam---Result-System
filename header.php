<?php session_start(); ?>         
            <div class="left_header fix alignleft">
            	<a href="index.php" class="button_class"><input type="button" name="button" value="Home" class="button_class"></a>
            </div>
            <div class="mid_header fix alignleft">
            	<div class="title_class"><b>Ahsanullah University Of Science & Technology</b></div>
            </div>
            <div class="right_header_one fix alignright">
            	
            </div>
            <div class="right_header_two fix alignright">
<?php
if(isset($_SESSION['student_id']))
{
?>
				<a href="logout.php" class="button_class">
					<input type="button" name="button" value="Logout"  class="button_class" />
				</a>
<?php
}
else
{
?>            
            	<a href="login.php" class="button_class">
					<input type="button" name="button" value="Login"  class="button_class" />
				</a>
              <a href="Signup.php" class="button_class"><input type="button" name="button" value="Sign Up"  class="button_class" /></a>
<?php
	unset($_SESSION['student_id']);
}
?>
            </div>
        
		
		
	
			
	