<?php session_start();
unset($_SESSION['username']);
unset($_SESSION['logged_in']);
header('Location: ../index.php');
die();
