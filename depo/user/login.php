<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
<h2>Login</h2>
<form action="process_login.php" method="post">
    <label for="username_email">Username or Email:</label>
    <input type="text" name="username_email" required><br><br>

    <label for="security_question">Security Question:</label>
    <input type="text" name="security_question" required><br><br>

    <label for="security_answer">Security Answer:</label>
    <input type="text" name="security_answer" required><br><br>

    <input type="submit" name="login" value="Login">
</form>
</body>
</html>
