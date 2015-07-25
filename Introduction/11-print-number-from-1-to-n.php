<!-- Write a program that reads an integer number n from the input and prints all the numbers
 in the interval [1..n], each on a single line. Note that you may need to use a for-loop. -->

<?php

	$n = 5;

	if ($n >= 1){
		for ($i = 1; $i <= $n; $i++){
			echo strval($i) . "<br />";
		}
	}
	
?>