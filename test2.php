<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<p style="font-family: Courier; font-size: 24px">WHY IS PHP SO DIFFICULT TO configure</p>

	<?php 
		$title = 'php test 2';
	?>

	<p style="font-family: courier; font-size: 24px">
		<?php 
			echo $title;
		?>
	</p>

	<?php
		$list = array(600, 15, 'faux', '<em>yes</em>', 500);
		echo $list[3] . '<br>';
	?>

	<!-- ASSOCIATIVE ARRAYS   

			 THAT IS TO SAY: ARRAY VALUES REFERENCED WITH
			 NAMES INSTEAD OF SIMPLY USING INDICES    -->

	<?php 
		$list2 = array('first' => 420, 'second' => 808);

		print_r($list2);
		echo '<br>';
		echo $list2['second'];
		echo '<p>';
	?>


	
	<?php
	
	//concat two array indices
	$nameArray = array('first' => 'faux', 'second' => 'kno');
	echo $nameArray['first'] . " " . $nameArray['second'];

	?>

</body>
</html>



<!-- E X E R C I S E  # 1  

1. Make 2 variables (num1, num2). Set num1 to 10 and num2 to 20.

2. Add the 2 variables together and display the sum with an echo.

3. Make 2 arrays with the same values, one regular and one associative.

-->

<?php 

	$num1 = 10;
	$num2 = 20;

	$sum = $num1 + $num2;

	echo '<h1><strong>E X E R C I S E  # 1 </strong></h1>';
	echo $sum;
	echo '<p></p>';

	echo 'arr1: <br>';
	$arr1 = array(998, 999);
	echo $arr1[0] . " " . $arr1[1];
	echo '<p></p>';

	echo 'arr2: <br>';
	$arr2 = array('first' => 998, 'second' => 999);
	echo $arr2['first'] . " " . $arr2['second'];


?>






























