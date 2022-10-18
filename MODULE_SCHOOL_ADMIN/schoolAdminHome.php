<?php
	session_start();
  require_once("../PHP/phpMethods.php");

	$varUserID = $_SESSION['userID'];

	$sql="SELECT * FROM tbl_user where userID = '".$varUserID."'";
	$result = getData($sql);
		if(!empty($result)){
			$varRoleName = $result["roleName"];
			$varFullName = $result["name"];
			$varEmail = $result["email"];
			$varPhone = $result["phone"];
		} else{
			echo("<script>
				alert('Data retrieval failed.');
				</script>");
		}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Helping Hands Admin Portal</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="systemAdminHome.php"><img src="assets/images/hhLogo.jpg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="systemAdminHome.php"><img src="assets/images/hhLogo-mini.jpg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo($varFullName); ?></h5>
                  <span><?php echo($varRoleName); ?></span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Important Dates</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items active">
            <a class="nav-link" href="schoolAdminHome.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/addStudent.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-plus"></i>
              </span>
              <span class="menu-title">Add student</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="studentDetails.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Student Details</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Security</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">
                  <span class="menu-icon">
                    <i class="mdi mdi-fingerprint"></i>
                  </span>
                  <span class="menu-title">2FA</span>
                </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Student Documents</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="systemAdminHome.php"><img src="assets/images/hhLogo-mini.jpg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <h5 class="mb-0 font-weight-normal text-center">Admin Portal</h5>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" onclick="window.location.href='pages/forms/addStudent.php'">+ Add student</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo($varFullName); ?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
										<div class="preview-item-content" onclick="window.location.href='../PHP/logout.php'">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <span class="text-right" style="display: flex; justify-content: space-between;">
                      <h4 class="card-title">Students Enrolled In Program</h4>
                      <a type="button" href="studentDetails.php" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                    </a></span>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr class="text-center">
                            <th> No. </th>
                            <th> Student Name </th>
                            <th> KCPE Index No </th>
                            <th> Class 8 Stream </th>
                            <th> Guardian Contact </th>
                            <th> Guardian ID/Passport </th>
                            <th> Sponsor a Child Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sqlClass8="SELECT * FROM tbl_student_class_8 ORDER BY studentClass8SponsorAChildStatus";
                          $class8Result = getDataRows($sqlClass8);
                          $studentClass8FullNameArr = array();
                          $studentClass8KCPEIndexNoArr = array();
                          $studentClass8StreamArr = array();
                          $studentClass8GuardianContactArr = array();
                          $studentClass8GuardianNatIdOrPassportNoArr = array();
                          $studentClass8SponsorAChildStatusArr = array();
                          $studentClass8SponsorAChildStatusRejectionMessageArr = array();
                          if(!empty($class8Result)){
                            foreach($class8Result as $class8){
                              $varClass8FullName = $class8["studentClass8FName"]." ".$class8["studentClass8MName"]." ".$class8["studentClass8LName"];
                              array_push($studentClass8FullNameArr, $varClass8FullName);
                              array_push($studentClass8KCPEIndexNoArr, $class8["studentClass8KCPEIndexNo"]);
                              array_push($studentClass8StreamArr, $class8["studentClass8Stream"]);
                              array_push($studentClass8GuardianContactArr, $class8["studentClass8GuardianContact"]);
                              array_push($studentClass8GuardianNatIdOrPassportNoArr, $class8["studentClass8GuardianNatIdOrPassportNo"]);
                              array_push($studentClass8SponsorAChildStatusArr, $class8["studentClass8SponsorAChildStatus"]);
                              array_push($studentClass8SponsorAChildStatusRejectionMessageArr, $class8["studentClass8SponsorAChildStatusRejectionMessage"]);
                            }
                          }
                          ?>
                          <?php
                            for($i=0;$i<sizeof($studentClass8KCPEIndexNoArr);$i++){
                              ?>
                              <tr class="text-center">
                                <td><?php echo($i+1); ?></td>
                                <td>
                                  <span class="ps-2"><?php echo($studentClass8FullNameArr[$i]); ?></span>
                                </td>
                                <td><?php echo($studentClass8KCPEIndexNoArr[$i]); ?></td>
                                <td><?php echo($studentClass8StreamArr[$i]); ?></td>
                                <td><?php echo($studentClass8GuardianContactArr[$i]); ?></td>
                                <td><?php echo($studentClass8GuardianNatIdOrPassportNoArr[$i]); ?></td>
                                <td>
                                  <?php
                                    if($studentClass8SponsorAChildStatusArr[$i]=="Inactive"){
                                      ?>
                                      <div class="badge badge-outline-secondary"><?php echo($studentClass8SponsorAChildStatusArr[$i]); ?></div>
                                      <?php
                                    } elseif($studentClass8SponsorAChildStatusArr[$i]=="Requested"){
                                      ?>
                                      <div class="badge badge-outline-primary"><?php echo($studentClass8SponsorAChildStatusArr[$i]); ?></div>
                                      <?php
                                    } elseif($studentClass8SponsorAChildStatusArr[$i]=="Pending"){
                                      ?>
                                      <div class="badge badge-outline-warning"><?php echo($studentClass8SponsorAChildStatusArr[$i]); ?></div>
                                      <?php
                                    } elseif($studentClass8SponsorAChildStatusArr[$i]=="Approved"){
                                      ?>
                                      <div class="badge badge-outline-success"><?php echo($studentClass8SponsorAChildStatusArr[$i]); ?></div>
                                      <?php
                                    } elseif($studentClass8SponsorAChildStatusArr[$i]=="Rejected"){
                                      ?>
                                      <div class="badge badge-outline-danger" title="<?php echo($studentClass8SponsorAChildStatusRejectionMessageArr[$i]); ?>"><?php echo($studentClass8SponsorAChildStatusArr[$i]); ?></div>
                                      <?php
                                    }
                                  ?>
                                </td>
                              </tr>
                              <?php
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © helpinghandsfoundationkenya 2022</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
