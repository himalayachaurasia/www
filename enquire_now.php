<?php 
    include "connection.php";
    // Enquiry popup and right slider form start
    $resultt="";
	if(isset($_POST['Send'])){
        //mail server start
    require "phpMailer/PHPMailerAutoload.php";//include file of phpmailer
    $mail=new PHPMailer();//createing object for phpmailer

    $mail->IsSMTP(); //set mailer to use SMTP
    $mail->Mailer="smtp";
    $mail->Host="smtp.gmail.com"; //specify main and backup smtp servers
    $mail->Port=587; //tcp port to connect to
    //$mail->SMTPDebug = 1;
    $mail->SMTPAuth=true; //enable smtp authentication
    $mail->SMTPSecure="tls"; //enable tls encryption ssl also accepted
    $mail->Username="businessparkplanm@gmail.com";//smtp user name
    $mail->Password="rxirqmmczylgljxq"; //smtp password
    
    $mail->setFrom($_POST['visitorEmail'],$_POST['visitorName']);//input by the user
    $mail->addAddress("himalya.bncet@gmail.com","Sales Team"); //add a recipient
    $mail->addReplyTo($_POST['visitorEmail'],$_POST['visitorName']);

    //CC and BCC
    $mail->addCC("rahul.aggarwal@planmvgr.com");
    $mail->addBCC("himalaya712524@gmail.com");

    $mail->isHTML(true);
    $mail->Subject="Plan-M Contact Form Submission: ".$_POST['visitorName'];
    $mail->Body="<h2>Message: <u>Hi, A new client ".$_POST['visitorName']." is interested in our Plan-M project. He/She has enquired from https://www.vishwagreenrealtors.com/ website.</u></h2><br><h2>Name: ".$_POST['visitorName']."<br>Email: " .$_POST['visitorEmail']
    ."<br>Mobile: " .$_POST['visitorContactNumber']."</h2>";

    if (!$mail->Send()) {
        $resultt="Something went wrong. Please try again!";
        // var_dump($mail);
    //    echo "Error while sending mail";
    }
    else {
        $resultt="Record send";
        //echo "sending mail successfully";
    }
    //mail server end
	
        $name=$_POST['visitorName'];
        $eid=$_POST['visitorEmail'];
        $mob=$_POST['visitorContactNumber'];
        //Insert values in enquire_now table with column name 
        $query="INSERT INTO `enquire_now`(`Name`, `Email`, `Mobile`) VALUES ('$name','$eid','$mob')";
        $run=mysqli_query($conn,$query);
        if($run==TRUE){
            //echo "Record inserted";
        }
        else {
            echo "Error";
        }
        }
    
        
        // Enquiry popup and right slider form start
?>