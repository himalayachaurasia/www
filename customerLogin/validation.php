<?php include('header.php');?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form id="RegisterValidation" action="" method="post">
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">person</i>
                    </div>
                    <h4 class="card-title">Add Staff</h4>
                  </div>
                  <div class="card-body ">
                    
					<div class="form-group">
                      <label class="bmd-label-floating">Teacher Name *</label>
                      <input type="text" class="form-control"  name="name" required="true">
                    </div>
                   <div class="form-group">
                      <label class="bmd-label-floating"> Designations *</label>
                      <input type="text" class="form-control"  name="designation" required="true">
                    </div>
					<div class="form-group">
                      <label class="bmd-label-floating">Qualification *</label>
                      <input type="text" class="form-control"  name="qualification" required="true">
                    </div>
					<div class="form-group">
                      <label class="bmd-label-floating">Exp(Years) *</label>
                      <input type="text" class="form-control"  name="exp" required="true">
                    </div>
					<div class="form-group">
                      <label class="bmd-label-floating">Contact No.*</label>
                      <input type="text" class="form-control" name="contact" required="true">
                    </div>
                    <div class="form-group">
                      <label class="bmd-label-floating"> Email Address *</label>
                      <input type="email" class="form-control" name="email" required="true">
                    </div>
                  </div>
                  <div class="card-footer text-right">
                   
                    <input type="submit" name="submit" class="btn btn-rose" value="Add">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<?php include('footer.php');?>   
<?php
		if(isset($_POST['submit']))
{
	$q="INSERT into staff(name,designation,qualification,experience,contact,email,Creation_date) values('".$_POST['name']."','".$_POST['designation']."','".$_POST['qualification']."','".$_POST['exp']."','".$_POST['contact']."','".$_POST['email']."','".date('Y-m-d H:i:s')."')";
	mysqli_query($conn,$q);
	if($q == TRUE)
	{
		
		echo '<script> swal("Great!", "Staff Registered Successfully!", "success");</script>';
	}
	else
	{
		echo '<script> swal("Great!", "Staff Not Registered!", "error");</script>';
	}
}
?>