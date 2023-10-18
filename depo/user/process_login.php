<?php
session_start();

// Sample user data (you should replace this with your database authentication system)
$hostname = "your_database_hostname";
$username = "your_database_username";
$password = "your_database_password";
$database = "your_database_name";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['login'])) {
    $username_email = $_POST['username_email'];
    $security_question = $_POST['security_question'];
    $security_answer = $_POST['security_answer'];

    // Prevent SQL injection (you should use prepared statements)
    $username_email = $mysqli->real_escape_string($username_email);
    $security_question = $mysqli->real_escape_string($security_question);
    $security_answer = $mysqli->real_escape_string($security_answer);

    // Query the database to authenticate the user
    $query = "SELECT * FROM hm2_users WHERE (username = '$username_email' OR email = '$username_email') AND sq = '$security_question' AND sa = '$security_answer'";
    $result = $mysqli->query($query);

    if ($result && $result->num_rows > 0) {
        // Authentication successful
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username']; // Store the user's identity in a session variable
        header('Location: dashboard.php'); // Redirect to the dashboard
        exit();
    } else {
        echo "Login failed. Please check your credentials.";
    }
}

// Close the database connection
$mysqli->close();
?>
