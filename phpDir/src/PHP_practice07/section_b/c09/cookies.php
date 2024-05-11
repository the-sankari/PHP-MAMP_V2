<?php
/*
Overall idea here is to set cookies and count the number of pages a visitor has viewed.
*/
//Step 1: Create a counter to store number of pages vistor has viwed. Create a cookie to hold that counter variable. 

$views = 0;

if (isset($_COOKIE['views'])) {
    $views = $_COOKIE['views'];
}
// Step 2: Increment the value of counter, as the visitor has just viewed a page.
$views++;

// Step 3: Use a setcookie() function to tell the browser to create or update a cookie and also store the value from the variable in that cookie
$cookie_duration = time() + (7*24*36*36); // for 7 days

setcookie('views', $views, $cookie_duration);
//Step 4: A new variable should hold message saying the number of pages the visitor has viewed. e.g. "Page views: "
$message = 'Views: ' . $views;

?>

<?php include 'includes/header.php'; ?>

<!-- <p><a href="sessions.php"> Refresh this page </a> to see the page views increase </p> -->
<p>Views: <?=$message?></p>
<?php include 'includes/footer.php'; ?>

