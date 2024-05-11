<?php
require_once 'server.php';
header('Localhost: ' . $_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDE APP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>User Management</h1>
    </header>
    <main>

    <div class="form-container">

    <form action="index.php" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
    </div>

    <div class="table-container">
        <table class="display-data">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
        <?php if ($result->num_rows > 0): ?>
        <?php foreach ($result as $row): ?>
        <tr data-id="<?=$row['id']?>">
          <td><?=$row["id"]?></td>
          <td><?=htmlspecialchars($row["username"])?></td>
          <td>••••••••</td>
          <td class='actions'>
            <!-- Buttons for editing and deleting -->
            <button onclick="toggleEditMode(this.parentNode.parentNode, true)">Edit</button>
            <button onclick="deleteRow(<?=$row['id']?>)">Delete</button>
          </td>
        </tr>
        <?php endforeach;?>
        <?php else: ?>
        <tr>
          <td colspan='4'>No results</td>
        </tr>
        <?php endif;?>
      </tbody>

        </table>
    </div>
    </main>
<script src="script.js"></script>
</body>
</html>
