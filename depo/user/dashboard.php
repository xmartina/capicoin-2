<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to the login page if the user is not authenticated
    exit();
}

// Display the dashboard content here
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Welcome to the Dashboard, <?= $_SESSION['username'] ?></h2>
<!-- Add dashboard content here -->
<a href="logout.php">Logout</a>
</body>
</html>
