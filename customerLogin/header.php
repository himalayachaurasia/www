<?php include 'connect.php';
session_start();
$email = $_SESSION["email"];
if ($email == "") {
    echo "<script>document.location='index.php'</script>";
} else {
    //echo $email;
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/images-favicon.png">
  <link rel="icon" type="image/png" href="../assets/img/images-favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   User Porfile
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.minf066.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
  <!-- Extra details for Live View on GitHub Pages -->

  <div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          Hi..
        </a>
        <a href="#" class="simple-text logo-normal">
        <?php echo $email; ?>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="assets/img/faces/amit.jpeg" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
               <?php echo $email; ?>

              </span>
            </a>
            <!--div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> MP </span>
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> EP </span>
                    <span class="sidebar-normal"> Edit Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S </span>
                    <span class="sidebar-normal"> Settings </span>
                  </a>
                </li>
              </ul>
            </div-->
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
              <i class="material-icons">person</i>
              <p> Sales Stock
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="formsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="staff.php">
                     <span class="sidebar-normal"> Add Staff </span>
                  </a>
                </li>
				<li class="nav-item ">
                  <a class="nav-link" href="viewstaff.php">
                     <span class="sidebar-normal">View Staff </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#studentadmission">
              <i class="material-icons">face</i>
              <p> Student
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="studentadmission">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="student.php">
                     <span class="sidebar-normal"> Add Admission </span>
                  </a>
                </li>
				<li class="nav-item ">
                  <a class="nav-link" href="viewadmission.php">
                     <span class="sidebar-normal">View Admission </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#standard">
              <i class="material-icons">person_add</i>
              <p> standard
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="standard">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="standard.php">
                     <span class="sidebar-normal"> Add standard </span>
                  </a>
                </li>
				<li class="nav-item ">
                  <a class="nav-link" href="viewstandard.php">
                     <span class="sidebar-normal">View standard </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#contact">
              <i class="material-icons">local_post_office</i>
              <p> Conatct Us
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="contact">
              <ul class="nav">
				<li class="nav-item ">
                  <a class="nav-link" href="viewcontact.php">
                     <span class="sidebar-normal">View Contact </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">logout</i>
              <p> Logout </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

