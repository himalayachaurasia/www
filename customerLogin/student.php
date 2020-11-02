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
                    <h4 class="card-title">Add Admission</h4>
                  </div>
                  <div class="card-body ">
                    
					<div class="form-group">
                      <label class="bmd-label-floating">Student Name *</label>
                      <input type="text" class="form-control"  name="name" required="true">
                    </div>
					<select class="selectpicker" data-style="select-with-transition" name="standard" title="Single Select">
						  <option>select</option>
						  <option name="FIRST">FIRST  </option>
						  <option name="SECOND">SECOND </option>
						  <option name="THIRD">THIRD  </option>
						  <option name="FOURTH">FOURTH </option>
						  <option name="FIFTH">FIFTH  </option>
						  <option name="SIXTH">SIXTH  </option>
						  <option name="SEVENTH">SEVENTH</option>
						  <option name="EIGHT">EIGHT  </option>
						  <option name="NINTH">NINTH  </option>
						  <option name="TENTH">TENTH  </option>
						  <option name="ELEVAN">ELEVAN </option>
						  <option name="TWELTH">TWELTH </option>
				   </select>
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
	$q="INSERT into admission(name,standard,Creation_date) values('".$_POST['name']."','".$_POST['standard']."','".date('Y-m-d H:i:s')."')";
	mysqli_query($conn,$q);
	if($q == TRUE)
	{
		
		echo '<script> swal("Great!", "Student Added Successfully!", "success");</script>';
	}
	else
	{
		echo '<script> swal("Great!", "Student Not Added!", "error");</script>';
	}
}
?>