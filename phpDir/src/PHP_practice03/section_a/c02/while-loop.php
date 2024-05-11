<?php
/* Write your code here */

$price_per_pack = 1.99;
$total = 0;
$amount = 1;
while ($amount <= 10) {
  $total += $price_per_pack;
  $amount++;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?=
/* Write your code here */
"<p>Total price: $total €</p>"
?>
  </p>
</body>

</html>