<?php
session_start();
unset($_SESSION['user']);
$_SESSION['message'] = 'logout';
header('Location: ../index.php');