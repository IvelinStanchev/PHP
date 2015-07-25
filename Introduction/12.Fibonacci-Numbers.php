<!-- Write a program that reads a number n and prints on the web page the first n members of the 
Fibonacci sequence (at a single line, separated by spaces) : 
0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, …. 
Note that you may need to learn how to use loops. -->

<?php

	$n = 10;
	
	$firstNumber = 0;
	$secondNumber = 1;
	
	if ($n === 1) {
		echo $firstNumber . "<br />";
	}
	
	if ($n === 2) {
		echo $firstNumber . "<br />";
		echo $secondNumber . "<br />";
	}
	
	if ($n >= 3){
		echo $firstNumber . "<br />";
		echo $secondNumber . "<br />";
		
		$counter = 2;
		
		while ($counter !== $n){
			$counter++;
		
			$resultNumber = $firstNumber + $secondNumber;
		
			$firstNumber = $secondNumber;
			$secondNumber = $resultNumber;
		
			echo $resultNumber . "<br />";
		
		}
	}

?>