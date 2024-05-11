<?php
include 'db.php';
$username = $password = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {

        if (empty($_POST['username']) && empty($_POST['password'])) {
            echo "Password and username can not be empty";
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, password)VALUES(?,?)");

            $stmt->bind_param("ss", $username, $hashed_pass);

            if ($stmt->execute()) {
                header("Location: " . $_SERVER["PHP_SELF"]);
                exit;
            } else {
                die("Query insertion failed");
            }
            $stmt->close();
        }

    }

}
