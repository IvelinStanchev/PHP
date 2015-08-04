<!-- Write a script that finds the largest sequence of equal elements in array of strings. 
If several sequences have the same longest length, print the leftmost of them. 
The input strings are given as a single line, separated by a space.  -->

<?php

	$maxSequeceCount = 1;
	$currentSequenceCount = 1;
	$currentRepeatedString = "";
	
	$sequence = "hi yes yes yes bye";
	$separatedSequence = explode(" ", $sequence);
	
	$maxRepeatedString = $separatedSequence[0];
	
	for ($i = 0; $i < sizeof($separatedSequence); $i++) {
		if ($i < sizeof($separatedSequence) - 1 && $separatedSequence[$i] === $separatedSequence[$i + 1]) {
			$currentSequenceCount++;
		}
		else{
			$currentSequenceCount = 1;
		}
		
		if ($currentSequenceCount > $maxSequeceCount) {
			$maxRepeatedString = $separatedSequence[$i];
			$maxSequeceCount = $currentSequenceCount;
		}
	}
	
	for ($i = 1; $i <= $maxSequeceCount; $i++) {
		echo "$maxRepeatedString ";
	}

?>