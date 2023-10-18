<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="login-css.css">
</head>
<body>
<h2>Login</h2>
<form action="dashboard.php" method="post">

    <div class="form-group">
        <label for="inputEmail">Email or Username</label>
        <input type="text" name="username_email" required class="form-control" id="inputEmail" placeholder="Email or Username">
    </div>
    <div class="form-group">
        <label for="inputPassword">Security Question:</label>
        <input type="text" name="security_question" required class="form-control" id="inputPassword" placeholder="Security Question">
    </div>
    <div class="form-group">
        <label for="inputPassword">Security Answer:</label>
        <input type="text" name="security_answer" required class="form-control" id="inputPassword" placeholder="Security Question">
    </div>
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary" name="login" value="Login">Sign in</button>
</form>

</body>
</html>
