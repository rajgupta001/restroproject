<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];



$email_form = 'rajg9415434512@gmail.com';
$email_from = "Reservation form";
$email_body = "user Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";

$to = "rajguptah@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: form.html") ;

?>