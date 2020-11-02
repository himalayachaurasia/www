<?php 

	// print_r($_FILES['applierResume']);

?>

<?php

	require 'PHPMailerAutoload.php';
	$mail = new PHPMailer;
	// $mail->SMTPDebug = 2;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'infovgrpl@gmail.com';
	$mail->Password = 'vishwagreen';
	$mail->From = "infovgrpl@gmail.com";
	$mail->FromName = "Vishwa Green Realtors";
	$mail->SMTPSecure = 'TLS';
	$mail->Port = 587;
	// $mail->setFrom('infovgrpl@gmail.com', 'Vishwa Green');
	if(isset($_POST['contact']) || isset($_POST['submit'])){
		$visitorName = $_POST['visitorName'];
		$visitorEmail = $_POST['visitorEmail'];
		$visitorContact = $_POST['visitorContactNumber'];
		$visitorMessage = $_POST['visitorFeedback'];
		// $mail->addAddress('thevishalmore@gmail.com', 'Ekta');
		$mail->addAddress('salesplanmvgr.com');
		$mail->addCC('jasbir64@gmail.com');
		// $mail->addCC('digitalkcresst@gmail.com');
		$mail->isHTML(true);
		$mail->Subject = 'Enquiry : Vishwa Green Realtors';
		$mail->Body    = '<div style="background-color:rgb(153,217,234); color:black; padding:20px; box-sizing:border-box;"> <h3>Following person has made enquiry on your website.</h3>Enquiry Name : ' . $visitorName . '<br>Enquiry Email : ' . $visitorEmail . '<br>Enquiry Contact : ' . $visitorContact . '</div>';
	}
	else if(isset($_POST['career'])){
		if($_FILES['applierResume']['size']<2000000){
			$applierName = $_POST['applierName'];
			$applierEmail = $_POST['applierEmail'];
			$applierContactNumber = $_POST['applierContactNumber'];
			$department = $_POST['department'];

			if(move_uploaded_file($_FILES['applierResume']['tmp_name'], '../wc-content/resume/' . $_FILES['applierResume']['name']))
			{
				echo "file uploaded";
			}
			$mail->addAddress('hr@vishwagreenrealtors.com' );
			$mail->addAttachment( '../wc-content/resume/' . $_FILES['applierResume']['name']);
			$mail->isHTML(true);
			$mail->Subject = 'Candidate Enquiry : Vishwa Green Realtors';
			$mail->Body    = '<div style="background-color:rgb(211,241,145); color:black; padding:20px; box-sizing:border-box;"> <h3>Following person has submittd his resume.</h3>Candidate Name : ' . $applierName . '<br>Candidate Email : ' . $applierEmail . '<br>Candidate Contact : ' . $applierContactNumber . '<br>Candidate Interested In : <Br> <b><i>'  . $department . '</b></i></div>';
		}
	}



		$mail->send();

		if(isset($_POST['contact']) || isset($_POST['submit'])){
			header("location:../Career/index.php?success=true");
		}
		else if(isset($_POST['career'])) {
			header("location:http://vishwagreenrealtors.com/index.php?success=true");
		}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../wc-content/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../wc-content/css/style.css"/>
</head>
<body>
	<header>
		<div class="header">
			<div class="row">
				<div class="col lg-2 lp-12 tb-12 mb-12 tb-offset-1 lg-offset-1 dt-offset-1 logo">
					<img src="../wc-content/images/vishhwagreen.png">
				</div>
			</div>
		</div>
	</header>
	<?php 

	if(isset($_POST['contact']) || isset($_POST['submit'])){
	?>
	<div style="display: flex; width: 100%; height: 70vh; flex-direction: column; justify-content: center; align-items: center; align-content: center;">
		<h1 style="">Thank you for enquiry</h1>
		<h2 style="">We will contact you soon</h2>
		<a href="http://vishwagreenrealtors.com/" style="display: inline-block; background-color: #008040; color:#fff; padding: 10px; border-radius: 5px; text-decoration: none; ">Go Back to Home</a>
	</div>
	<?php
	}
	else if(isset($_POST['career'])) {
	?>
	<div style="display: flex; width: 100%; height: 70vh; flex-direction: column; justify-content: center; align-items: center; align-content: center;">
		<h1 style="">Thank you for submitting your resume.</h1>
		<h2 style="">We will contact you soon</h2>
		<a href="http://vishwagreenrealtors.com/" style="display: inline-block; background-color: #008040; color:#fff; padding: 10px; border-radius: 5px; text-decoration: none; ">Go Back to Home</a>
	</div>
	<?php
	}
	?>
	
</body>
</html>