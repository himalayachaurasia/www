<?php
include('connect.php');
if(isset($_GET['id']))
{
	echo $id=$_GET['id'];
	$query=mysqli_query($conn,"delete from standard where id='$id'");	

if($query == TRUE)
{
	header('location:viewstandard.php');
	
}
else{
	echo '<script> swal("Great!", "standard deleted Successfully!", "success");</script>';
}
 
}
include('footer.php');
?>