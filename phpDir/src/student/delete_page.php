<?php include 'db.php';?>
<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM student WHERE id=$id";
    $result = mysqli_query($connection,$query);
    if (!$result) {
        die("Failed: " . mysqli_error($connection));
    }else {
        header('location:index.php?delete_msg=Your data has been deleted.');
    }
}

?>
