<?php
include('header.php');
if(isset($_GET['id'])){
$sel="select * from admission where id='".$_GET['id']."'";
$r=mysqli_query($conn,$sel);
$rel=mysqli_fetch_array($r);
//print_r($rel);
}
?>
<?php
		if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$standard  =  $_POST['standard'];
	$Modified_date=	 date('Y-m-d H:i:s');
	$q="UPDATE admission SET name='$name',standard='$standard',Modified_date='$Modified_date' where id='".$_GET['id']."'";
	
	mysqli_query($conn,$q);
	//print_r($q);
	
	if($q == TRUE)
	{
		echo"<script>document.location='viewadmission.php'</script>";
	}
	else
	{
		
		echo '<script> swal("ohh!", "Data Not Updated!", "error");</script>';
	}
}
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form  action="" method="post">
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">person</i>
                    </div>
                    <h4 class="card-title">Edit Admission</h4>
                  </div>
                  <div class="card-body ">
                    <div class="form-group">
                      <label class="bmd-label-floating">Student Name *</label>
                      <input type="text" class="form-control" value="<?php echo $rel['name'];?>" name="name" required="true">
                    </div><?php $r= $rel['standard'];?>
					 <select class="selectpicker" data-style="select-with-transition" name="standard" title="Single Select">
                  	  <option>select</option>
						  <option name="FIRST" <?php if( $r == 'FIRST') {echo "selected";} else{echo "";}?>>FIRST  </option>
						  <option name="SECOND" <?php if( $r == 'SECOND') {echo "selected";} else{echo "";}?> >SECOND </option>
						  <option name="THIRD" <?php if( $r == 'THIRD') {echo "selected";} else{echo "";}?>>THIRD  </option>
						  <option name="FOURTH" <?php if( $r == 'FOURTH') {echo "selected";} else{echo "";}?>>FOURTH </option>
						  <option name="FIFTH" <?php if( $r == 'FIFTH') {echo "selected";} else{echo "";}?>>FIFTH  </option>
						  <option name="SIXTH" <?php if( $r == 'SIXTH') {echo "selected";} else{echo "";}?>>SIXTH  </option>
						  <option name="SEVENTH" <?php if( $r == 'SEVENTH') {echo "selected";} else{echo "";}?>>SEVENTH</option>
						  <option name="EIGHT" <?php if( $r == 'EIGHT') {echo "selected";} else{echo "";}?>>EIGHT  </option>
						  <option name="NINTH" <?php if( $r == 'NINTH') {echo "selected";} else{echo "";}?>>NINTH  </option>
						  <option name="TENTH" <?php if( $r == 'TENTH') {echo "selected";} else{echo "";}?>>TENTH  </option>
						  <option name="ELEVAN" <?php if( $r == 'ELEVAN') {echo "selected";} else{echo "";}?>>ELEVAN </option>
						  <option name="TWELTH" <?php if( $r == 'TWELTH') {echo "selected";} else{echo "";}?>>TWELTH </option>
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
