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
//    $security_question = $_POST['security_question'];
//    $security_answer = $_POST['security_answer'];

    $username_email = $connection->real_escape_string($username_email);
//    $security_question = $connection->real_escape_string($security_question);
//    $security_answer = $connection->real_escape_string($security_answer);

//    $query = "SELECT * FROM hm2_users WHERE (username = '$username_email' OR email = '$username_email') AND sq = '$security_question' AND sa = '$security_answer'";
    $query = "SELECT * FROM hm2_users WHERE (username = '$username_email' OR email = '$username_email')";
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

//form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $connection->real_escape_string($_SESSION['id']);
    $amount = $connection->real_escape_string($_POST['deposit_amount']);
    $ec_type = $connection->real_escape_string($_POST['ec_type']);

    if ($amount <= 0) {
        // JavaScript code to show the error message when the deposit amount is invalid
        echo '<script>
            window.onload = function() {
                var paragraph = document.getElementById("auth-error");
                paragraph.classList.remove("d-none");
            }
        </script>';
    } elseif($ec_type == ""){
        echo '<script>
            window.onload = function() {
                var paragraph = document.getElementById("addressSelectError");
                paragraph.classList.remove("d-none");
            }
        </script>';
    }
    else {
        // Valid deposit amount
        $type_id = 4; // Replace with your logic for obtaining the wallet type
        $ec = 1006;
        $fields = "N;";
        $trans_status = "new";

        $query = "INSERT INTO hm2_pending_deposits (ec, fields, user_id, amount, type_id, date, status) 
                  VALUES ('$ec', '$fields', '$user_id', '$amount', '$type_id', NOW(), '$trans_status')";

        if ($connection->query($query) === TRUE) {
            header('Location: deposit-stat.php');
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initially hide all wallet addresses
            $(".walletAddress1, .walletAddress2, .walletAddress3").addClass("d-none");

            // Handle the select change event
            $("#inlineFormCustomSelect").change(function() {
                var selectedValue = $(this).val();
                $(".walletAddress1, .walletAddress2, .walletAddress3").addClass("d-none"); // Hide all

                if (selectedValue === "1") {
                    $(".walletAddress1").removeClass("d-none");
                } else if (selectedValue === "2") {
                    $(".walletAddress2").removeClass("d-none");
                } else if (selectedValue === "3") {
                    $(".walletAddress3").removeClass("d-none");
                }
            });
        });
    </script>

</head>
<body>
