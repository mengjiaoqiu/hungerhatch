<?php
// Check for empty fields
//if(empty($_POST['name'])  		||
   //empty($_POST['phone']) 		||srizahova@outlook.com
  // empty($_POST['message'])		||
   //!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   //{
	//echo "No arguments Provided!";
	//return false;
  // }
	
$name = $_POST['name'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'srizahova@outlook.com';
$email_subject = "Hunger Hatch Feedback Form:  $name";
$email_body = "You have received a new message from your website feedback form.\n\n"."Here are the details:\n\nName: $name\n\nMessage:\n$message";
$headers = "From: noreply@hungerhatch.com\n";
mail($to,$email_subject,$email_body,$headers);
echo "Your message has been sent successful!";
return true;	
?>
