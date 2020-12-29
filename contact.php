<?php
$name = $_REQUEST['name']
$email = $_REQUEST['email']
$message = $_REQUEST['message']

if (empty($name) or (empty($email) or (empty($message))
{
	echo "Please fill all the fields";
}
else
{
	mail("joydeep5.asn@gmail.com", "Personal Portfolio Website Message", $message, "From: $name < $email");
	echo"<script type='text/javascript'>alert('Your Message have been delivered successfully');
	window.history.log(-1);
	</script>";
}