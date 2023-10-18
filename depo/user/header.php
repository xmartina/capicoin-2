<?php
require_once ('process_login.php');
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to the login page if the user is not authenticated
    exit();
}

// Display the dashboard content here

////get user data
//// Get the username from the session
//$username = $_SESSION['username'];
//
//// Query the database to retrieve the user ID
//$query = "SELECT id FROM hm2_users WHERE username = '$username'";
//$result = $mysqli->query($query);
//
//if ($result && $result->num_rows > 0) {
//    $row = $result->fetch_assoc();
//    $userID = $row['id'];
//    echo "User ID for $username is $userID.";
//} else {
//    echo "User not found in the database.";
//}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>