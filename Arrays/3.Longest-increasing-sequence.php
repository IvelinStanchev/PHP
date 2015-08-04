<!-- Write a script to find all increasing sequences inside an array of integers. 
The integers are given in a array. Print the sequences in the order of their appearance in the input
 array, each at a single line. Separate the sequence elements by a space. 
 Find also the longest increasing sequence and print it at the last line. 
 If several sequences have the same longest length, print the leftmost of them.  -->

<?php

	$integers = array(2, 3, 4, 1, 50, 2, 3, 4, 5);
	//$integers = array(8, 9, 9, 9, -1, 5, 2, 3);
	//$integers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	//$integers = array(5, -1, 10, 20, 3, 4);
	//$integers = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);


	$allSequences = array();
	
	$sequence = 0;
	
	$currentIndex = 0;
	$longestSequenceCount = 1;
	$currentSequenceCount = 1;
	
	$longestSequenceStartingIndex = 0;
	
	while ($currentIndex < sizeof($integers)) {
		if ($currentIndex + 1 < sizeof($integers) && 
				$integers[$currentIndex] < $integers[$currentIndex + 1]) {
			$currentSequenceCount++;
			
			echo  "$integers[$currentIndex] ";
		}
		else{
			echo  "$integers[$currentIndex]<br/>";
			
			$currentSequenceCount = 1;
		}
		
		if ($currentSequenceCount > $longestSequenceCount) {
			$longestSequenceCount = $currentSequenceCount;
			$longestSequenceStartingIndex = $currentIndex - $longestSequenceCount + 2;
		}
		
		$currentIndex++;
	}
	
	echo "Longest: ";
	
	for ($i = $longestSequenceStartingIndex; $i < $longestSequenceStartingIndex + $longestSequenceCount; $i++) {
		echo "$integers[$i] ";
	}

?>