<?php
$to = 'iron420man@gmail.com';
$from = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


mail($to, $from, $subject, $message);
?> 