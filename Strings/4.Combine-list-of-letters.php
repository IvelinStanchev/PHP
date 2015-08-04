<!-- Write a script  that reads two array of letters l1 and l2 and combines them: 
appends all letters c from l2 to the end of l1, but only when c does not appear in l1. 
Print the obtained combined list. All lists are given as sequence of letters separated 
by a single space, each at a separate line. -->

<?php

	$firstArrayString = "h e l l o";
	$firstArray = explode(" ", $firstArrayString);
	
	$secondArrayString = "l o w";
	$secondArray = explode(" ", $secondArrayString);
	
	$newArray = array();
	
	foreach ($firstArray as $value) {
		$newArray[] = $value;
	}

	$isContained = false;
	
	foreach ($secondArray as $valueSecondArray) {
		foreach ($firstArray as $valueFirstArray) {
			if ($valueFirstArray === $valueSecondArray) {
				$isContained = true;
			}
		}
		
		if (!($isContained)) {
			$newArray[] = $valueSecondArray;
		}
		
		$isContained = false;
	}
	
	$resultString = "";
	
	foreach ($newArray as $value) {
		$resultString .= "$value ";
	}
	
	echo $resultString;
?>