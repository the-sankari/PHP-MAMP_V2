<?php
include 'db.php';
$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");

    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {

        header('Location: ' . $_SERVER['PHP_SELF']); // Redirect to the same page after successful update
        exit;
    } else {
        die("Deletion failed");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
  <script>
    function togglePassword(checkbox) {
      var passwords = document.querySelectorAll('.password');
      passwords.forEach(function(password) {
        password.type = checkbox.checked ? 'text' : 'password';
      });
    }
  </script>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Password</th>
      <th>Edit</th>
      <th>Delete</th>
      <th>Show Password</th>
    </tr>
  </thead>
  <tbody>
    <?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$username</td>";
        // Displaying password as password input field with class 'password'
        echo "<td><input type='password' class='password' value='$password' disabled></td>";
        // echo "<td><a href='edit.php?id=$id'>Edit</a></td>";
        echo "<td><form action='delete.php' method='post'>
                  <input type='hidden' name='id' value='$id'>
                  <input type='submit' value='Delete' name='delete' onclick=\"return confirm('Are you sure you want to delete this record?');\">
                  </form></td>";
        // Checkbox to toggle between showing and hiding the password
        echo "<td><input type='checkbox' onchange='togglePassword(this)'></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No users found</td></tr>";
}
?>
  </tbody>
</table>

</body>
</html>
