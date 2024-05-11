<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add_book"])) {

        if (
            isset($_POST['title']) &&
            isset($_POST['description'])&&
            isset($_POST['author']) &&
            isset($_POST['publishing_year']) &&
            isset($_POST['genre'])
        ) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $author = $_POST['author'];
            $publishing_year = (int) $_POST['publishing_year']; // cast to integer
            $genre = $_POST['genre'];

            if (empty($title) || empty($author) || empty($genre) || empty($publishing_year) || empty($description)) {
                // input validation
                die('Please fill in all required fields.');
                header('location:index.php?insert_msg=Please fill in all required fields');
            }

            $stmt = $conn->prepare("INSERT INTO books (title,description, author, publishing_year,genre) VALUES (?, ?, ?, ?, ?)");
            if (!$stmt) {
                echo "Prepare failed: " . $conn->error;
            }
            $stmt->bind_param("sssis", $title,$description, $author, $publishing_year,$genre );

            if ($stmt->execute()) {
                // success message
                header('location:index.php?insert_msg=Your data has been added successfully');
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }
}

?>