<?php
$rootDir = __DIR__;
//require_once ( "../depo/inc/config.php");
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check user credentials (change the table and column names)
    $sql = "SELECT * FROM hm2_users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if a matching user is found
    if ($result->num_rows == 1) {
        // User is authenticated; create a session
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Redirect to a dashboard page
    } else {
        // Authentication failed; display an error message
        echo "Invalid username or password.";
    }

    // Close the database connection
    $conn->close();
}
?>
