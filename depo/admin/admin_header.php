<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your database connection here
    $servername = "localhost";
    $username = "multistream6_capicoin_2";
    $password = "000000";
    $dbname = "multistream6_capicoin_2";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input
    $username = $_POST['username'];
    $sq = $_POST['sq'];
    $sa = $_POST['sa'];

    // Query to check user credentials (change the table and column names)
    $sql = "SELECT * FROM users WHERE username = '$username' AND sq = '$sq' AND sa = '$sa'";
    $result = $conn->query($sql);
//    $datas = $result->fetch(PDO::FETCH_ASSOC);
    // Check if a matching user is found
    if ($result->num_rows == 1) {
        // User is authenticated; create a session
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Redirect to a dashboard page
    } else {
        // Authentication failed; display an error message
        echo "Invalid username or Secret Question or Secret Answer";
    }

    // Close the database connection
    $conn->close();
}
?>
