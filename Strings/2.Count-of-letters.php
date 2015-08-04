<!-- Write a program that reads a list of letters and prints for each letter how many times 
it appears in the list. The letters should be listed in alphabetical order. 
Use the input and output format from the examples below.  -->

<?php

	$stringInput = "h d h a a a s d f d a d j d s h a a";
	
	$arrayWithValues = explode(" ", $stringInput);
	$occurrences = array_count_values($arrayWithValues);
	
	ksort($occurrences);
	
	foreach ($occurrences as $key => $value) {
		echo "$key -> $value<br/>";
	}
	
?>