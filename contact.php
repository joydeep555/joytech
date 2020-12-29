<?php
$name = $_POST['name']
$email = $_POST['email']
$message = $_POST['message']

$formcontent="From: $name \n Message: $message";
$mailTo = "joydeep5.asn@gmail.com";
$subject = "Contact From Submission";
$mailheader = "From: $email \r\n";
mail($mailTo, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
