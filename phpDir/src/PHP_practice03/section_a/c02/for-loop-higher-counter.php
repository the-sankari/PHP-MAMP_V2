<?php
/* Write your code here */
$price_per_pack = 1.99;
$total = 0;
$min_item = 10;
$max_item = 100;
for ($i = $min_item; $i <= $max_item; $i++) {
    $total += $price_per_pack;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?=
/* Write your code here */
"<p>Total price: $total €</p>"

?>
  </p>
</body>

</html>