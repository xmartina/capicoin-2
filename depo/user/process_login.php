<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

function dbConnect(){
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
dbConnect();

if (isset($_POST['login'])) {
    $username_email = $_POST['username_email'];
    $security_question = $_POST['security_question'];
    $security_answer = $_POST['security_answer'];

    $username_email = $mysqli->real_escape_string($username_email);
    $security_question = $mysqli->real_escape_string($security_question);
    $security_answer = $mysqli->real_escape_string($security_answer);

    $query = "SELECT * FROM hm2_users WHERE (username = '$username_email' OR email = '$username_email') AND sq = '$security_question' AND sa = '$security_answer'";
    $result = $mysqli->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row['id'];
        $_SESSION['username'] = $row['username'];
        $authenticatedUserID = $row['id'];
        $_SESSION['user_id'] = $authenticatedUserID;
        $userID = $_SESSION['user_id'];

        echo "User ID: $user_id";
        sleep(9);
        header('Location: dashboard.php' );
        exit();
    } else {
        echo "Login failed. Please check your credentials.";
    }
}

$connection->close();
?>
