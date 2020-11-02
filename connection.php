<?php
$servername = "localhost";
 //$username = "planmadmin";
// $password = "ujG@?7BXkI(S";
$username = "root";
$password = "";
$dbname = "vishwagreen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>