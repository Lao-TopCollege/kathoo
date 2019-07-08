<?php require 'header.php'; ?>

<a href="index.php">Back</a>

<?php
$id = $con->real_escape_string($_GET['id']);
$sql = "SELECT articles.*, users.name 
        FROM articles 
        JOIN users 
        ON articles.user_id = users.id
        WHERE articles.id = $id";

$rs = @$con->query($sql);

$row = $rs->fetch_array();

echo '<div class="block">';

echo '<h2 class="title">' . $row['title'] . '</h2>';


echo '<div class="content">' . $row['content'] . '</div>';

echo '<hr/>';
echo '<small class="date">
        created: ' . $row['created_at'] .
    ' | updated: ' . $row['updated_at'] .
    ' | posted by: ' . $row['name'] .
    '</small>';

if (checkOwner($row['user_id'])) {
    echo '<br><small><a href="edit.php?id=' . $id . '">Edit</a></small>';
}
echo '</div>';
?>


<?php require 'footer.php'; ?>