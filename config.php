<?php
ob_start();
session_start();
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "forum_db"; 

$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
error_reporting(0);
?>