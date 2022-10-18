<?php
session_start();
require_once("phpMethods.php");

$varDonorName = $_POST['donorName'];
$varDonorEmail = $_POST['donorEmail'];
$varDonorContact = $_POST['donorContact'];
$varDonorPaymentMethod = $_POST['donorPaymentMethod'];

if(!empty($_POST['donorName']) && !empty($_POST['donorEmail']) && !empty($_POST['donorContact']) && !empty($_POST['donorPaymentMethod'])){
  $sql_insert1 = "INSERT INTO tbl_donor_payment(donorName,donorEmail,donorPhone,donorPaymentMethod) VALUES('$varDonorName','$varDonorEmail','$varDonorContact','$varDonorPaymentMethod')";
  setData($sql_insert1);
  echo("<script>
    window.location.href='https://www.paypal.com/donate/?hosted_button_id=DCGTC5EM27JTA';
    alert('Your information has been recorded. You will be prompted for your PayPal details on the next page.');
    </script>");
} else{
    echo("<script>
      window.location.href='../index.php';
      alert('Please fill out all fields to proceed.');
      </script>");
    }
 ?>
