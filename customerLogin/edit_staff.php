<?php
include 'header.php';
if (isset($_GET['id'])) {
	$sel = "select * from staff where id='" . $_GET['id'] . "'";
	$r = mysqli_query($conn, $sel);
	$rel = mysqli_fetch_array($r);
	// print_r($rel);
}
?>
<?php
if (isset($_POST['submit'])) {
	if ($_FILES['image']['tmp_name'] == "") {
		$sel = "select image from staff where id='" . $_GET['id'] . "'";
		$r = mysqli_query($conn, $sel);
		$rel = mysqli_fetch_array($r);
		$file_name = $rel['image'];
	} else {
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_name = $_FILES['image']['name'];
		move_uploaded_file($file_tmp, "assets/img/" . $file_name);
	}
	$name = $_POST['name'];
	$designation = $_POST['designation'];
	$qualification = $_POST['qualification'];
	$experience = $_POST['exp'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$image = $file_name;
	$Modified_date = date('Y-m-d H:i:s');
	$q = "UPDATE staff SET name='$name',designation='$designation',qualification='$qualification',experience='$experience',contact='$contact',email='$email',image='$image',Modified_date='$Modified_date' where id='" . $_GET['id'] . "'";

	mysqli_query($conn, $q);
	//print_r($q);

	if ($q == TRUE) {
		echo "<script>document.location='viewstaff.php'</script>";
	} else {

		echo '<script> swal("ohh!", "Data Not Updated!", "error");</script>';
	}
}
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form  action="" method="post" enctype="multipart/form-data">
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
                      <input type="text" class="form-control" value="<?php echo $rel['name']; ?>" name="name" required="true">
                    </div>
                   <div class="form-group">
                      <label class="bmd-label-floating"> Designations *</label>
                      <input type="text" class="form-control" value="<?php echo $rel['designation']; ?>" name="designation" required="true">
                    </div>
					<div class="form-group">
                      <label class="bmd-label-floating">Qualification *</label>
                      <input type="text" class="form-control" value="<?php echo $rel['qualification']; ?>" name="qualification" required="true">
                    </div>
					<div class="form-group">
                      <label class="bmd-label-floating">Exp(Years) *</label>
                      <input type="text" class="form-control" value="<?php echo $rel['experience']; ?>" name="exp" required="true">
                    </div>
					<div class="form-group">
                      <label class="bmd-label-floating">Contact No.*</label>
                      <input type="text" class="form-control" value="<?php echo $rel['contact']; ?>" name="contact" required="true">
                    </div>
                    <div class="form-group">
                      <label class="bmd-label-floating"> Email Address *</label>
                      <input type="email" class="form-control" value="<?php echo $rel['email']; ?>" name="email" required="true">
                    </div>
					<div class="form-group">
                      <h4 class="title">Edit Image</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                          <img src="assets/img/<?php echo $rel['image']; ?>" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                        <div>
                          <span class="btn btn-round btn-rose btn-file">
                            <span class="fileinput-new">Edit Photo</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="image" />
                          </span>
                          <br />
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
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
<?php include 'footer.php';?>
