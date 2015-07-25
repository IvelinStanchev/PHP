<!-- Write a program that enters the sides of a rectangle (two integers a and b) and calculates and prints the rectangle's area. -->

<?php 

	function calculateArea($witdh, $height){
		
		return $witdh * $height;
		
	}
	
	$result = calculateArea(5, 6);
	
	echo $result;

?>