<!-- Write a program that prints a matrix with numbers. Use two nested loops. -->

<?php

	$n = 4;

	for ($i = 1; $i <= $n; $i++) {
		for ($j = $i; $j <= $n + $i - 1; $j++) {
			echo "$j ";
		}
		
		echo "<br/>";
	}

?>