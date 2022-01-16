<?php
session_start();
include ("connection.php");
$_SESSION['add']=="";
session_unset();
Header("location:login.php");
 ?>
