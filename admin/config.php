<?php
session_start();
$sender = $_POST['sender_name'];
$destination = $_POST['destination_number'];
$message = urlencode($_POST['message']);

$baseurl ="http://121.241.242.114:8080/bulksms/bulksms?";

$url = "http://121.241.242.114:8080/bulksms/bulksms?username=talh-arman&password=talha011&type=0&dlr=1&destination=$destination&source=$sender&message=$message&url=KKKK";

    $ret = file($url);
 
    $sess = explode(":",$ret[0]);
	
    if ($sess[0] == "OK") {
 
        $sess_id = trim($sess[1]);
        $url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$destination&text=$message";
 
        $ret = file($url);
        $send = explode(":",$ret[0]);
		
        if ($send[0] == "1701") {
            echo "<h1>successmessage ID:<h1> ". $send[1];
			// header('location: sms.php');
        } else {
             echo "send message failed";
			 // header('location: sms.php');
        }
    } else {
         echo  "<br><br><br><br><br><br><br><br><br><h1><center><b>Message Send Successfully!!!</b></center></h1><br>
		<h1><center><b>Thank You!!!</b></center></h1>";
		// header('location: sms.php');
    }


?>