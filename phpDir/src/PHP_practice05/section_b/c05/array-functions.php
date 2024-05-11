<?php
//An array of greetings (i.e. “Hi”, “Howdy”, “Hello”, “Hola”, “Cia”, “Moi”, “Namaste”, “Welcome”) -then display random greeting

$greetings = ["Hi", "Howdy", "Hello", "Hola", "Cia", "Moi", "Namaste", "Welcome"];
$random_greeting = $greetings[array_rand($greetings)];


// find array of best sellers of items (i.e. “notebook”, “pencil”, “ink”) -count items
$best_seller_items = ["notebook", "pencil", "ink", "paper", "laptop"];

$count_items = count($best_seller_items);

// display top items
$top_items = implode(' ',$best_seller_items);

//create an array holding customer details (e.g firstname, lastname, email).
$customer = [
    "firstname" => "John",
    "lastname" => 'Doe',
    "email" => "johon.doe@invalid.com"
];

(array_key_exists('firstname', $customer)) ? ($random_greeting .= ', ' .$customer['firstname']) : "None";
?>
<?php include 'includes/header.php'; ?>
<h1>Best Sellers</h1>
//Write code here
<p><?=$random_greeting?></p>
<p><?=$count_items?></p>
<p><?=$top_items?></p>
<?php include 'includes/footer.php'; ?>