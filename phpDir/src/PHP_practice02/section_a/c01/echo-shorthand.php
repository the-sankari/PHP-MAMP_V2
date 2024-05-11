<?php

/*
Write you php code here

 */

$name = 'Kit Kat';
$favorites = [
    "Reese's Peanut Butter Cups",
    "Snickers",
    "M&M's",
    "Kit Kat",
    "Twix",
    "Hershey's Chocolate Bars",
    "Skittles",
    "Starburst",
]
?>
<!DOCTYPE html>
<html>

<head>
  <title>Echo Shorthand</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>

  <div>
    <h3><?=
$name
?></h3>
    <?=
    $favorites[0];
$favorites[1];
$favorites[2];
$favorites[3];
$favorites[4];
$favorites[5];
?>
  </div>
</body>

</html>
