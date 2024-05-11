<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

 echo 'Function 1';
function calculate( ){
	echo '<br/>Addition: ' . (20 + 10);
	echo '<br/> Deduction: ' . (20 - 10);
	echo '<br/> Multiplication: ' . (20 * 10);
	echo '<br/> Division: ' . (20 / 10);
	echo '<br/>';
}

calculate();

echo 'Function 2';

function calculate2($num1, $num2){
	echo '<br/>Addition: ' . $num1 + $num2;
	echo '<br/> Deduction: ' . $num1 - $num2;
	echo '<br/> Multiplication: ' . $num1 + $num2;
	echo '<br/> Division: ' . $num1 / $num2;
	echo '<br/>';
}
 
calculate(20,2);
	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>