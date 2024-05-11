<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

echo 'Step 1 <br/>';
 if (true) {
	echo 'I love PHP';
 } else {
	echo 'Read it through';
 }
 echo '<br/>';

echo 'Step 2 <br/>';

for ($i=1; $i <=10 ; $i++) { 
	echo $i . ' ';
}

echo ' <br/>';


echo 'Step 3 <br/>';

$lang = 'Java';

switch ($lang) {
	case 'Java':
		echo 'Mobile app ';
		break;
	case 'JavaScript':
		echo 'Web app ';
		break;
	case 'PHP':
		echo 'Web back end';
		break;
	case 'C++':
		echo 'Gaming ';
		break;
	case 'Python':
		echo 'Data Science ';
		break;
	default:
		echo 'Something went wrong';
		break;
}



	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>