<?php
include('connect.php');
if(isset($_GET['id']))
{
	echo $id=$_GET['id'];
		$query=mysqli_query($conn,"delete from admission where id='$id'");
if($query == TRUE)
{
	header('location:viewadmission.php');
	
}
else{
echo '<script> swal("Great!", "Student account not deleted Successfully!", "success");</script>';
}
}
include('footer.php');
?>