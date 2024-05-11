<?php
$text = 'Home sweet home';
$noSpace = preg_replace("/[^A-Za-z]/","",$text);
?>
<?php include 'includes/header.php';?>

<p>
  <?=
strtoupper($text);
?>
</p>
<p>
  <?=
strtolower($text);
?>
</p>
<p><?= strlen($text)?></p>
<p><?= str_word_count($text)?></p>
<p><?=strlen($noSpace);?></p>



<?php include 'includes/footer.php';?>