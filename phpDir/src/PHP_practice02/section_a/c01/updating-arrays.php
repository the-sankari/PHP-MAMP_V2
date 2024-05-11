<?php

/*
Write you php code here
<p>Fat: <?php echo $nutrition['fat']?>%</p>
<p>Sugar: <?php echo $nutrition['sugar']?>%</p>
<p>Salt: <?php echo $nutrition['salt']?>%</p>
<p>Fiber: <?php echo $nutrition['fiber']?>%</p>
 */
$nutrition = [
    'fat' => 12,
    'sugar' => 5,
    'salt' => 0.01,
];

$nutrition['fat'] += 2;

$nutrition['fiber'] = 3;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p><?php foreach ($nutrition as $nName => $value) {
    echo ucfirst($nName) . ": $value% <br/>";
}?></p>



</body>

</html>