<?php
/*
Write your code here
 */
$candy = [
    'Toffe' => 2.99,
    'Mints' => 1.99,
    'Fudge' => 3.99,
]

?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>

    <?php
/*
Write your code here
 */
foreach ($candy as $name => $price) {
    $cap = ucfirst($name);
    echo "<tr><td>$cap</td><td>$price</td></tr>";
    // echo "<td>$price</td><br> ";
}
?>


  </table>
</body>

</html>