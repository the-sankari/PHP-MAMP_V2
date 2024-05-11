<?php
// Database host
$db_host = 'db';
$db_name = 'booksite';
$db_user = 'root';
$db_pass = 'lionPass';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die('Connection to database failed');
}
