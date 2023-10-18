<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

function dbConnect()
{
    $hostname = "localhost";
    $username = "multistream6_capicoin_2";
    $password = "000000";
    $database = "multistream6_capicoin_2";

    $mysqli = new mysqli($hostname, $username, $password, $database);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    return $mysqli;
}

$connection = dbConnect();
$user_id = null;

if (isset($_POST['login'])) {
    $username_email = $_POST['username_email'];
    $security_question = $_POST['security_question'];
    $security_answer = $_POST['security_answer'];

    $username_email = $connection->real_escape_string($username_email);
    $security_question = $connection->real_escape_string($security_question);
    $security_answer = $connection->real_escape_string($security_answer);

    $query = "SELECT * FROM hm2_users WHERE (username = '$username_email' OR email = '$username_email') AND sq = '$security_question' AND sa = '$security_answer'";
    $result = $connection->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $user_id; // Store the user's ID in the session
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Login failed. Please check your credentials.";
    }
}
$userID = $_SESSION['id'];
if (!isset($_SESSION['id'])) {
    header('Location: login.php'); // Redirect to the login page if the user is not authenticated
    exit();
}

//form sbmition
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $connection->real_escape_string($_SESSION['id']);
    $amount = $connection->real_escape_string($_POST['deposit_amount']);

//    check deposit amount
        if($amount == 0 ){

        }

//    $type_id = $connection->real_escape_string($_POST['wallet_type']); // Add the name attribute to the select element
    $type_id = 4;
    // Insert data into the database
    $query = "INSERT INTO hm2_pending_deposits (user_id, amount, type_id, date, status) 
              VALUES ('$user_id', '$amount', '$type_id', NOW(), 'processing')";

    if ($connection->query($query) === TRUE) {
        // Data inserted successfully
        echo "Deposit successfully recorded.";
    } else {
        // Error occurred
        echo "Error: " . $query . "<br>" . $connection->error;
    }
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
