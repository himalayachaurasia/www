<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "student";
// Create connection
//$conn = new mysqli($servername, $username, $password, $db);
$conn = mysqli_connect('localhost', 'root', '', 'student');
// Check connection
if($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// echo "hii";
// // if ($conn == TRUE) {
	// 	echo "connection successful";
//  } else {
	// 	echo "not insert";
// }
?>