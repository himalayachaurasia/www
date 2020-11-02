<?php
include('connect.php');
if(isset($_GET['id']))
{
	echo $id=$_GET['id'];
	$query=mysqli_query($conn,"delete from staff where id='$id'");	

if($query == TRUE)
{
	header('location:viewstaff.php');
	
}
else{
	echo '<script> swal("Great!", "Staff account not deleted Successfully!", "success");</script>';
}
 
}
include('footer.php');
?>