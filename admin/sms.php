<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<title>Send SMS</title>
</head>
<style  type="text/css">
body{font-family:"Arial Black";min-height: 768px;font-weight:normal;font-size:16px;color:#000;background-color:#999;
}
.MC:hover{border: 1px solid #447314;text-shadow: #31540c 0 1px 0;}
.MC_sms:hover{border: 1px solid #447314;text-shadow: #31540c 0 1px 0;}	
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
.border_{  border: 1px solid #000000;
    border-radius: 10px;
    height: 288px;
    margin-right: 45px;
    padding-bottom: 20px;
    padding-left: 14px;
    padding-top: 28px;
    width: 600px;}
.content_of_border{}
.all_buttons{}
.insert_button{}
.input_sample_questions{}
.insert_table{}
.maincontent{ margin-left: 52px;margin-top: 25px;margin-bottom: 25px;font-family:"Arial Black";}
.MC_sms{border: 1px solid;
font-size: 17px;
height: 42px;
margin-bottom: 10px; width:200px;}	
.watch{ margin-left:30px; position:fixed;}
.new_button_class{ width: 125px;
    height: 30px;
    border: 1px solid;
    color: black;
    font-size: 15px; margin-top:10px; background:url(../img/mails-icon.png) 3px 5px no-repeat, linear-gradient(to bottom, #f7f7f8 0%,#ffffff 100%)}
.new_input_filed{width: 170px;height: 28px;font-size: 18px;border: 1px solid;padding-left: 10px;font-weight:bold; margin-bottom:7px}
.new_input_filed_one{width: 400px;height: 28px;font-size: 18px;border: 1px solid;padding-left: 10px;font-weight:bold; margin-bottom:7px;}
.new_button_class:hover{border: 1px solid #447314;text-shadow: #31540c 0 1px 0;}	
.new_input_filed_{ font-size: 18px; border: 1px solid #000;  margin-bottom:6px;  padding-left:10px; font-family:"Arial Black";}	
.sms{}	


input:-moz-placeholder {
  color: #8D8D8D;
}
input::-webkit-input-placeholder {
  color: #8D8D8D;
}
input:-ms-input-placeholder {
  color: #8D8D8D;
}

input:focus:-moz-placeholder {
  -moz-animation-duration: 0.4s;
  -moz-animation-name: slidein;
  -moz-animation-timing-function: ease-out;
  -moz-animation-fill-mode: forwards;
  -moz-animation-delay: 0.1s;
}
input:focus::-webkit-input-placeholder {
  -webkit-animation-duration: 0.4s;
  -webkit-animation-name: slidein;
  -webkit-animation-timing-function: ease-out;
  -webkit-animation-fill-mode: forwards;
  -webkit-animation-delay: 0.1s;
}
input:focus:-ms-input-placeholder {
  opacity: 0;
}

@-webkit-keyframes slidein {
  from {
    opacity: 1;
    padding-left: 0px;
  }

  to {
    opacity: 0;
    padding-left: 10px;
  }
}
@-moz-keyframes slidein {
  from {
    opacity: 1;
    padding-left: 0px;
    padding-right: 10px;
  }

  to {
    opacity: 0;
    padding-left: 10px;
    padding-right: 0px;
  }
  
}
textarea:-moz-placeholder {
  color: #8D8D8D;
}
textarea:-webkit-input-placeholder {
  color: #8D8D8D;
}
textarea:-ms-input-placeholder {
  color: #8D8D8D;
}
textarea:focus:-moz-placeholder {
  -moz-animation-duration: 0.4s;
  -moz-animation-name: slidein;
  -moz-animation-timing-function: ease-out;
  -moz-animation-fill-mode: forwards;
  -moz-animation-delay: 0.1s;
}
textarea:focus::-webkit-input-placeholder {
  -webkit-animation-duration: 0.4s;
  -webkit-animation-name: slidein;
  -webkit-animation-timing-function: ease-out;
  -webkit-animation-fill-mode: forwards;
  -webkit-animation-delay: 0.1s;
}
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
               			
                       <div class="input_sample_questions">
							<form action="config.php"  method="post">
								<table class="insert_table" border="0">
                                
                                 <tr>
									<td>Destination No: </td>
										<?php
                                        $conn = mysql_connect("localhost","root","");
                                            $db = mysql_select_db("online_exam",$conn);
                                            $sql = "select phone_no	 from student";
                                            $qury = mysql_query($sql);
                                            while($row = mysql_fetch_array($qury)){
                                                $names .= $row['phone_no'].",";
                                            }
                                            
                                            
                                        ?>
                                <td>
                                    <input type="text" name="destination_number" placeholder="Mobile No." title="Enter Mobile Number" class="new_input_filed_one" required="1"  value="<?php echo $names; ?>"><br>
                                        
                                </td>     
							</tr>
 
                                    <tr>
                                        <td>Sender Name: </td>
                                        <td>
                                            <input type="text" name="sender_name" required="1" placeholder="Sender Name" title="Type Sender Name" class="new_input_filed"><br>
                                        </td>
                                    </tr>
                                    
                                     <tr>
                                        <td>Message: </td>
                                        <td>
                                            <textarea  title="Type Your Message" rows="5" cols="40"  Placeholder="Message" required="1" class="new_input_filed_" name="message"></textarea>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" name="btn" value="Send Sms" class="new_button_class" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;"><br>
                                        </td>
                                    </tr>

								</table>    
							</form>
						</div>
           			
                </div>
               
                
            </div>
            <div class="all_buttons alignlieft">
            	<div class="insert_button">
                	<!--<input type="button" name="insert_button" value="Sample Questions" />-->
                   <a href="sampleQuestions.php" >  <button class="MC" title="Enter Sample questions" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;">Sample Questions</button></a>
                </div>
                <div class="insert_button">
                	<!--<input type="button" name="sms" value="SMS" />-->
                     <button class="MC_sms" title="Send SMS" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;">SMS</button>
                </div>
                <div class="insert_button">
                	<!--<input type="button" name="show_sample_questions" value="Show Sample Questions" />-->
                    <a href="showSampleQuestions.php?page=1">   <button class="MC" title="Edit/Delete Sample Questions" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;">Edit/Delete</button></a>
                </div>
                <div class="insert_button">
                	<!--<input type="button" name="delete_table" value="Empty Result Table" />-->
                    <a href="truncate.php"> <button class="MC" title="Empty Result Table" onclick="displayData(11,1,0,'A')" onmouseover="" style="cursor: pointer;">Empty Result Table</button></a>
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