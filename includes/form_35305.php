<?php	
	if(empty($_POST['name_35305']) && strlen($_POST['name_35305']) == 0 || empty($_POST['email_35305']) && strlen($_POST['email_35305']) == 0)
	{
		return false;
	}
	
	$name_35305 = $_POST['name_35305'];
	$email_35305 = $_POST['email_35305'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_35305: $name_35305 \nEmail_35305: $email_35305 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_35305";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>