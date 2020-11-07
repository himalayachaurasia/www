<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/images-favicon.png">
    <link rel="icon" type="image/png" href="assets/img/images-favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    CUSTOMER LOGIN
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.minf066.css?v=2.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
  </head>
 
  <body class="off-canvas-sidebar">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Navbar -->
 
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
      <div class="container">
      <div class="row">
    <div class="col lg-2 lp-12 tb-12 mb-12 tb-offset-1 lg-offset-1 dt-offset-1 logo">
					<a herf="index.php"><img src="assets/img/logologin.png" alt="Vishwa Green Realtors Login Logo"></a>
					<!-- <div class="col fl-rt mobile-only"> -->
						
					</div>
        </div>
    </div>
        
        <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        </button> -->
        <!-- <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.html" class="nav-link">
                <i class="material-icons">dashboard</i> Dashboard
              </a>
            </li>
            <li class="nav-item ">
              <a href="register.html" class="nav-link">
                <i class="material-icons">person_add</i> Register
              </a>
            </li>
            <li class="nav-item  active ">
              <a href="login.html" class="nav-link">
                <i class="material-icons">fingerprint</i> Login
              </a>
            </li>
            <li class="nav-item ">
              <a href="lock.html" class="nav-link">
                <i class="material-icons">lock_open</i> Lock
              </a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page">
      <div class="page-header login-page header-filter" filter-color="black" style="background-image: linear-gradient(180deg, navy,skyblue);">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 ml-auto mr-auto">
              <form class="form" method="post" action="#">
                <div class="card card-login card-hidden">
                  <div class="card-header card-header-rose text-center">
                    <h4 class="card-title">Login</h4>
                    <h5 id="error" style="display:none;">Invalid Crediential! <br>Please contact Vishwagreen Realtors.</h5>
                  </div>
                  <div class="card-body ">
                    <span class="bmd-form-group">
                   <div>
                      <label class="card-body">
                        <input type="radio" name="optradio">  Customer Login
                     </label>
                      <label class="card-body">
                        <input type="radio" name="optradio">  Admin Login
                      </label>
                   </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">email</i>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email..." required>
                      </div>
                    </span>
                    <span class="bmd-form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="pwd" placeholder="Password..."required>
                      </div>
                    </span>
                  </div>
                  <div class="card-footer justify-content-center">
                    
                    <input type="submit" name="submit" class="btn btn-rose btn-link btn-lg" value="Login">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container">
            <nav class="float-left">
              <ul>
                <li>
                  <a href="http://planm.vishwagreen.com" target="_blank">
                    planm.vishwagreen.com
                  </a>
                </li>
                <li>
                  <a href="http://www.vishwagreenrealtors.com/" target="_blank">
                    vishwagreen realtors
                  </a>
                </li>
                <li>
                  <a href="http://www.vishwagreenrealtors.com/Projects/Ongoing/" target="_blank">
                    Ongoing projects
                  </a>
                </li>
                <!-- <li>
                  <a href="http://www.vishwagreenrealtors.com/ContactUs/">
                    Contact Us
                  </a>
                </li> -->
              </ul>
            </nav>
            <div class="copyright float-right">
              &copy;
              <script>
              document.write(new Date().getFullYear())
              </script>, made with <i class="material-icons">home</i> by
              <a href="http://planm.vishwagreen.com" target="_blank">Vishwagreen Realtors Pvt. Ltd.</a> All rights reserve.
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/material-dashboard.minf066.js?v=2.1.0" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/demo/demo.js"></script>
    <script>
    $(document).ready(function() {
    md.checkFullPageBackgroundImage();
    setTimeout(function() {
    // after 1000 ms we add the class animated to the login/register card
    $('.card').removeClass('card-hidden');
    }, 700);
    });
    </script>
    <?php
    if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $pwd = $_POST['pwd'];
      $_SESSION["email"] = $email;
      $r = "select * from admin where email='$email' and password='$pwd'";
      $q = mysqli_query($conn, $r);
      $result = mysqli_num_rows($q);
      if ($result == TRUE) {
    echo "<script>document.location='dashboard.php'</script>";
    } else {
    echo
    '<script>
    document.getElementById("error").style.display = "block";
    </script>';
    }
    }
    ?>
  </body>
</html>