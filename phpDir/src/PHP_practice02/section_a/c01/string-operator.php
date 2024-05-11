<?php

/*
Write you php code here

 */
$customer_name = 'Mr. James';
$greetings = 'Thank you.';
?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
<p> <?php echo "$customer_name's order"?></p>
<p><?php echo $greetings .' '. $customer_name?></p>
</body>

</html>
