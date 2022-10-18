<?php
session_start();
require_once("phpMethods.php");

$varName = $_POST['form_name'];
$varEmail = $_POST['form_email'];
$varPhone = $_POST['form_phone'];
$varSubject = $_POST['form_subject'];
$varMessage = $_POST['form_message'];

if(!empty($_POST['form_name']) && !empty($_POST['form_email']) && !empty($_POST['form_phone']) && !empty($_POST['form_subject']) && !empty($_POST['form_message'])){
  $sql_insert1 = "INSERT INTO tbl_feedback(name,email,phone,subject,message) VALUES('$varName','$varEmail','$varPhone','$varSubject','$varMessage')";
  setData($sql_insert1);
  echo("<script>
    window.location.href='../index.php';
    alert('Thank you for your feedback.');
    </script>");
} else{
    echo("<script>
      window.location.href='../contact.php';
      alert('Please fill out all fields to proceed.');
      </script>");
    }
 ?>
