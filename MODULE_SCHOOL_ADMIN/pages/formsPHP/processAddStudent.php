<?php
session_start();
require_once("../../../PHP/phpMethods.php");

$varfname = $_POST['fname'];
$varmname = $_POST['mname'];
$varlname = $_POST['lname'];
$varkcpe = $_POST['kcpe'];
$varemail = $_POST['email'];
$varstream = $_POST['stream'];
$vargcontact = $_POST['gcontact'];
$varnatID = $_POST['natID'];

if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['kcpe']) && !empty($_POST['gcontact']) && !empty($_POST['natID'])){
  $sql="SELECT * FROM tbl_student_class_8 where studentClass8Email = '".$varemail."'";
  $result = getData($sql);
    if(!empty($result)){
      echo("<script>
        window.location.href='../forms/addStudent.php';
        alert('This student is already registered.');
        </script>");
    } else{
      $sql_insert1 = "INSERT INTO tbl_student_class_8(studentClass8FName,studentClass8MName,studentClass8LName,studentClass8KCPEIndexNo,studentClass8Email,studentClass8Stream,studentClass8GuardianContact,studentClass8GuardianNatIdOrPassportNo) VALUES('$varfname','$varmname','$varlname','$varkcpe','$varemail','$varstream','$vargcontact','$varnatID')";
      setData($sql_insert1);
      echo("<script>
        window.location.href='../forms/addStudent.php';
        alert('Student successfully registered.');
        </script>");
    }
} else{
    echo("<script>
      window.location.href='../forms/addStudent.php';
      alert('Please fill out all fields to proceed.');
      </script>");
    }
 ?>
