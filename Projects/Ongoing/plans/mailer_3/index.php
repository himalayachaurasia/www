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
// 	echo "<pre>";
// 	print_R( $_POST);
// 	exit;
	// $mail->setFrom('infovgrpl@gmail.com', 'Vishwa Green');
	if(isset($_POST['contact']) || isset($_POST['submit'])){
		$visitorName = $_POST['visitorName'];
		$visitorEmail = $_POST['visitorEmail'];
		$visitorContact = $_POST['visitorContactNumber'];
		$visitorMessage = $_POST['visitorFeedback'];
		
		$country = $_POST['country'];
		$state = $_POST['state'];
		$enquiry = isset($_POST['enquiry'])?$_POST['enquiry']:'';
		$book_site = isset($_POST['book_site'])?$_POST['book_site']:'';

		$purpose='';
		
		if($enquiry!=''){
			$purpose=$enquiry;
		}
		if($book_site!=''){
			$purpose=$book_site;
		}

		if($enquiry!='' && $book_site!=''){
			$purpose=$enquiry.' & '.$book_site;
		}

	
		
		
		// $mail->addAddress('thevishalmore@gmail.com', 'Ekta');
		$mail->addAddress('info@vishwagreenrealtors.com', '');
		//$mail->addCC('jasbir64@gmail.com');
		$mail->isHTML(true);
		$mail->Subject = 'Enquiry : Vishwa Green Realtors';
		//$mail->Body    = '<div style="background-color:rgb(153,217,234); color:black; padding:20px; box-sizing:border-box;"> <h3>Following person has made enquiry on your website.</h3>Enquiry Name : ' . $visitorName . '<br>Enquiry Email : ' . $visitorEmail . '<br>Enquiry Contact : ' . $visitorContact . '</div>';
	
	    $mail->Body    = '<div style="background-color:rgb(153,217,234); color:black; padding:20px; box-sizing:border-box;"> <h3>Following person has made enquiry on your website.</h3>Enquiry Name : ' . $visitorName . '<br>Enquiry Email : ' . $visitorEmail . '<br>Enquiry Contact : ' . $visitorContact . '<br>Enquiry country : ' . $country . '<br>Enquiry state : ' . $state . '<br>Enquiry Purpose : ' . $purpose . '</div>';
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
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TNR82NM');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNR82NM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header>
		<div class="header">
			<div class="row">
				<div class="col lg-2 lp-12 tb-12 mb-12 tb-offset-1 lg-offset-1 dt-offset-1 logo">
				    
					<center><img style="width: 200px;" src="vishhwagreen.png"></center>				</div>
			</div>
		</div>
	</header>
	<?php 

	if(isset($_POST['contact']) || isset($_POST['submit'])){
	?>
	<div style="display: flex; width: 100%; height: 70vh; flex-direction: column; justify-content: center; align-items: center; align-content: center;">
		<h1 style="">Thank you for enquiry</h1>
		<h2 style="">We will contact you soon</h2>
		<a href="http://vishwagreenrealtors.com/Projects/Ongoing/plans/index.php" style="display: inline-block; background-color: #008040; color:#fff; padding: 10px; border-radius: 5px; text-decoration: none; ">Go Back to PlanS</a>
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