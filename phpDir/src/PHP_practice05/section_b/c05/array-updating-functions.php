<?php
// Write your code here
$items = ["notebook", "pencil", "eraser"];
array_unshift($items, 'scissors');
array_pop($items);

?>
<?php include 'includes/header.php';?>

<h1>Order</h1>
<ul>
    <?php foreach ($items as $item): ?>
        <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>

<?php include 'includes/footer.php';?>