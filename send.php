<?php
require_once('PHPMailer/PHPMailerAutoload.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "10.230.80.51"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = false;                  // enable SMTP authentication
$mail->Host       = "10.230.80.51"; // sets the SMTP server
$mail->SMTPSecure = 'tls'
//$mail->Username   = "yourname@yourdomain"; // SMTP account username
//$mail->Password   = "yourpassword";        // SMTP account password

$mail->SetFrom('elton.silva@codhab.df.gov.br', 'First Last');

$mail->AddReplyTo("name@yourdomain.com","First Last");

$mail->Subject    = "PHPMailer Test Subject via smtp, basic with authentication";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML('MEEE');

$address = "elton.silva@codhab.df.gov.br";
$mail->AddAddress($address, "John Doe");

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
    