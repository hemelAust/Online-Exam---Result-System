<?php
/* (c) copyright 2004, HIOX INDIA 		        */
/* This  is  a free tool provided by hioxidia.com */
/* visit us at http://www.hscripts.com            */
?>

<html>
<head>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<title>FeedBack</title>
</head>
<style type="text/css">
.hm{ text-decoration:none;}

</style>
<?php
include 'color.php';

$sname = "http://".$_SERVER['SERVER_NAME'];
?>

<body topmargin=0 leftmargin=0 marginwidth=0 marginheight=0 bgcolor=<? echo($BODYCOLOR); ?> 
style="font-family: arial,verdana,san-serif; margin:0px;">

<table border=0  width=80% height=100% align=center  border=0 cellspacing=0 cellpadding=0 
STYLE="color: <? echo($fontcol); ?>;" bgcolor=<? echo($BOXCOLOR); ?>>
<tr width=100% background="./images/bg.jpg">
<td width=100%  align="center" background="./images/bg.jpg">
<div style="border: 2px groove #888888; border-left: 0px; border-right: 0px;"><br>
<font style="font-size: 18px; color: <? echo($HEADCOLOR); ?>; font-weight: bold;">
<a href="<? echo($sname);?>" style="color: <? echo($HEADCOLOR); ?>; text-decoration:none;"><? echo($sitename); ?></a> Feedback Page</font>
<br><br></div>
</td></tr>

<script language=javascript>
function check()
{
 var feed = document.sds.feedback.value;
 var nname = document.sds.name.value;

 if(feed == "" || nname == "")
 {
	alert("Please fill required fields marked * ");
	return false;
 }

return true;
}
</script>

<script language=javascript>
function mlength()
{
  var mlen  = document.sds.feedback.value;
  var siz = mlen.length;
  var le = <?php echo($textarea_size); ?>;
  //var le = parseInt(lea);
  siz = (le - mlen.length);

 // alert(lea); 
 if (siz < 0)  
  {
	mlen = mlen.substring(0,le);
	document.sds.feedback.value = mlen;
  }   
   document.sds.sizea.value = siz;

}
</script>

<tr width=100% >
<td width=100%  align="center">
<br><br>
<div align="center">
  <form name=sds action="mailer.php" METHOD="POST" onSubmit="return check()">
  <table cellpadding=4 cellspacing=0 border=0>
    <tr><td><font color=<? echo($FONTCOLOR); ?>>To: </font></td><td><input type="text" name="to" size=27 readonly
	value="<? echo($email); ?>"></td></tr>
    <tr><td><font color=<? echo($FONTCOLOR); ?>>Name: * </font></td><td><input type="text" maxlength='50' name="name" size=27></td></tr>
    <tr><td><font color=<? echo($FONTCOLOR); ?>>Email:</font></td><td><input type="text" name="from" maxlength='50' size=27></td></tr>
    
    <tr><td colspan=2><font color=<? echo($FONTCOLOR);?> ><b>Feedback: * </b></font><br>
    <textarea onkeyup = mlength() name="feedback" rows=6 cols=40 wrap=physical></textarea>
    <input name='sizea' value="<?php echo($textarea_size); ?>" size=2 readonly >

    </td></tr>
    <tr><td colspan=2 align=right><input type="submit" value="Send"></td>
    <td colspan=2 align=right><a href="index.php" class="hm"><input type="button" value="Back"></a></td>
    </tr>
    <tr></tr>
    </table>
    </form>
    </div>
</td>
</tr>

<tr width=100% background="./images/bg.jpg">
<td background="./images/bg.jpg">

<div align=center STYLE="font-family: sans-serif; margin-left: 1.5cm; margin-right: 1cm; 
font-size: 18px; color: <?php echo($FONTCOLOR);?>" >
Please send me your feedbacks.<br>
<br>
<div align=right STYLE="font-size: 12px; color: #dadada;">
<a href="#" style="text-decoration:none; color: #dadada;">Devoloped by &nbsp;&nbsp;<b>&copy; Galacticos</b></a>
</div>
</td>
</tr>
</table>

</body>
</html>
