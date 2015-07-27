<!-- Write expression that print all prime number from 1 to given n. -->

<?php

	$n = 1000;
	function find_primes($finish) {
	 
	  // Initialise the range of numbers.
	  $number = 2;
	  $range = range(2, $finish);
	  $primes = array_combine($range, $range);
	 
	  // Loop through the numbers and remove the multiples from the primes array.
	  while ($number*$number < $finish) {
	    for ($i = $number; $i <= $finish; $i += $number) {
	      if ($i == $number) {
	        continue;
	      }
	      unset($primes[$i]);
	    }
	    $number = next($primes);
	  }
	  return $primes;
	}

	$allPrimeNumbers = find_primes($n);
	print_r($allPrimeNumbers);
	echo sizeof($allPrimeNumbers);
?>