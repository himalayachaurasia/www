<?php
include('connect.php');
if(isset($_GET['id']))
{
	echo $id=$_GET['id'];
	$query=mysqli_query($conn,"delete from contact where id='$id'");	

if($query == TRUE)
{
	header('location:viewcontact.php');
	
}
else{
	echo '<script> swal("Great!", "standard deleted Successfully!", "success");</script>';
}
 
}
include('footer.php');
?>