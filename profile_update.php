<?php

require 'header.php';
checkLogIn();
if ($_POST) {

    $id = $_SESSION['user_id'];

    $name = $con->real_escape_string($_POST['name']);

    $old_password = $con->real_escape_string($_POST['old_password']);

    if ($old_password != "") {

        $sql = "SELECT password FROM users WHERE id = $id";

        $rs = $con->query($sql);

        $row = $rs->fetch_array();

        if (password_verify($old_password, $row['password'])) {

            $new_password = $con->real_escape_string($_POST['new_password']);

            $password = password_hash($new_password, PASSWORD_DEFAULT);

            $sql = "UPDATE users 
                SET 
                name = '$name', 
                password = '$password' 
                WHERE id = $id";
        }
    } else {
        $sql = "UPDATE users 
            SET 
            name = '$name'
            WHERE id = $id";
    }

    if ($con->query($sql)) {
        echo '<p>User updated</p>';
        echo '<a href="profile.php">Back</a>';
    }
}


require 'footer.php';
