<?php
require 'header.php';
if ($_POST) {

    $email = $con->real_escape_string($_POST['email']);

    $password = $con->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' ";

    $rs = $con->query($sql);

    if ($rs->num_rows == 0) {
        echo 'error login';
    } else {
        $row = $rs->fetch_array();
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['login'] = TRUE;
            if ($row['role'] == 1) {
                $_SESSION['admin'] = TRUE;
            }
            header('Location: index.php');
        } else {
            echo 'error login';
        }
    }
} else {
    header('Location: index.php');
}

require 'footer.php';
