<?php
$host = 'db';
$db_name = 'loginApp';
$db_user = 'root';
$db_pass = 'lionPass';

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
?>