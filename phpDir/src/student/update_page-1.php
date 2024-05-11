<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM student WHERE id = $id ";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed". mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['update_students'])) {
    if (isset($_GET['id_new'])) {
        $id_new = $_GET['id_new'];
    }
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $age = $_POST['age'];

    if (!is_numeric($age) || $age < 0) {
        die("Age must be a positive integer.");
    }

    $stmt = $connection->prepare("UPDATE student SET first_name=?, last_name=?, age=? WHERE id=?");
    $stmt->bind_param("ssii", $f_name, $l_name, $age, $id_new);
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $age = $_POST['age'];
    $id_new = $_GET['id_new'];
    $stmt->execute();

    if (!$stmt) {
        die("Query failed". mysqli_error($connection));
    } else {
        header('location:index.php?update_msg=You have updated the data successfully.');
    }
    $stmt->close();
}

mysqli_close($connection);
?>

<?php include 'header.php';?>

<form action="update_page-1.php?id_new=<?php echo $id?>" method="post">
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" id="f_name" class="form-control" value="<?php echo htmlspecialchars($row['first_name'])?>">
    </div>
    <div class="form-group">
        <label for="l_name">Last Name</label>
        <input type="text" name="l_name" id="l_name" class="form-control" value="<?php echo htmlspecialchars($row['last_name'])?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" name="age" id="age" class="form-control" value="<?php echo htmlspecialchars($row['age'])?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
</form>

<?php include 'footer.php';?>