<?php
require 'header.php';

$search = $con->real_escape_string($_POST['search']);

$sql = "SELECT articles.*,users.name FROM articles
        JOIN users
        ON articles.user_id = users.id
        WHERE title
        LIKE '%$search%' ";

$rs = $con->query($sql);

if ($rs->num_rows == 0) {
    echo 'Found nothing here';
} else {
    echo '<ul>';

    while ($row = $rs->fetch_array()) {
        echo '
        <li>
            <a href="view.php?id=' . $row['id'] . '">' . $row['title'] . '</a>
            <small>(by ' . $row['name'] . ')</small>
        </li>
        ';
    }

    echo '</ul>';
}

require 'footer.php';
