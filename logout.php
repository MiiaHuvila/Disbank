<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["user_login"]);
header("Location:login.php");
?>

