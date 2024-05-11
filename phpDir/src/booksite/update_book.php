<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM books WHERE id = $id ";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed" . mysqli_error($conn));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['update_book'])) {
    if (isset($_GET['id_new'])) {
        $id_new = $_GET['id_new'];
    }
    $title = $_POST["title"];
    $author = $_POST["author"];
    $publishing_year = $_POST["publishing_year"];
    $genre = $_POST["genre"];
    $description = $_POST["description"];

    $stmt = $conn->prepare("UPDATE books SET title=?, description=?, author=?, publishing_year=?, genre=? WHERE id=?");
    $stmt->bind_param("sssisi", $title, $description, $author, $publishing_year, $genre, $id_new);

    $title = $_POST["title"];
    $author = $_POST["author"];
    $publishing_year = $_POST["publishing_year"];
    $genre = $_POST["genre"];
    $description = $_POST["description"];
    $id_new = $_GET['id_new'];
    $stmt->execute();

    if (!$stmt) {
        die("Query failed" . mysqli_error($conn));
    } else {
        header('location:index.php?update_msg=You have updated the data successfully.');
    }
    $stmt->close();
}

mysqli_close($conn);
?>

<?php include 'header.php';?>

<form action="update_book.php?id_new=<?php echo $id ?>" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?php echo htmlspecialchars($row['title']) ?>">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="form-control" value="<?php echo htmlspecialchars($row['description']) ?>">
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" id="author" class="form-control" value="<?php echo htmlspecialchars($row['author']) ?>">
    </div>
    <div class="form-group">
        <label for="publishing_year">Publishing year</label>
        <input type="text" name="publishing_year" id="publishing_year" class="form-control" value="<?php echo htmlspecialchars($row['publishing_year']) ?>">
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" class="form-control" value="<?php echo htmlspecialchars($row['genre']) ?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_book" value="UPDATE">
</form>

<?php include 'footer.php';?>