<?php
session_start();
require_once("../../PHP/phpMethods.php");

$varEmail = $_POST['email'];
$varPassword = $_POST['password'];

verifyUser($varEmail,$varPassword);

 ?>
