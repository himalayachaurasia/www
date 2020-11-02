<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];


	// echo $name."<br>";
	// echo $email."<br>";
	// echo $contact."<br>";
	// echo $message."<br>";

	$username = "shaikhrashik1@gmail.com";
	$password = "7709285292";

	// $emailSubject = $_POST['emailSubject'];
	// $emailMessage = $_POST['emailMessage'];
	// $emailAddress = $_POST['emailAddress'];
	require 'PHPMailerAutoload.php';

	$mail = new PHPMailer;
	$mail2 = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = $username;                 // SMTP username
	$mail->Password = $password;                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;  
	$mail->isHTML(true);                                 // TCP port to connect to
	$mail->setFrom($username);
    $mail->addAddress("shaikhrashik1@gmail.com");     // Add a recipient
	$mail->Subject = "Enquiry";
	$mail->Body    = $name.$contact;
	if($mail->send()) {

		
	    echo 'Message has been sent';
	    $mail2->isSMTP();                                      // Set mailer to use SMTP
		$mail2->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail2->SMTPAuth = true;                               // Enable SMTP authentication
		$mail2->Username = $username;                 // SMTP username
		$mail2->Password = $password;                           // SMTP password
		$mail2->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail2->Port = 587;  
		$mail2->isHTML(true);                                 // TCP port to connect to
		$mail2->setFrom($username);
	    $mail2->addAddress($email);     // Add a recipient
		$mail2->Subject = "Thank you For Enquiry";
		$mail2->Body    = "You Made enquiry at sample.com,our support team will contact soon <br> <br> Regards,<br> sample Support Team.";
		$mail2->send();

	} else {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
?>
