<?php
/* Write your code here */
include "./includes/header.php";
$stock = 5;
if ($stock <= 25 && $stock >= 10) {
    $msg = 'Good availibilty';
} else if($stock < 10 && $stock > 0) {
    $msg = 'Low Stock';
}else{
    $msg = 'Out of stock';
}

?>


<h2>Chocolate</h2>
<div>
    <?php
   echo "<p> $msg</p>"
    ?>
</div>
<?php
/* Write your code here */
include "./includes/footer.php";
?>