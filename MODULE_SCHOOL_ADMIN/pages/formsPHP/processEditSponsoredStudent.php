<?php
session_start();
require_once("../../../PHP/phpMethods.php");
$varTargetAmount = $_POST['targetAmount'];
$varClosingDate = $_POST['closingDate'];

if(isset($_GET['studentSponsoredID'])){
  $varStudentID = $_GET['studentSponsoredID'];
}

if(!empty($_POST['targetAmount']) && !empty($_POST['closingDate'])){
  $sql_update = "UPDATE tbl_student_sponsored SET studentSponsoredTargetAmount = '$varTargetAmount', studentSponsoredDonationClosingDate = '$varClosingDate' WHERE studentSponsoredID = '$varStudentID'";
  setData($sql_update);
  echo("<script>
    window.location.href='../../studentDetails.php';
    alert('Sponsorship details updated.');
    </script>");
} else{
    echo("<script>
      window.location.href='../../studentDetails.php';
      alert('Please fill out all fields to proceed.');
      </script>");
    }

 ?>
