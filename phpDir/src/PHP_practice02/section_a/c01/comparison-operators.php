<?php

/*
Write you php code here

 */

$stock_quantity = 20;
$order_quantity = 21;
// $msg = true;
if ($order_quantity <= $stock_quantity) {
    $msg = true;
} else {
    $msg = false;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p><?=$msg?></p>

</body>

</html>
