<!-- Write a program that enters 3 points in the plane (as integer x and y coordinates), 
calculates and prints the area of the triangle composed by these 3 points. 
Round the result to a whole number. In case the three points do not form a triangle, 
print "0" as result. -->

<?php

	function calculateTriangleArea($x1, $y1, $x2, $y2, $x3, $y3){
		return abs(($x1 * ($y2 - $y3) + $x2 * ($y3 - $y1) + $x3 * ($y1 - $y2)) / 2);
	}
	
	$result = calculateTriangleArea(1, 1, 2, 2, 3, 3);
	
	echo $result;

?>