<!-- Write a script that allocates array of 20 integers and initializes each element 
by its index multiplied by 5. Print the obtained array on the console. -->

<?php

	$integers = array();
	
	for ($i = 0; $i < 20; $i++) {
		$integers[] = $i * 5;
	}
	
	foreach ($integers as $value) {
		echo "$value<br/>";
	}

?>