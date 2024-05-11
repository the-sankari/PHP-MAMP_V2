<?php

/*
Write you php code here
Chocolate, Mints, Fudge, Bubble gum, Toffee, Jelly Beans
 */

$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffe', 'Jelly', 'Beans'];
$best = array_slice($best_sellers, 2, 3);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <p><?php $count = 1; foreach ($best as $candy) {
    echo $count . '. ' . $candy . '<br/>';
    $count++;
}?></p>
</body>

</html>