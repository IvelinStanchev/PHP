<!-- Write an if statement that examines two integer variables and exchanges their values 
if the first one is greater than the second one. -->

<?php

	$a = 5;
	$b = 3;
	
	if ($a > $b){
		$swap = $a;
		$a = $b;
		$b = $swap;
	}
	
	echo "$a<br/>";
	echo "$b<br/>"

?>