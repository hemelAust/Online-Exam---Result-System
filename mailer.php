<?php
/* (c) copyright 2004, HIOX INDIA 		        */
/* This  is  a free tool provided by hioxidia.com */
/* visit us at http://www.hscripts.com            */
?>

<html>
<head>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<title>Send Mail Successfully</title>
</head>
<?php
include 'color.php';

//$sname = "http://".$_SERVER['SERVER_NAME'];
?>

<body topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 bgcolor=<? echo($BODYCOLOR); ?>
 style="font-family: arial,verdana,san-serif;margin:0px;">

<table border=0  width=80% height=100% align=center  border=0 cellspacing=0 cellpadding=0 bgcolor=<? echo($BOXCOLOR); ?>>
<tr width=100% background="./images/bg.jpg">
<td width=100%  align="center" background="./images/bg.jpg">
<div style="border: 2px groove #888888; border-left: 0px; border-right: 0px;"><br>
<font style="font-size: 18px; color: <? echo($HEADCOLOR); ?>; font-weight: bold;">
<a href="<? echo($sname);?>" style="color: <? echo($HEADCOLOR); ?>; text-decoration:none;"><? echo($sitename); ?></a> Feedback Page</font>
<br><br></div>
</td></tr>

<tr width=100% height=90%>
<td width=100%  align="center" class="lines2" >
<br><br><br>
<div align="center">
<?php
/* recipients */
$to1  = $_POST['to'];

/* message */
$name1 = $_POST['name'];
$from1 = $_POST['from'];
$website1 = $_POST['website'];
$feedback1= $_POST['feedback'];

$feedback1= str_replace("\\\\","",$feedback1);
$feedback1= str_replace("\'","'",$feedback1);
$feedback1= str_replace("\\\"","\"",$feedback1);

$message1 = "NAME :".$name1."\r\n";
$message1 .= "MAIL :".$from1."\r\n";
$message1 .= "WEB :".$website1."\r\n";
$message1 .= "FEEDBACK :".$feedback1."\r\n";

$subject1 = "FEEDBACK from $name1";

/* To send HTML mail, you can set the Content-type header. */
$headers1  = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";

/* additional headers */
$headers1 .= "To: ".$to1."\r\n";
$headers1 .= "From: ".$from1."\r\n";
$headers1 .= "Reply-To: ".$from1."\r\n";
$headers1 .= "Cc: \r\n";


//---Filter ---

$concat="$name1"."$from1"."$website1"."$feedback1";
//echo "$concat===";
include 'admin/fil.php';

$tosend = true;
for($xx=0; $xx<count($asi); $xx++)
  {
      $find=strpos($concat,$asi[$xx]);
      if($find != false)
       {
        $tosend = false;
        break;
       }
  }

$ref = $_SERVER['HTTP_REFERER'];
$ser = $_SERVER['HTTP_HOST'];

$host = parse_url($ref);

/* and now mail it */

if($ser == $host['host'] && $tosend==true)
	{
	if(@mail($to1, $subject1, $message1, $headers1))
	{
	echo("<table aligh=left><tr><td><font color=$FONTCOLOR>");
	echo("Dear $name1,<br>");
	echo("<br>");
	echo("<b> We welcome </b> your feedback<br>");
	echo("<br>");
	echo("Your feedback mail has been sent successfuly.<br>");
	//echo("Our team will get back to you.");
	echo("<br>");
	echo("<br>");
	echo("Regards,<br>");
	echo("Nazmus Sakib Rupol.<br> 
				Abdullah-Al-Zubaer Imran.<br>");
	echo("<br>");
	echo "Thank You.";
	echo("</font></td></tr></table>");
	}
	else
	{
	echo("Sorry unable to sent the mail.<br>");
	}
       }

else
{
echo "<font color=red>Access Denied<br>You may added some spam words</font>";
}

?>
</div>
</td>
</tr>

<tr><td background="./images/bg.jpg">
<br>
<div align=right>
<a href="#" STYLE="font-size: 12px; color: <?php echo($FONTCOLOR); ?>; text-decoration: none;">
Devoloped by &copy; Galacticos</a> &nbsp;&nbsp;&nbsp;&nbsp;</div>
<br>
</td></tr>
</table>

</body>
</html>
