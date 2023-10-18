<?php
require_once('process_login.php');
//session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to the login page if the user is not authenticated
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
