<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'xxx';
$con = new mysqli($host, $user, $password, $db) or die('Error Connection');
$con->set_charset('utf8');
