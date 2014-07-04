<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

<title>Sample Questions</title>
</head>

<style  type="text/css">
body{font-family:"Arial Black";min-height: 768px;font-weight:normal;font-size:16px;color:#000; background-color:#999;
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
    width: auto;
    padding-top: 28px;
    padding-left: 5px;
   margin-right: 15px; height:auto; padding-right:10px; padding-bottom:28px}
.content_of_border{}
.all_buttons{}
.insert_button{}
.input_sample_questions{}
.insert_table{}
.maincontent{ margin-left:27px;
    margin-top: 25px;
    margin-bottom: 25px;}
.MC_sms{border: 1px solid;
font-size: 17px;
height: 42px;
margin-bottom: 10px; width:200px;}	
.msg{ margin-left: 252px;}
.h{ width:620px}
.CSSTableGenerator {
	margin:0px;padding:0px;
	width: 666px;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	margin-left:10px;
	margin-right:10px;
	margin-top:40px;
	margin-bottom:15px;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#aad4ff; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:10px;
	font-family:Arial;
	font-weight:normal;
	color:#000000; font-size:16px;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.watch{ margin-left:30px; position:fixed;}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);

	background-color:#005fbf;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);

	background-color:#005fbf;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
.pagi_link{list-style: none;text-decoration: none;color: blue;font-size: 19px; font-family:"Comic Sans MS", cursive; margin-left:10px }	
.r{color: #FF0000; margin-left:273px; margin-bottom:25px;font-size: 18px; float:left }	


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
        
        
        <h4 class="msg">
        <?php
					
						echo $_SESSION['truncate'];
						unset($_SESSION['truncate']);
						
						if(isset($_SESSION['confirm']))
						{
							echo $_SESSION['confirm'];
							unset($_SESSION['confirm']);
						}
						
						if(isset($_SESSION['session_msg']))
						{
							echo $_SESSION['session_msg'];
							unset($_SESSION['session_msg']);
						}
					
				?></h4>
                 
        <div class="maincontent fix">
       		<div class="border_ alignlieft fix">


            	<div class="content_of_border fix" id="maincontent">
               
             			<?php
	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db("online_exam",$conn) or die("Error");
	
	
 	$per_page=4;
	$pages_query=mysql_query("SELECT COUNT(`sample_questions_id`) FROM(`samplequestions`)");
	$pages=ceil(mysql_result($pages_query,0));
	$result=$pages/$per_page+1;
	
	
		if(!isset($_GET['page']))
	{
		header("location :showSampleQuestions.php?page=1");
	}
	else
	{
		$page=$_GET['page'];
	}
	
 	$start=(($page-1)*($per_page));
	$sql = "SELECT * FROM samplequestions LIMIT $start,$per_page";
	$res=mysql_query($sql);
					
	echo "<table border=".'1px solid'." class=".'CSSTableGenerator'.">";

 			echo "
			<tr>
			<td> Question No</td>
			<td><center>Question</center></td>
			<td> Edit</td>
			<td> Delete</td>
			<td>Answer </td>
			
			</tr>";
			
	while($row = mysql_fetch_array($res))
		
		echo "
			<tr>
			<td><center> $row[1]</center></td>
			<td> $row[2]</td>
			<td><a href='edit.php?edit=$row[2]'>Edit</a></td>
			<td><a href='delete.php'>Delete</a></td>		
			<td>$row[3]</td>
			</tr>";
 
	echo "</table>";
	
	echo "$row<br>";
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";	
	for($number=1;$number<=$result;$number++)
	{
		
		echo '<a href="?page='.$number.'" class="pagi_link">'.$number.'</a>';	
	
	}

   echo "<br><p class=".'r'.">Current Page: $page</p>";
	
	
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