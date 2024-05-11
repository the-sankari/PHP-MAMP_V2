<?php
include 'db.php';

// Fetch user IDs from the database
$sql = "SELECT id FROM users";
$result = $conn->query($sql);

if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['id'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute SQL statement
        $stmt = $conn->prepare("UPDATE users SET username=?, password=? WHERE id=?");
        $stmt->bind_param("ssi", $username, $hashed_pass, $id);

        // Check if update was successful
        if ($stmt->execute()) {
            header('Location: ' . $_SERVER['PHP_SELF']); // Redirect to the same page after successful update
            exit;
        } else {
            die("Update failed");
        }
        $stmt->close();
    } else {
        echo "Username, password, and ID must be provided";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP CRUD App</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="username"> Username </label>
        <input type="text" name="username">
        <label for="password"> Password </label>
        <input type="password" name="password">
        <select name="id" id="">
            <?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
} else {
    echo "<option value=''>No users found</option>";
}
?>
        </select>
        <input type="submit" name="submit" value="UPDATE">

    </form>
</body>

</html>
