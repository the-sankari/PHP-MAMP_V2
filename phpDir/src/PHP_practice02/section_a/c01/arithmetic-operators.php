<?php

/*
Write you php code here

 */

$amount = 3;
$price = 5;
$tax = 20;

$totalPrice = ($amount * $price);
$totalAmount =$totalPrice + $totalPrice * .2;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <div><?php
echo "Number of candies $amount € <br/>";
echo "Price of each candy $price €<br/>";
echo "Tax amount  $tax %<br/>";
echo "Total price:  $totalAmount € for $amount candies<br/>";

?></div>

</body>

</html>
