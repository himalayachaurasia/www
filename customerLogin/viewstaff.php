<?php include 'header.php';?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">Staff Data</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
						              <th>S.NO</th>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Qualification</th>
                          <th>Experience</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>Image</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
						              <th>S.NO</th>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Qualification</th>
                          <th>Experience</th>
                          <th>Contact</th>
                          <th>Email</th>
						              <th>Image</th>
                         <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
					  <tr>
					  <?php
$select = mysqli_query($conn, 'select * from staff');
$i = 1;
while ($row = mysqli_fetch_array($select)) {
	$id = $row['id'];
	$name = $row['name'];
	$designation = $row['designation'];
	$qualification = $row['qualification'];
	$experience = $row['experience'];
	$contact = $row['contact'];
	$email = $row['email'];
	$image = $row['image'];

	?>

                          <td><?php echo $i++; ?></td>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $designation; ?></td>
                          <td><?php echo $qualification; ?></td>
                          <td><?php echo $experience; ?></td>
                          <td><?php echo $contact; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><img style="width:50px; height:50px" src="assets/img/<?php echo $image; ?>"></td>
                           <td class="text-right">
                            <a href="edit_staff.php?id=<?php echo $id; ?>" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">edit</i></a>
                            <a href="delete_staff.php?id=<?php echo $id; ?>" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                          </td>
                        </tr>
						<?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>
     <?php include 'footer.php';?>
	 <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
	 <script>
		$(document).ready(function() {
			$('#datatable').DataTable();
		  });

	  </script>