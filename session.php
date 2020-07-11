<?php
session_start();

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if(!isset(($_SESSION['login_session']))&&!isset(($_SESSION['login_session_id'])))
{
header("Location: login.php");
}
error_reporting(0);
?>
