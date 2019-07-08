<?php
include 'dbconfig.php';

$email = $con->real_escape_string($_POST['email']);

$sql = "SELECT email FROM users WHERE email = '$email' ";

$rs = $con->query($sql);

if ($rs->num_rows == 1) {
    echo '1';
}
