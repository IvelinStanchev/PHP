<!-- Write an expression that checks for given integer if its third digit from right-to-left is 7. -->

<?php

	$number = 701;
	
	$numberToString = strval($number);
	$isThirdDigitSeven = false;
	
	if(strlen($numberToString) >= 3 && $numberToString[strlen($numberToString) - 3] === "7"){
		$isThirdDigitSeven = true;
	}

	echo $isThirdDigitSeven ? "true" : "false";
?>