<?php
session_start();
require_once("../../../PHP/phpMethods.php");
$varStudentID = $_GET["studentDeleteID"];

$sql_delete = "DELETE FROM tbl_student_class_8 WHERE studentClass8ID = '$varStudentID'";
setData($sql_delete);
echo("<script>
  window.location.href='../../studentDetails.php';
  alert('Student deleted from database.');
  </script>");
 ?>
