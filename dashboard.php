<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Smart E-Commerce</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 50px;
        }
        .dashboard-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        h1 {
            color: #333;
        }
        .logout-btn {
            padding: 10px 20px;
            background: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-btn:hover {
            background: #bb2d3b;
        }
        .content {
            padding: 20px 0;
        }
        .nav-links {
            margin-top: 30px;
        }
        .nav-links a {
            display: inline-block;
            margin-right: 15px;
            padding: 10px 20px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .nav-links a:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="header">
            <h1>
                Welcome,
                <?php 
                echo isset($_SESSION['user']['username']) ? $_SESSION['user']['username'] : (isset($_SESSION['user']['fullname']) ? $_SESSION['user']['fullname'] : 'User'); 
                ?>!
            </h1>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
        <div class="content">
            <p>This is your dashboard!</p>
        </div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="product.php">Products</a>
        </div>
    </div>
</body>
</html>