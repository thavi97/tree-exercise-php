<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
filter_var($email, FILTER_VALIDATE_EMAIL);
filter_var($email, FILTER_SANITIZE_EMAIL);
filter_var($name, FILTER_SANITIZE_STRING);
filter_var($message, FILTER_SANITIZE_STRING);
$formcontent="From: $name \n Message: $message";
$recipient = "test@localhost.com";
$subject = "Example Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Your contact form has been sent!";