<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];


	// echo $name."<br>";
	// echo $email."<br>";
	// echo $contact."<br>";
	// echo $message."<br>";

	$username = "infovgrpl@gmail.com";
	$password = "vishwagreen";

	// $emailSubject = $_POST['emailSubject'];
	// $emailMessage = $_POST['emailMessage'];
	// $emailAddress = $_POST['emailAddress'];
	require 'mailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;
	$mail2 = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = $username;                 // SMTP username
	$mail->Password = $password;                           // SMTP password
	$mail->From = "infovgrpl@gmail.com";
	$mail->FromName = "Vishwa Green Realtors";
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;  
	$mail->isHTML(true);                                 // TCP port to connect to
	$mail->setFrom($username);
    $mail->addAddress("infovgrpl@gmail.com");
    $mail->addCC('digitalkcresst@gmail.com');     	// Add a recipient
	$mail->Subject = "Enquiry";
	$mail->Body    = '<div style="padding:15px"><h4 >Visitor Name: </h4>'.$name.'<h4>Visitor Contact Number: </h4>'.$contact.'</div>';
	if($mail->send()) {

		include 'index.php';
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
		$mail2->Body    = "You Made enquiry at vishwagreenrealtors.com ,our support team will contact soon <br> <br> Regards,<br> Vishwagreenrealtors Support Team.";
		$mail2->send();

	} else {
	    // echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
?>
