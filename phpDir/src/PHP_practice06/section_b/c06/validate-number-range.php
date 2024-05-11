<?php
/* Write PHP Code here

Step 1: Initialize two variables with empty strings

Step 2: Write custom fuction to check
if any given value between 0 to 100 is a number

Step 3: Check if the form has been submitted. If it has,
collect age from the $_POST superglobal array.
The data comes from a text input, so a value will always be sent for it
when the form is submitted.

Step 4: Call the custom function to check if the value user submitted falls between
range 16 and 65. You may store boolean value as return type in function to check if the number is valid.

Step 5: Check if condition is valid, if it is you can display
"Age is valid" else "You must be 16-65 years old"

 */
$age = '';
$msg = '';

// $ageRange = range(16, 65);
function checkNumber($age)
{
    return (is_numeric($age) && $age > 0 && $age <= 100);
}
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $age = $_POST['age'];
    if (checkNumber($age)) {
        ($age >= 16 && $age <= 65) ? $msg = 'Age is valid' : $msg = 'You must be 16-65';

    }
}

?>
<?php include 'includes/header.php';?>

<form action="" method="post">
  <input type="text" type="number" name="age">
  <input type="submit" value="Submit">
</form>

<p><?=$msg?></p>

<?php include 'includes/footer.php';?>