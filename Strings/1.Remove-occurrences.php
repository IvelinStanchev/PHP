<!-- Write a script that takes as input two lists of names and removes from the first array 
all names given in the second array. The input and output array are given as words, 
separated by a space, each list at a separate line.  -->

<?php

	$allWords = "Peter Alex Maria Todor Steve Diana Steve";
	$wordsForRemoving = "Todor Steve Nakov";
	
// 	$allWords = "Hristo Hristo Nakov Nakov Petya";
// 	$wordsForRemoving = "Nakov Vanessa Maria";
	

	$arrayWithAllWords = explode(" ", $allWords);
	$arrayWithWordsForRemoving = explode(" ", $wordsForRemoving);
	
	$arrayWithAllWords = array_diff($arrayWithAllWords, $arrayWithWordsForRemoving);
	
	foreach ($arrayWithAllWords as $value) {
		echo "$value ";
	}
		
?>