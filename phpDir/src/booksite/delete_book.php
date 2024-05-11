<?php
include 'db.php';

if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['title']) && !empty($_GET['title'])) {
    $id = $_GET["id"];
    $title = $_GET['title'];

    $stmt = $conn->prepare("DELETE FROM books WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    if (!$conn->error) {
        header('location:index.php?delete_msg=' . urlencode($title) . ' Book has been deleted.');
    } else {
        die("Failed: " . mysqli_error($conn));
    }
} else {
    echo "ID or title is not set or empty";
}

$conn->close();
