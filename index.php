<?php require 'header.php'; ?>
<ul>
    <?php
    $sql = "SELECT articles.*, users.name
            FROM articles
            JOIN users
            ON articles.user_id = users.id 
            ORDER BY id DESC
            LIMIT 20";

    $rs = $con->query($sql);
    echo $con->error;
    if ($rs->num_rows == 0) {
        echo 'No Post';
    } else {
        while ($row = $rs->fetch_array()) {
            echo '
        <li>
            <a href="view.php?id=' . $row['id'] . '">' . $row['title'] . '</a>
            <small>(by ' . $row['name'] . ')</small>
        </li>
        ';
        }
    }
    ?>
</ul>


<?php
require 'footer.php';
?>