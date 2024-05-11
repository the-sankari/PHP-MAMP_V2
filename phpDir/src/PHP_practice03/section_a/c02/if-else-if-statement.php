<?php
/* Write your code here */
$stock = 0;
$coming_soon = false;
// $coming_soon = true;
if ($stock > 0) {
    $availibity = 'In Stock';
} else if ($stock <= 0) {
    $availibity = 'Sold out';
}else {
  $availibity = 'Coming soon...';
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
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