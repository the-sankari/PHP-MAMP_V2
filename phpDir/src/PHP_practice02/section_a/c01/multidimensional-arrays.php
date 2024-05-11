<?php

/*
Write you php code here

 */

$offers = [
    [
        'name' => 'Kit kat',
        'price' => 5,
        'stock' => 20,
    ],
    [
        'name' => 'Skittles',
        'price' => 10,
        'stock' => 15,
    ],
    [
        'name' => 'Lollipops',
        'price' => 8,
        'stock' => 20,
    ],
]

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>

  <?php

foreach ($offers as $candy) {
    foreach ($candy as $key => $values) {
        $capName = ucfirst($key);
        echo "<p> $capName  : $values</p>";
    }
}

?>


</body>

</html>