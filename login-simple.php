<?php
// Super simple login page - no database stuff first
session_start();
$error = "";

// First, just test with hardcoded admin to make sure it works
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == "admin" && $password == "1234") {
        $_SESSION['user'] = array('username' => 'admin', 'fullname' => 'Admin User');
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid login! Try admin / 1234";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            padding: 50px;
        }
        .login-box {
            background: white;
            padding: 30px;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 { text-align: center; }
        .error { color: red; margin-bottom: 15px; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { width: 100%; padding: 10px; background: #667eea; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Simple Login</h2>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST">
            <label>Username:</label>
            <input type="text" name="username" value="admin">
            <label>Password:</label>
            <input type="password" name="password" value="1234">
            <button type="submit">Login</button>
        </form>
        <p style="text-align: center; margin-top: 20px;">
            <small>Username: admin | Password: 1234</small>
        </p>
    </div>
</body>
</html>
