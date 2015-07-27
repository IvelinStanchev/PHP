<!-- Write expression that prints all possible combinations from TOTO 6/49. -->

<?php

	$combinations = 0;

	for ($i = 1; $i <= 49; $i++) {
		for ($j = $i + 1; $j <= 49; $j++) {
			for ($k = $j + 1; $k <= 49; $k++) {
				for ($p = $k +1; $p <= 49; $p++) {
					for ($f = $p + 1; $f <= 49; $f++) {
						for ($z = $f + 1; $z <= 49; $z++) {
							echo "$i  $j  $k  $p  $f  $z<br/>";
							$combinations++;
						}
					}
				}
			}
		}
	}
	
	echo "<br/>";
	echo $combinations;

?>