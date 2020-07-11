<?php
session_start();
unset($_SESSION["login_session"]);
unset($_SESSION["login_session_id"]);
unset($_SESSION['url']);
header("Location:index.php");
?>