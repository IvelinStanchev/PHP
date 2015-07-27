<!-- Write an expression that checks if given point (x,  y) is inside a circle K({0, 0}, 2). -->

<?php

	$radius = 2;
	$center_x = 0;
	$center_y = 0;
	
	$x = 0;
	$y = 1;
	
	$isInCircle = false;
	
	if (($x - $center_x) * ($x - $center_x) + ($y - $center_y) * ($y - $center_y) <= $radius * $radius){
		$isInCircle = true;
	}
	
	echo $isInCircle ? "true" : "false";
?>