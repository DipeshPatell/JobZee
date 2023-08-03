<?php

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'jay412003@gmail.com'; // your email id
$mail->Password = 'password'; // your password
$mail->SMTPSecure = 'tls';                  
$mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
$mail->setFrom('sendfrom@gmail.com', 'Name');
$mail->addAddress('sendto@yahoo.com');   // Add a recipient
$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>HeY!,</h1>';
$bodyContent .= '<p>This is a email that Radhika send you From LocalHost using PHPMailer</p>';
$mail->Subject = 'Email from Localhost by Radhika';
$mail->Body    = $bodyContent;
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}

?>
<?php
   $to_email = "recipient@example.com";
   $subject = "Simple Email Test via PHP";
   $body = "Hi,nn This is test email send by PHP Script";
   $headers = "From: sender@example.com";
 
   if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
   } else {
      echo("Email sending failed...");
   }
?>