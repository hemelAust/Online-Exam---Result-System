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
<title>Sample Questions</title>
</head>


<body>



         
   	<div class="main fix" >
		<div class="header fix">
			<?php include('header.php');?>
		</div>
	
		<div class="menu fix alignleft">
			
		</div>
		<div class="maincontent fix" id="maincontent">	
			
			<?php
	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db("online_exam",$conn) or die("Error");
	
	
 	$per_page=4;
	$pages_query=mysql_query("SELECT COUNT(`sample_questions_id`) FROM(`samplequestions`)");
	$pages=ceil(mysql_result($pages_query,0));
	$result=$pages/$per_page+1;
	
	
		if(!isset($_GET['page']))
	{
		header("location :sampleQuestions.php?page=1");
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
			
			<td>Answer </td>
			
			</tr>";
			
	while($row = mysql_fetch_array($res))
		
		echo "
			<tr>
			<td><center> $row[1]</center></td>
			<td> $row[2]</td>		
			<td>$row[3]</td>
			</tr>";
 
	echo "</table>";
	
	echo "$row<br>";
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";	
	for($number=1;$number<=$result;$number++)
	{
		
		echo '<a href="?page='.$number.'" class="pagi_link">'.$number.'</a>';	
	
	}

   echo "<br><p class=".'r'.">Current Page: $page</p>";
	
	
?>
                             
		 </div>	
        
		<div class="footer fix">
				<?php include('footer.php'); ?>
		</div>           
    </div>             
</body>
</html>