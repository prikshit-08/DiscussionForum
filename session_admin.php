<?php
session_start();

//$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if(!isset($_SESSION['login_session'])||(($_SESSION['login_session'])!='Admin'))
{
header("Location: message.html");
}
error_reporting(0);
?>
