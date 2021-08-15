<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$my_email = "justinwoom@gmail.com";
$email_subject = "Email from website";
$email_body = "New message from $name.\nEmail Address: $email.\nMessage:\n $message";
$headers = "From: $my_email \r\n";

mail($my_email,$email_subject, $email_body, $headers);

?>