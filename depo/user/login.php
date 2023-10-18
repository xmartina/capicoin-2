<!DOCTYPE html>
<html>
<head>
    <title>Auth Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="login-css.css">
</head>
<body>

<div class="container">
    <div class="row py-5">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 px-3 rounded shadow">
            <h2 class="py-3">Login</h2>
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
            <div class="py-3"></div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery code to show/hide the second select based on the first select -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>
</html>
