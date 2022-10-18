<?php
	session_start();
  require_once("../../../PHP/phpMethods.php");

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

if(isset($_GET['studentSponsoredID'])){
  $varStudentID = $_GET['studentSponsoredID'];
}

$sqlSponsored="SELECT * FROM tbl_student_sponsored WHERE studentSponsoredID = '".$varStudentID."'";
$studentSponsoredResult = getDataRows($sqlSponsored);
$studentSponsoredIDArr = array();
$studentSponsoredFullNameArr = array();
$studentSponsoredAmountRaisedArr = array();
$studentSponsoredTargetAmountArr = array();
$studentSponsoredDonationClosingDateArr = array();
$studentSponsoredProgressArr = array();
if(!empty($studentSponsoredResult)){
  foreach($studentSponsoredResult as $sponsored){
    $varSponsorFullName = $sponsored["studentSponsoredFName"]." ".$sponsored["studentSponsoredMName"]." ".$sponsored["studentSponsoredLName"];
    $varProgressCalcDecimal = ($sponsored["studentSponsoredAmountRaised"]/$sponsored["studentSponsoredTargetAmount"])*100;
    $varProgressCalc = (int)$varProgressCalcDecimal;
    array_push($studentSponsoredFullNameArr, $varSponsorFullName);
    array_push($studentSponsoredIDArr, $sponsored["studentSponsoredID"]);
    array_push($studentSponsoredAmountRaisedArr, $sponsored["studentSponsoredAmountRaised"]);
    array_push($studentSponsoredTargetAmountArr, $sponsored["studentSponsoredTargetAmount"]);
    array_push($studentSponsoredDonationClosingDateArr, $sponsored["studentSponsoredDonationClosingDate"]);
    array_push($studentSponsoredProgressArr, $varProgressCalc);
  }
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
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="../../schoolAdminHome.php"><img src="../../assets/images/hhLogo.jpg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../schoolAdminHome.php"><img src="../../assets/images/hhLogo-mini.jpg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" alt="">
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
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../schoolAdminHome.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="addStudent.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-plus"></i>
              </span>
              <span class="menu-title">Add student</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#studentDetailsTab" aria-expanded="false" aria-controls="studentDetailsTab">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Student Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="studentDetailsTab">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../studentDetails.php">
                  <span class="menu-title">View Details</span>
                </a></li>
								<li class="nav-item"> <a class="nav-link" href="editSponsoredStudent.php">
                  <span class="menu-title">Edit Sponsorship</span>
                </a></li>
              </ul>
            </div>
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
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../schoolAdminHome.php"><img src="../../assets/images/hhLogo-mini.jpg" alt="logo" /></a>
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
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" onclick="window.location.href='addStudent.php'">+ Add student</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" alt="">
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
										<div class="preview-item-content" onclick="window.location.href='../../../PHP/logout.php'">
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
            <div class="page-header">
              <h3 class="page-title"> Edit Sponsorship Details </h3>
            </div>
            <div class="row">
              <div class="col-md-2 grid-margin stretch-card"></div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Student Details</h4>
                    <form class="forms-sample" method="post" action="../formsPHP/processEditSponsoredStudent.php?studentSponsoredID=<?php echo $varStudentID; ?>">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 col-form-label">Full Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="fullname" style="width: 100%;" id="fname" value="<?php echo($studentSponsoredFullNameArr[0]); ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="amountRaised" class="col-sm-3 col-form-label">Amount Raised (Kshs.)</label>
                        <div class="col-sm-9">
                          <input type="number" name="amountRaised" style="width: 100%;" id="amountRaised" value="<?php echo($studentSponsoredAmountRaisedArr[0]); ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="targetAmount" class="col-sm-3 col-form-label">Target Amount (Kshs.)</label>
                        <div class="col-sm-9">
                          <input type="number" name="targetAmount" style="width: 100%;" id="targetAmount" value="<?php echo($studentSponsoredTargetAmountArr[0]); ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="closingDate" class="col-sm-3 col-form-label">Donation Closing Date</label>
                        <div class="col-sm-9">
                          <input type="text" name="closingDate" style="width: 100%;" id="closingDate" value="<?php echo($studentSponsoredDonationClosingDateArr[0]); ?>">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit Changes</button>
                      <a class="btn btn-dark" href='../../studentDetails.php'>Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
