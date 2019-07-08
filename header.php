<?php
session_start();
include 'dbconfig.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/custom.js"></script>
</head>

<body>
    <h1>News Today</h1>
    <h3>Hi, <?php echo getUserName(); ?></h3>
    <?php require 'menu.php'; ?>
    <form action="search.php" method="post">
        <input type="text" name="search" placeholder="Search Topic"> <input type="submit" value="Search">
    </form>
    <hr>