<?php
session_start();
require_once("../../../PHP/phpMethods.php");
$varStudentID = $_GET["studentEditID"];
$varfname = $_POST['fname'];
$varmname = $_POST['mname'];
$varlname = $_POST['lname'];
$varkcpe = $_POST['kcpe'];
$varemail = $_POST['email'];
$varstream = $_POST['stream'];
$vargcontact = $_POST['gcontact'];
$varnatID = $_POST['natID'];
$varSponsorStatus = $_POST['sponsorStatus'];
$varRejectReason = $_POST['rejectReason'];

$sqlClass8="SELECT * FROM tbl_student_class_8 WHERE studentClass8ID = '".$varStudentID."'";
$class8Result = getData($sqlClass8);
if(!empty($class8Result)){
  $varStudentClass8SponsorAChildStatus = $class8Result["studentClass8SponsorAChildStatus"];
  $varAmountRaised = 0;
  $varTargetAmount = rand(25,40)*1000;
  $varDonationClosingDate = "Jan ".rand(1,31).", 2023";

  if($varSponsorStatus == "Approved" && $varStudentClass8SponsorAChildStatus != "Approved"){ //Changing to approved
    $sql_insert1 = "INSERT INTO tbl_student_sponsored(studentSponsoredFName,studentSponsoredMName,studentSponsoredLName,studentSponsoredAmountRaised,studentSponsoredTargetAmount,studentSponsoredDonationClosingDate) VALUES('$varfname','$varmname','$varlname','$varAmountRaised','$varTargetAmount','$varDonationClosingDate')";
    setData($sql_insert1);
  } elseif($varSponsorStatus != "Approved" && $varStudentClass8SponsorAChildStatus == "Approved"){ //Changing from approved
    $sql_delete = "DELETE FROM tbl_student_sponsored WHERE studentSponsoredFName = '$varfname' AND studentSponsoredLName = '$varlname'"; // TODO: USE UNIQUE IDENTIFIER
    setData($sql_delete);
  }
} else{
  echo("<script>
    alert('No student record found.');
    </script>");
}

if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['kcpe']) && !empty($_POST['gcontact']) && !empty($_POST['natID'])){
  $sql_update = "UPDATE tbl_student_class_8 SET studentClass8FName = '$varfname', studentClass8MName = '$varmname', studentClass8LName = '$varlname', studentClass8KCPEIndexNo = '$varkcpe', studentClass8Email = '$varemail', studentClass8Stream = '$varstream', studentClass8GuardianContact = '$vargcontact', studentClass8GuardianNatIdOrPassportNo = '$varnatID', studentClass8SponsorAChildStatus = '$varSponsorStatus', studentClass8SponsorAChildStatusRejectionMessage = '$varRejectReason' WHERE studentClass8ID = '$varStudentID'";
  setData($sql_update);
  echo("<script>
    window.location.href='../../studentDetails.php';
    alert('Student details updated.');
    </script>");
} else{
    echo("<script>
      window.location.href='../../studentDetails.php';
      alert('Please fill out all fields to proceed.');
      </script>");
    }
 ?>
