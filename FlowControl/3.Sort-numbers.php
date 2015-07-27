<!-- Sort 3 real values in descending order using nested if statements. -->

<?php

	$a = 25.3;
	$b = 5.3;
	$c = 10.8;
	
	$max = 0;
	$mid = 0;
	$min = 0;

	if ($a >= $b && $b >= $c){
		$max = $a;
		$mid = $b;
		$min = $c;
	} else if ($a >= $c && $c >= $b){
		$max = $a;
		$mid = $c;
		$min = $b;
	} else if ($b >= $a && $a >= $c){
		$max = $b;
		$mid = $a;
		$min = $c;
	} else if ($b >= $c && $c >= $a){
		$max = $b;
		$mid = $c;
		$min = $a;
	} else if ($c >= $a && $a >= $b){
		$max = $c;
		$mid = $a;
		$min = $b;
	} else if ($c >= $b && $b >= $a){
		$max = $c;
		$mid = $b;
		$min = $a;
	}
	
	echo "$max <br/> $mid <br/> $min";
?>