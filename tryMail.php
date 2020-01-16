<?php
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['sendMailer'])) {

$subject="Final Sending Testing";
// require_once('class.phpmailer.php');  //Mailer File

require 'PHPMailer/PHPMailer/PHPMailer.php';  //PHPMailer File
require 'PHPMailer/PHPMailer/SMTP.php';  //SMTP File
require 'PHPMailer/PHPMailer/Exception.php';  //Exception File

 $mail = new PHPMailer(TRUE);

 $mail->IsSMTP(); 

// Comment these lines when running on live server
 $mail->SMTPDebug = 1; 
 $mail->SMTPDebug = 2; 
 $mail->SMTPDebug = 3; 

 $mail->Host="smtp.gmail.com"; 
 $mail->SMTPAuth= true; 
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
 $mail->Port=587; 

 $mail->AddAddress("");

 $mail->Username=""; 

 $mail->Password=""; //App password not your gmail password

 $mail->SetFrom("","PHP Mailer DEMO");

 $mail->Subject = $subject;

 $mail->MsgHTML("Final Testing");

 if($mail->Send()){echo "Mail sent";}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Send mail using PHPMailer 2019</title>

	<style type="text/css">
		ul li{
    font-weight: 700;
    font-size: 20px;
}
	</style>

</head>
<body>
	<H2><center>Send mail using PHPMailer Latest 2019 (Using Two Step Authentication App Password.)</center></H2>

	<h2><u>STEPS TO BE DONE</u></h2>
	<ul>
		<li>Create an gmail account.</li>
		<li>Enable Two step authentication.</li>
		<li>Generate App Password.</li>
		<li>Include PHP Mailer files in your code (Given in Description) .</li>
		<li>Put App password in place of gmail password.</li>
		<li>Send Mail.</li>
	</ul>
<form method="post">
	<center><input type="submit" name="sendMailer" value="Send a message"></center>
</form>
</body>
</html>