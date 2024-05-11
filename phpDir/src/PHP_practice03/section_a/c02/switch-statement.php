<?php
/* Write your code here */

$day = 'Thursday';
switch ($day) {
    case 'Monday':
        $msg = 'Get 20% off chocolates';
        break;
    case 'Tuesday':
        $msg = 'Get 20% off mints';
        break;
    default:
        $msg = "Buy three packs, get one free.";
        break;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?=
/* Write your code here */
"<p>$msg</p>"

?>
</body>

</html>