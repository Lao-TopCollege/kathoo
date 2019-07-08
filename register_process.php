<?php
require 'header.php';

$name = $con->real_escape_string($_POST['name']);

$email = $con->real_escape_string($_POST['email']);

$password = $con->real_escape_string($_POST['password']);

$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO 
        users (email, password, name) 
        VALUES('$email', '$password', '$name')";

if ($con->query($sql)) {
    echo '<p>You are registered</p>';
    echo '<a href="login.php">Login</a>';
}

require 'footer.php';
