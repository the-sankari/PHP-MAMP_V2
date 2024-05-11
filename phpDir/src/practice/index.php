<?php

session_start();

setcookie('testing_cookies', 'cookie_value', time()+(7*3600*24));
?>