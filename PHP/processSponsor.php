<?php
session_start();
require_once("phpMethods.php");

$varName = $_POST['form_name'];
$varGender = $_POST['form_gender'];
$varEmail = $_POST['form_email'];
$varSponsorMethodOfInformation = $_POST['form_subject'];

if(!empty($_POST['form_name']) && !empty($_POST['form_gender']) && !empty($_POST['form_email']) && !empty($_POST['form_subject']) && !empty($_POST['form_natID'])){
  $sql="SELECT * FROM tbl_sponsor where sponsorEmail = '".$varEmail."'";
  $result = getData($sql);
    if(!empty($result)){
      echo("<script>
        window.location.href='../index.php';
        alert('You are already a member of the Sponsor-A-Child program.');
        </script>");
    } else{
      $sql_insert1 = "INSERT INTO tbl_sponsor(sponsorName,sponsorGender,sponsorEmail,sponsorMethodOfInformation) VALUES('$varName','$varGender','$varEmail','$varSponsorMethodOfInformation')";
      setData($sql_insert1);
      echo("<script>
        window.location.href='../index.php';
        alert('Thank you for signing up to the Sponsor-A-Child program.');
        </script>");
    }
} else{
    echo("<script>
      window.location.href='../index.php';
      alert('Please fill out all fields to proceed.');
      </script>");
    }
 ?>
