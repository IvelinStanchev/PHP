<!-- Write a script that finds the sequence of maximal sum in given array. -->

<?php

	$PHP_INT_MIN = -2147483648;

	$inputString = "2, 3, -6, -1, 2, -1, 6, 4, -8, 8";
	
	$inputArrayWithIntervals = explode(",", $inputString);
	
	$allNumbers = array();
	
	foreach ($inputArrayWithIntervals as $value) {
		$allNumbers[] = trim($value);
	}
	
	$maximalSum = $PHP_INT_MIN;
	$resultString = "";
	$currentString = "";
	
	$currentSum = $PHP_INT_MIN;
	
	for ($i = 0; $i < sizeof($allNumbers); $i++) {
		
		$currentSum = $allNumbers[$i];
		
		$currentString = "$allNumbers[$i], ";
		
		for ($j = $i + 1; $j < sizeof($allNumbers); $j++) {
			$currentSum += $allNumbers[$j];
			
			$currentString .= "$allNumbers[$j], ";
			
			if ($currentSum > $maximalSum) {
				
				$maximalSum = $currentSum;
				$resultString = $currentString;
			}
		}
		
		$currentString = "";
	}
	
	echo substr($resultString, 0, strlen($resultString) - 2);
?>