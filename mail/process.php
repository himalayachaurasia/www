<?php 
ob_start();


require("dbconfig.php");	


$name = $_POST['visitorName'];
$email = $_POST['visitorEmail'];
$contact = $_POST['visitorContactNumber'];


// date_default_timezone_set('Asia/Kolkata');
// $createdate=date('d-m-Y H:i:s');


			$conn=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
            if($conn)
            {
                // echo "Sql connection is on For Your Data";
                $query = "insert into ".data."(name,email,contact) values('".$name."', '".$email."' , '".$contact."');" ;
                // echo $query;
                if(mysqli_query($conn,$query))
                {

				$subject="Enquiry From Vishwa Green Realtors";
				$message='<html><body>
				<table style="border:solid 1px #000">
				<tr>
				<th>Full Name</th>
				<th>'.$name.'</th>
				</tr>
				<tr>
				<td>Email</td>
				<td>'.$email.'</td>
				</tr>
				<tr>
				<td>Contact</td>
				<td>'.$contact.'</td>
				</tr>
				</table>
				</body>
				</html>';
				$headers .= "FROM: Vishwa Green Realtors <no-reply@shaikhrashik1@gmail.com>\r\n";
				$headers .= "CC: shaikhrashik1@gmail.com\r\n";
				// $headers .= "CC: kishalaya.chakravarty@sivantos.com\r\n";
				// $headers .= "CC: bestsoundcenter@gmail.com\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

				/*Email to Customer*/

				// $subject1="Thanks for Booking at Montana Lodge and Spa - EN";
				// $message1='<html><body>
				// <p>Dear '.$fname.',</p>
				// <p>Thank you for your enquiry.<br />
				// We will contact you soon.</p>
				// </body>
				// </html>';
				// $headers1 .= "FROM: Montana Lodge and Spa <no-reply@montanalodge.it>\r\n";
				// $headers1 .= "MIME-Version: 1.0\r\n";
				// $headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

				/*Email to Customer*/


				// $query=mysqli_query($con,"INSERT INTO tbl_booking (`name`, `email`, `mobile`, `arrival`, `departure`, `adult`, `child`, `createdate`) VALUES ('$fname','$email','$mobile','$arrival','$departure','$adults','$children','$createdate')");

				// if($query){

					// mail('info@montanalodge.it',$subject,$message,$headers);
					// mail($email,$subject1,$message1,$headers1);
					
				// 	echo"1";
				// }else{
				// 	echo"0";
				// }

		
                	mail('shaikhrashik1@gmail.com',$subject,$message,$headers);
                	// echo "<script>window.location='../thank-you.html'</script>";
                }

               	else{
                    echo "Unsuccessfull";
                    }
                }

            else{
                    echo mysqli_error();
            }

// mysqli_close($con);

?>