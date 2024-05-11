<?php

/*
Write you php code here

 */
$name = 'Student';

$candyName = 'Aero';
$price = 10;

if ($name === 'Student') {
    $price += 2;
} else {
    $price;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<h1>The Candy Store</h1>
<h2>Welcome to <?php echo $candyName; ?></h2>
<p>The cost of your candy is <?php echo $price ?>€ per pack</p>

</body>
</html>