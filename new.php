<?php
require 'header.php';
checkLogIn();
?>

<a href="index.php">Back</a>

<form action="new_process.php" method="post">
    <div>
        <div>
            <label for="title">Title</label><br>
            <input type="text" name="title" placeholder="Enter Title">
        </div>

        <div>
            <label for="content">Content</label><br>
            <textarea name="content" placeholder="Enter Content" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <input type="submit" value="Post">
        </div>
    </div>
</form>

<?php require 'footer.php'; ?>