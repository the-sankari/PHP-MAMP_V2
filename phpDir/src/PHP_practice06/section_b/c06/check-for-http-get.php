<?php include 'includes/header.php';?>

<?php
/* Write your PHP code here
Overall idea here is to instead of POST in prev. practice
how would you do this with HTTP GET

Step 1: Use null-coalescing operator to check if $_GET superglobal array
has a value for the key sent. If it does, you can store its value in some variable
If it does not, it should store a blank string.

Step 2: Using if condition, you can check the value in variable is search.
If it is, the form should be then sent via HTTP GET and the search term is displayed.
"You searched for ..."  (replace ... with term user searched for)

Step 3: Otherwise, simply display the form

 */
$input = '';

// if ($_SERVER["REQUEST_METHOD"] == 'GET') {

//     (isset($input)) ?  $input = $_GET['input'] : '';
// } 
($_SERVER["REQUEST_METHOD"] == 'GET') ? ((isset($input)) ?  $input = $_GET['input'] : '') : '';
?>

<form method="GET" action="check-for-http-get.php" >
  <input type="text" name="input" placeholder="Search here">
  <input type="submit" value="Search">
</form>
<p>You searched for <span style="color: red;"><?=$input?></span></p>

<?php include 'includes/footer.php';?>