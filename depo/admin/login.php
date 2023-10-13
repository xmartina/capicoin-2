<?php
require_once ('admin_header.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login From | Pending Deposit</title>
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
    <div class="position-relative login_relative">
        <div class="position-absolute login_absolute w-50">
            <div class="py-4">
                <h2>Admin Login</h2>
                <p>Welcome to Admin, login to your admin dashboard using your admin details</p>
            </div>
            <div class="py-5">
                <form action="">
                    <div class="admin_form">
                        <label for="user_name">User Name
                            <input type="text" class="admin_form_input" placeholder="e.g user@admin.com">
                        </label>

                        <label for="">Password
                            <input type="password" class="admin_form_input" placeholder="login password">
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>