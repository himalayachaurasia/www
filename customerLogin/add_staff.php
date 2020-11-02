<?php
include('header.php');
$name=$_POST['name'];
$designation=$_POST['designation'];
$qualification=$_POST['qualification'];
$exp=$_POST['exp'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$Creation_date=date('Y-m-d H:i:s');
$sql = "INSERT INTO staff (name, designation, qualification,experience,contact,email,Creation_date)VALUES($name, $designation,$qualification,$exp,$contact,$email,$Creation_date)";
$q= mysqli_query($sql,$conn);
if($q){
echo "<script> swal("Great!", "Staff Registered Successfully!", "success");;</script>";
}
else{
echo "<script> swal("ohhh!", "Staff Not Registered!", "error");;</script>";
}
mysqli_close($conn);
?>