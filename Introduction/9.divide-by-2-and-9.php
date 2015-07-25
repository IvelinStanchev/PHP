<!-- Write a Boolean expression that checks for given integer if it can be divided (without remainder)
 by 7 and 5 in the same time. -->

<?php

	$number = 15;
	
	$isDivided = false;
	
	if ($number !== 0 && $number % 2 === 0 && $number % 9 === 0){
		$isDivided = true;
	}

	echo $isDivided ? 'true' : 'false';
	
?>