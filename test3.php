<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php demo 3</title>
</head>
<body>
	
	<?php

		//ah yes, traditional if elseif else &c.
		if (3 < 10) {
			echo 'correct: three is less than ten';
		} elseif (10 < 20) {
			echo 'correct: ten is less than twenty';
		} else {
			echo 'incorrect';
		}

		echo '<p></p>';
	?>



	<?php 

		//switch statements
		$number = 400;

		switch($number) {
			case 25:
			echo '$number is 25';
			break;
			
			case 400:
			echo '$number is 400';
			break;

			case 10:
			echo '$number is 10';
			break;

			default: 
				echo 'nothing here mane';
		}

	?>


</body>
</html>