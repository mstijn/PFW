<?php
$to      = 'max.vanstijn@yahoo.com';
$subject = 'Message from '. $_POST['email'];
$message = $_POST['name'] . $_POST['text'];
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>