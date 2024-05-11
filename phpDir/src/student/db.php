<?php
define("HOSTNAME", "db");
define("USERNAME", "root");
define("PASSWORD", "lionPass");
define("DATABASE", "crude_operation");

$connection = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if ($connection->connect_error) {
    die("Conection failed");
}
?>