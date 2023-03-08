<?php
session_start();
require_once('validuser.php');
$_SESSION['ruha']="";
session_destroy();
header("Location:login.php");

?>