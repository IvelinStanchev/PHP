<!-- You are given n integers (given in a single line, separated by a space). 
Write a program that checks whether the product of the odd elements is equal to the product 
of the even elements. Elements are counted from 1 to n, so the first element is odd, 
the second is even, etc.  -->

<?php

	$numbers = "4 3 2 5 2";
	$splittedNumbers = explode(" ", $numbers);
	
	$odd_product = 1;
	$even_product = 1;
	
	for ($i = 0; $i < sizeof($splittedNumbers); $i += 2) {
		$odd_product *= $splittedNumbers[$i];
	}
	
	for ($i = 1; $i < sizeof($splittedNumbers); $i += 2) {
		$even_product *= $splittedNumbers[$i];
	}
	
	if ($odd_product === $even_product){
		echo "yes";
	} else{
		echo "no";
	}
?>