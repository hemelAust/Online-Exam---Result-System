<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<title> Delete Sample Questions</title>
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
margin-bottom: 10px; width:200px;}
.MC_{border: 1px solid;font-size: 17px;
    height: 42px;
    margin-bottom: -3px;
    margin-right: 22px;}
.h1_q{color:#3361BF;}
.h5_{}
.admin_image{ margin-left:393px;}
.social_bookmarks{margin-top: 10px;
    margin-left: 25px;
    margin-right: 25px;}
.MC_pdf{ text-decoration:none; list-style:none}
.sample_questions{text-decoration:none; list-style:none}
.border_{border: 1px solid #000000;
    border-radius: 10px;
    height: 127px;
    margin-right: 45px;
    padding-left: 20px;
    padding-top: 28px;
    width: 445px;
    margin-top: 48px;}
.content_of_border{}
.all_buttons{}
.insert_button{}
.input_sample_questions{}
.insert_table{}
.maincontent{ margin-left: 52px;margin-top: 25px;margin-bottom: 25px;font-family:"Arial Black"; font-weight:normal}
.MC_sms{border: 1px solid;
font-size: 17px;
height: 42px;
margin-bottom: 10px; width:200px;}	
.msg{ margin-left: 252px;}	
.drop_down{ width: 90px;height: 26px;font-size: 15px;margin-bottom: 15px;}
.type{   width: 353px;
    height: 32px;
    font-size: 18px; font-family:"Arial Black"; margin-bottom:5px; padding-left:8px}
.type_{  font-family: "Arial Black";padding-left:8px;
font-size: 18px;
height: 137px;
width: 465px;
margin-bottom: 10px;}	
.new_button_class_one{ width: 100px; text-decoration:none; 
    height: 30px;
    border: 1px solid; margin-right:15px;
    color: black;
    font-size: 15px; margin-top:12px; background: url(../img/DeleteRed.png) 3px 5px no-repeat, linear-gradient(to bottom, #f7f7f8 0%,#ffffff 100%)}
.new_button_class_one:hover{border: 1px solid #447314;text-shadow: #31540c 0 1px 0;}
.new_button_class_three{ width: 100px; text-decoration:none; 
    height: 30px;
    border: 1px solid; margin-right:15px;
    color: black;
    font-size: 15px; margin-top:12px; background: url(../img/back-icon.png) 3px 5px no-repeat, linear-gradient(to bottom, #f7f7f8 0%,#ffffff 100%)}
.new_button_class_three:hover{border: 1px solid #447314;text-shadow: #31540c 0 1px 0;}
.MC_sms:hover{border: 1px solid #447314;text-shadow: #31540c 0 1px 0;}
.MC:hover{border: 1px solid #447314;text-shadow: #31540c 0 1px 0;}
.r{ text-decoration:none;}
.watch{ margin-left:30px; position:fixed;}
</style>


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
       		<div class="border_ alignlieft fix">


            	<div class="content_of_border fix">
             			<?php
							$server="localhost";
							$username="root";
							$password="";
							$connect_mysql=mysql_connect($server,$username,$password) or die ("Connection Failed!");
							$mysql_db=mysql_select_db("online_exam",$connect_mysql) or die ("Could not Connect to Database");
							$query = "SELECT * FROM  samplequestions";
							$result=mysql_query($query) or die("Query Failed : ".mysql_error());
							$i=0;
							while($rows=mysql_fetch_array($result))
							{
							$qsn[$i]=$rows['question_no'];
							$i++;
							}
							$total_elmt=count($qsn);
						?>
                        <form method="POST" action="">
                            Select Question No. to Delete: <select name="sel" class="drop_down" title="Select Question No. First" >
                            <option>Select</option>
								<?php 
                                for($j=0;$j<$total_elmt;$j++)
                                {
                                ?><option><?php 
                                echo $qsn[$j];
                                ?></option><?php
                                }
                                ?>
						</select><br />
                        <table class="insert_table" border="0">
   
                                    <td>
                         <input type="submit" name="submit" value="Delete"  class="new_button_class_one" onclick="confirm('Successfully Deleted!') ;displayData(11,1,0,'A') " onmouseover="" style="cursor: pointer;"/>
                       
                        <a href="showSampleQuestions.php?page=1" class="r"> <input type="button"  value="Back" class="new_button_class_three" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;" /></a>
                                    </td>
                                </tr>
 
							</table> 
					</form>
           			 <?php

					if(isset($_POST['submit']))
					{
					$value=$_POST['sel'];		
					$query2 = "DELETE FROM  samplequestions WHERE question_no='$value'";
					$result2=mysql_query($query2) or die("Query Failed : ".mysql_error());							
					
					}
					
					?>            
                </div>
               
                
            </div>
            <div class="all_buttons alignlieft">
            	<div class="insert_button">
                	<!--<input type="button" name="insert_button" value="Sample Questions" />-->
                    <a href="sampleQuestions.php">   <button class="MC" title="Enter Sample questions" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;">Sample Questions</button></a>
                </div>
                <div class="insert_button">
                	<!--<input type="button" name="sms" value="SMS" />-->
                    <a href="sms.php"> <button  class="MC_sms" title="Send SMS" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;">SMS</button></a>
                </div>
                <div class="insert_button">
                	<!--<input type="button" name="show_sample_questions" value="Show Sample Questions" />-->
                   <a href="showSampleQuestions.php?page=1">    <button class="MC" title="Edit/Delete Sample Questions" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;">Edit/Delete</button></a>
                </div>
                <div class="insert_button">
                	<!--<input type="button" name="delete_table" value="Empty Result Table" />-->
                    <a href="truncate.php"><button class="MC" title="Empty Result Table" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;">Empty Result Table</button></a>
                </div>
                 <div class="insert_button">
                	<!--<input type="button" name="delete_table" value="Empty Result Table" />-->
                    <a href="addQuestions.php"><button class="MC" title="Back To Admin Main Page" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;">Back</button></a>
                </div>
              
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



















