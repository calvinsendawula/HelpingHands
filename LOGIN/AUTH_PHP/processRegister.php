<?php
session_start();
require_once("../../PHP/phpMethods.php");

$varName = $_POST['fullname'];
$varEmail = $_POST['email'];
$varPassword = $_POST['password'];

$varRoleName = 'Donor';

// System Admin        School Admin         Donor       Class 8 Candidate           High School Student

$hashedPass = password_hash($varPassword,PASSWORD_DEFAULT);

if(!empty($_POST['email'])){
  if(!empty($_POST['password'])){
    $sql="SELECT * FROM tbl_user where email = '".$varEmail."'";
    $result = getData($sql);
    if(!empty($result)){
      echo("<script>
        window.location.href='../AUTH/register.php';
        alert('This email account already exists. Please login instead or register with another account.');
        </script>");
    } else{
      /*$sql_insert1 = "INSERT INTO tbl_role(roleName) VALUES('$varRoleName')";
      setData($sql_insert1);*/

      $sql2="SELECT * FROM tbl_role WHERE roleName = '".$varRoleName."'";
      $result2 = getData($sql2);
      if(!empty($result2)){
        $varRoleID = $result2["roleID"];
        $varRoleName = $result2["roleName"];
        //echo($varRoleName." Role ID => ".$varRoleID);
      } else{
        echo("<script>
          window.location.href='../AUTH/register.php';
          alert('Error fetching role information.');
          </script>");
      }

      $sql_insert2 = "INSERT INTO tbl_user(rolename,name,email,password,roleID) VALUES('$varRoleName','$varName','$varEmail','$hashedPass','$varRoleID')";
      setData($sql_insert2);
      echo("<script>
        window.location.href='../AUTH/login.php';
        alert('Thank you for signing up. You will now be redirected to the login page.');
        </script>");
    }
  }
} else{
    echo("<script>
      window.location.href='../AUTH/register.php';
      alert('Please check your info and try again.');
      </script>");
    }
 ?>
