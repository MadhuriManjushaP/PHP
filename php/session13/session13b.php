<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$to = "to@gmail.com";
$subject = "Subject Here";
$message = "<b>We are sending mail using Php Email.</b>";
$header = "From:from@domain.com";

$header .= "Cc:cc@domain.com";
$header .= "Bcc:bcc@domain.com";
$header .= "MIME-Version: 1.0";
$header .= "Content-type: text/html";
$emailSend = mail ($to,$subject,$message,$header);
if($emailSend) {
echo "Email sent successfully";
}
	else {
echo "Email could not be sent";
}
?>      
</body>
</html>