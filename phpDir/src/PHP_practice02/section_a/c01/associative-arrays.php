<?php

/* 
  Write you php code here

   */

   $nutriotion = [
    'fat' => 12,
    'sugar' => 5,
    'salt' => 0.01
   ]

   

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>Fat: <?php echo $nutriotion['fat']?>%</p>
  <p>Sugar: <?php echo $nutriotion['sugar']?>%</p>
  <p>Salt: <?php echo $nutriotion['salt']?>%</p>

</body>

</html>