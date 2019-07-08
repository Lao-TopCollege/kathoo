<?php
session_start();
include 'functions.php';
if (isLoggedIn()) {
    header('Location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Login</h1>
    <a href="index.php">Home</a>
    <form action="login_process.php" method="post">
        <div>
            <input type="text" name="email" placeholder="Enter Your Email">
        </div>

        <div>
            <input type="password" name="password" placeholder="Enter Password">
        </div>

        <div>
            <input type="submit" value="Login">
        </div>
    </form>
    <a href="register.php">Register</a>
</body>
</html>