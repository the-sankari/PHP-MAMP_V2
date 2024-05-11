<?php
session_start();
setcookie('cookie_name', 'cookie_value', time()+(7*3600*24));
?>


<?php include "functions.php";


?>
<?php include "includes/header.php";

?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">

<a href="9.php?param1=value1&param2=value2">Click Here</a> <br>

    <?php

//  Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it
// Retrieve and display parameters passed through GET
if (isset($_GET['param1']) && isset($_GET['param2'])) {
    $param1 = $_GET['param1'];
    $param2 = $_GET['param2'];
    echo "Parameter 1: $param1 <br>";
    echo "Parameter 2: $param2 <br>";
}

//    Step 3 - Start a session and set it to value, any value you want.

//Step 2 - Set a cookie that expires in one week

// echo $cookie_name;
if (isset($_COOKIE['cookie_name'])) {
    $cookie_name = 'cookie_name';
    echo "Cookie name: " . $cookie_name . "<br>";
}

if(isset($_SESSION['session_variable'])) {
  $session_value = $_SESSION['session_variable'];
  echo "Session Value: $session_value <br>";
}

?>
  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php";?>