<!-- Write a script that shows the sign (+ or -) of the product of three real numbers 
without calculating it. Use a sequence of if statements. -->

<?php

	$a = 5;
	$b = 3;
	$c = 10;
	
	$theSign = "";
	
	if ($a < 0 && $b < 0 && $c < 0){
		$theSign = "-";
	} else if ($a < 0 && $b > 0 && $c > 0){
		$theSign = "-";
	} else if ($a > 0 && $b > 0 && $c < 0){
		$theSign = "-";
	} else if ($a > 0 && $b < 0 && $c > 0){
		$theSign = "-";
	} else if ($a > 0 && $b > 0 && $c > 0){
		$theSign = "+";
	} else if ($a > 0 && $b < 0 && $c < 0){
		$theSign = "+";
	} else if ($a < 0 && $b < 0 && $c > 0){
		$theSign = "+";
	} else if ($a < 0 && $b > 0 && $c < 0){
		$theSign = "+";
	}
	else{
		$theSign = "neutral";
	}
	
	echo $theSign;

?>