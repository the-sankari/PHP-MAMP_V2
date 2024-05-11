<?php
/*
Write your code here
 */
$stock = 10;
// $availibity = ($stock > 0) ? 'In stock' : 'Sold out';
if ($stock > 0) {
    $availibity = 'In Stock';
} else {
    $availibity = 'Sold out';

}

?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?=
/* Write your code here */
"<p>$availibity</p>"
?>
</body>

</html>