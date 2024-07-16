<?php
session_start();
$_SESSION["logged_in"] = false;
header('location: login.php');




?>