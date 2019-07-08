<?php if (isLoggedIn()) : ?>
    <a href="index.php">Home</a>
    |
    <a href="new.php">New Post</a>
    |
    <a href="profile.php">Profile</a>
    |
    <?php if (isAdmin()) : ?>

        <a href="admin/index.php">Admin</a>
        |
        <a href="admin/users.php">Users</a>
        |
        <a href="admin/posts.php">Posts</a>
        |
    <?php endif; ?>
    <a href="logout.php">Logout</a>

<?php else : ?>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
<?php endif; ?>