<!-- Write a function that takes as argument an array, and extract all the words from that array
 without repeating the same ones. -->

<?php

	$input = array("Nakov", "Svetlin", "Nakov", "Pesho", "Mario", "Dimityr", "Georgi", "Mario");
	$result = array_unique($input);
	print_r($result);

?>