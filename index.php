<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="css/style.css" rel="stylesheet" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
 <link href="css/menu.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/bjqs.css">
  
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- some pretty fonts for this demo page - not required for the slider -->
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="css/demo.css">

    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
	<script src="js/login.js" type="text/javascript"></script>
    <script src="src/jquery.scrollUp.js"></script>
   <script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>
   <script>
		$(function(){
	  $.scrollUp();
	});
   </script>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php 
include 'title.php'; 
echo $pageTitle; ?></title>

</head>

<body >

	<div class="main fix" >
		<div class="header fix">
			<?php include('header.php');?>
		</div>
		<div class="slider fix" id="slider">	
			<?php include('slider.php');?>
		</div>
       
		<div class="menu fix alignleft">
			<?php include('menu.php');?>
		</div>
		<div class="maincontent fix" id="maincontent">	
			<?php include('maincontent.php');?>
		 </div>	
		<div class="footer fix">
			<?php include('footer.php'); ?>
		</div>           
    </div>
    
    
    
    
    
</body>
</html>
