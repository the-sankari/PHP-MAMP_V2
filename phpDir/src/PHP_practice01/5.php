<?php include "functions.php";?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php

/* Step1: Use a pre-built math function here and echo it

Step 2:  Use a pre-built string function here and echo it

Step 3:  Use a pre-built Array function here and echo it

 */

echo round(5.54);

echo strtoupper('php');

$countries = [
    'Finland' => 'Helsinki',
    'Bangladesh' => 'Dhaka',
    'India' => 'Delhi',
];
echo '<br/>';

array_push($countries, ['Sweden' => 'Stolkholm']);

print_r($countries);

$codes = array_keys($countries);
print_r($codes);
echo $codes;
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php";?>