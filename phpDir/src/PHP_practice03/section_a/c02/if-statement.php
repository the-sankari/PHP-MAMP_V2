<?php
/* Write your code here */
$user_name = 'John Doe';
$greeting = 'Welcome, ';

?>
<!DOCTYPE html>
<html>

<head>
  <title>if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<h1>The Candy Store</h1>
<?php
/* Write your code here */
if (!empty($user_name)) {
  echo $greeting . $user_name;
}
?>
</body>

</html>