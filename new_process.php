<?php
require 'header.php';
checkLogIn();
if ($_POST) {


    $title = $con->real_escape_string($_POST['title']);
    $content = $con->real_escape_string($_POST['content']);
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO articles (title, content, user_id) VALUES('$title', '$content', $user_id)";

    if ($con->query($sql)) {
        $sql = "SELECT MAX(id) as max_id FROM articles";
        $rs = $con->query($sql);
        $row = $rs->fetch_array();
        $id = $row['max_id'];

        header('Location: view.php?id=' . $id);
    } else {
        echo 'Error Saved';
        echo '<a href="new.php">Back</a>';
    }
} else {
    header('Location:index.php');
}
require 'footer.php';
