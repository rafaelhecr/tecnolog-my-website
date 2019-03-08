<?php
$to      = 'rafaelhecr@outlook.com';
$subject = 'New Request from Website';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$headers = 'From: webmaster@qixty.com' . "\r\n" .
'Reply-To: contact@qixty.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$send = mail($to, $subject, $name, $email, $phone, $message, $headers);

// this will help you to get the status mail sent or not
if($send) :
   echo "Email sent";
else :
    echo "Email sending failed";
endif;
?>