<!-- admin_login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- admin_login.php -->
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-box {
        background-color: #ffffff;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    .login-header {
        background-color: #3498db; /* Updated color to match admin dashboard */
        color: #ffffff;
        padding: 20px;
    }

    .login-header h2 {
        margin: 0;
    }

    .login-form {
        padding: 20px;
        box-sizing: border-box;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        text-align: left;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: #3498db; /* Updated color to match admin dashboard */
        color: #ffffff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #2980b9; /* Darker shade on hover */
    }

    .error {
        color: red;
        margin-top: 10px;
    }
</style>

</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <h2>Admin Login</h2>
        </div>
        <div class="login-form">
        <form action="/app/adminlogin" method="post">
                <label for="admin_name">Admin Email:</label>
                <input type="admin_name" name="admin_name" value="<?php echo set_value('admin_name'); ?>" required>
                <label for="admin_password">Password:</label>
                <input type="password" name="admin_password" required>
                <button type="submit">Login as Admin</button>   
        </div>
    </div>
</body>
</html>
