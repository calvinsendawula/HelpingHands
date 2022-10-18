<?php

function dbPortInfo(){
	$dbport = "3306";
	return ($dbport);
}

function connect(){
	$dbserver = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "helping_hands";
	$dbport = dbPortInfo();
	$link=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname,$dbport) or die("Could not connect".mysqli_connect_error());
	return ($link);
}

function setData($sql){
	$link=connect();
	if (mysqli_query($link,$sql)) {
		return true;
	} else {
		echo("<script>
			alert('Error '".mysqli_error($link).");
			</script>");
		return false;
	}
}

function getData($sql){
	$link=connect();
	$result=mysqli_query($link,$sql);
	while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$rows=$row;
		return $rows;
	}
}

function getDataRows($sql){
	$link=connect();
	$result=mysqli_query($link,$sql);
	while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$rows[]=$row;
	}
	if(!empty($rows)){
		return $rows;
	}
}

function menuRedirect(){
	$varLogin = "USER_MODULE/FRONT/login.php";
	$varOrder = "PRODUCT_MODULE/locations.php";
	if (isset($_SESSION['userLog'])) {
		$varUserLog = $_SESSION['userLog'];
	} else {
			$varUserLog = 0;
	}
	if(!empty($varUserLog)){
		if($varUserLog == 0){
			echo($varLogin);
		} elseif($varUserLog == 1){
				echo($varOrder);
		}
	} else{
			echo($varLogin);
	}
}

function menuRedirect2(){
	$varLogin = "login.php";
	$varOrder = "../../PRODUCT_MODULE/locations.php";
	if (isset($_SESSION['userLog'])) {
		$varUserLog = $_SESSION['userLog'];
	} else {
			$varUserLog = 0;
	}
	if(!empty($varUserLog)){
		if($varUserLog == 0){
			echo($varLogin);
		} elseif($varUserLog == 1){
				echo($varOrder);
		}
	} else{
			echo($varLogin);
	}
}

function dashRedirectPage(){
	$varPageLogin = 'USER_MODULE/FRONT/login.php';
  $varPageDash = 'USER_MODULE/DASHBOARD/account.php';
	if (isset($_SESSION['userLog'])) {
		$varUserLog = $_SESSION['userLog'];
	} else {
			$varUserLog = 0;
	}
	if(!empty($varUserLog)){
		if($varUserLog == 0){
			echo($varPageLogin);
		} elseif($varUserLog == 1){
				echo($varPageDash);
		}
	} else{
			echo($varPageLogin);
	}
}

function donorDashRedirectPage(){
	$varPageLogin = 'LOGIN/AUTH/login.php';
  $varPageDash = 'MODULE_DONOR/DASHBOARD/account.php';
	if (isset($_SESSION['userLog'])) {
		$varUserLog = $_SESSION['userLog'];
	} else {
			$varUserLog = 0;
	}
	if(!empty($varUserLog)){
		if($varUserLog == 0){
			echo($varPageLogin);
		} elseif($varUserLog == 1){
				echo($varPageDash);
		}
	} else{
			echo($varPageLogin);
	}
}

function donorLogoutPage(){
	$varPageLogin = '';
  $varPageDash = 'PHP/logout.php';
	if (isset($_SESSION['userLog'])) {
		$varUserLog = $_SESSION['userLog'];
	} else {
			$varUserLog = 0;
	}
	if(!empty($varUserLog)){
		if($varUserLog == 0){
			echo($varPageLogin);
		} elseif($varUserLog == 1){
				echo($varPageDash);
		}
	} else{
			echo($varPageLogin);
	}
}

function donorDashRedirectDisplay(){
	$varDisplayLogin = 'Sign in';
  $varDisplayDash = 'Dashboard';
	if (isset($_SESSION['userLog'])) {
		$varUserLog = $_SESSION['userLog'];
	} else {
			$varUserLog = 0;
	}
	if(!empty($varUserLog)){
		if($varUserLog == 0){
			echo($varDisplayLogin);
		} elseif($varUserLog == 1){
				echo($varDisplayDash);
		}
	} else{
			echo($varDisplayLogin);
	}
}

function donorLogoutDisplay(){
	$varDisplayLogin = '';
  $varDisplayDash = 'Logout';
	if (isset($_SESSION['userLog'])) {
		$varUserLog = $_SESSION['userLog'];
	} else {
			$varUserLog = 0;
	}
	if(!empty($varUserLog)){
		if($varUserLog == 0){
			echo($varDisplayLogin);
		} elseif($varUserLog == 1){
				echo($varDisplayDash);
		}
	} else{
			echo($varDisplayLogin);
	}
}

function destroyCookie($cookieName){
	$expired = time() -1;
	setcookie($cookieName, "", $expired);
}

function verifyUser($varEmail, $varPassword){
	$dbserver = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "helping_hands";
	$dbport = dbPortInfo();
	$conn = new mysqli($dbserver,$dbuser,$dbpass,$dbname,$dbport);

	$sql="SELECT * FROM tbl_user where email = '".$varEmail."'";
	$result= $conn->query($sql);
	if (mysqli_num_rows($result)!=0) {
		while($res = mysqli_fetch_array($result)) {
			$hashedPass = $res['password'];
			$verify = password_verify($varPassword, $hashedPass);
	  	if ($verify) {
				if($res['isDeleted'] != 0){
					echo("<script>
						window.location.href='../AUTH/login.php';
						alert('This user account is no longer active! <br> Try logging in with different credentials.');
						</script>");
				} else {
					$varRoleID = $res['roleID'];
					$_SESSION['userRoleID']=$res['roleID'];
					$_SESSION['userID']=$res['userID'];
					$varUserID = $res['userID'];
					$sql2="SELECT * FROM tbl_role where roleID = '".$varRoleID."'";
					$result2= $conn->query($sql2);
					if (mysqli_num_rows($result2)!=0) {
						while($res2 = mysqli_fetch_array($result2)){
							$_SESSION['userLog']='1';
					    /*$time = getdate();       //  TODO: To be solved using triggers
					    $sql_update = "UPDATE tbl_user_login SET lastLogin = '$time' WHERE userID=$varUserID"
					    setData($sql_update);*/
							if($res2['roleName'] == 'System Admin' && $res2['isDeleted'] == 0){
								echo("<script>
									window.location.href='../../MODULE_SYSTEM_ADMIN/systemAdminHome.php';
									alert('Login Successful. Redirecting you to your dashboard.');
									</script>");
							} elseif($res2['roleName'] == 'School Admin' && $res2['isDeleted'] == 0){
								echo("<script>
									window.location.href='../../MODULE_SCHOOL_ADMIN/schoolAdminHome.php';
									alert('Login Successful. Redirecting you to your dashboard.');
									</script>");
							} elseif($res2['roleName'] == 'Donor' && $res2['isDeleted'] == 0){
								echo("<script>
									window.location.href='../../index.php';
									alert('Login Successful.');
									</script>");
							} elseif($res2['roleName'] == 'Class 8 Candidate' && $res2['isDeleted'] == 0){
								echo("<script>
									window.location.href='../../MODULE_CLASS_8_CANDIDATE/class8Home.php';
									alert('Login Successful.');
									</script>");
							} elseif($res2['roleName'] == 'High School Student' && $res2['isDeleted'] == 0){
								echo("<script>
									window.location.href='../../MODULE_HIGH_SCHOOL_STUDENT/highSchoolStudentHome.php';
									alert('Login Successful.');
									</script>");
							}
						}
					} else{
						echo("<script>
							window.location.href='../AUTH/login.php';
							alert('User role not set!');
							</script>");
					}
		  	}
			}	else {
				echo '<script>
					alert("Invalid Password. Please try again");
					window.location.href = "../AUTH/login.php";
					</script>';
			}
		}
	} else{
		echo '<script>
			alert("Invalid email. Please try again.");
			window.location.href = "../AUTH/login.php";
			</script>';
	}
}

 ?>
