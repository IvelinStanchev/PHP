<!-- Sorting an array means to arrange its elements in increasing order. 
Write a script to sort an array. Use the "selection sort" algorithm: 
Find the smallest element, move it at the first position, 
find the smallest from the rest, move it at the second position, etc. -->

<?php

	$unsortedArray = array(5, 8, 1, 10, 15, 2, 4, 7, 20, 13, 8, -5);
	$sortedArray = array();
	$lengthOfUnsortedArray = sizeof($unsortedArray);
	
	echo "Unsorted array: ";
	
	foreach ($unsortedArray as $value) {
		echo "$value ";
	}
	
	echo "<br/>";
	
 	while (sizeof($sortedArray) < $lengthOfUnsortedArray) {
 		$sortedArray[] = min($unsortedArray);
		$indexOfCurrentSmallestElement = array_search(min($unsortedArray), $unsortedArray);
		
		unset($unsortedArray[$indexOfCurrentSmallestElement]);
	}
	
	echo "Sorted array: ";
	
	foreach ($sortedArray as $value) {
		echo "$value ";
	}
	
?>