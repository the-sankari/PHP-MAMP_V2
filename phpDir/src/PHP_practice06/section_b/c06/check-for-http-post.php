<?php include 'includes/header.php';?>

<?php
/* Write PHP Code here
Overall idea here is to check if a form has been submitted

Step 1: Use if statement to check $_SERVER superglobal array to see if the key called
REQUEST_METHOD has a value of POST

Step 2: If it does, the search form has to be sent via HTTP POST,
and a messemail should be displayed like this:
"You searched for ..."  (replace ... with term user searched for)

Step 3: Otherwise, simply display the form
 */

$input = '';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $input = $_POST['input'];
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <input type="text" name="input" placeholder="Search here">

  <input type="submit" value="Search">
</form>
<p>You Search for <span style="color: red;"><?=$input?></span></p>

<?php include 'includes/footer.php';?>