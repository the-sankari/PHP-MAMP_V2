
<?php
// Retrieve and display parameters passed through GET
if(isset($_GET['param1']) && isset($_GET['param2'])) {
    $param1 = $_GET['param1'];
    $param2 = $_GET['param2'];
    echo "Parameter 1: $param1 <br>";
    echo "Parameter 2: $param2 <br>";
}

// Retrieve and display the cookie
if(isset($_COOKIE['cookie_name'])) {
    $cookie_value = $_COOKIE['cookie_name'];
    echo "Cookie Value: $cookie_value <br>";
}

// Retrieve and display the session variable
session_start();
if(isset($_SESSION['session_variable'])) {
    $session_value = $_SESSION['session_variable'];
    echo "Session Value: $session_value <br>";
}
?>
