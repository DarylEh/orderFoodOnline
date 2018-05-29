<?php
//check if form is submitted
if(!isset($_POST['submit']))
{
	//form-to-email.php should not be accessed directy.
	echo "error; you need to submit the form!";
}
//assigning variable
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
//Filling out the email
$email_from = $visitor_email;
$email_subject = "New Form submission - $subject";
$email_body = "You have received a new message from ".$name.".\n\n".$message;
    
//send to email
$to = "hello@darylamodan.com";//<---you can update the sentTo email here
//adding email header info
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email function
mail($to,$email_subject,$email_body,$headers);
//when done,redirects to thank you page
header('Location: thank-you.html');

?> 