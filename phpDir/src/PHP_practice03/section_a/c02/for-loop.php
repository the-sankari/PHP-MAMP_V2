<?php
/* Write your code here */
$price_per_pack = 1.99;
$total = 0;
for ($i = 0; $i < 10; $i++) {
    $total += $price_per_pack;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
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