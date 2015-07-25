<!-- Declare all possible types of variable and then, print their types with echo. 
You can use function gettype() that return type of given variable. -->

<?php

	$intType = 5;
	$stringType = "Pesho";
	$booelanType = false;
	$floatType = 15.3;
	$nullValue = NULL;
	$arrayType = array("Pesho", "Gosho", "Kiro");
	
	echo "Type of first variable: " . gettype($intType) . "<br/>";
 	echo "Type of second variable: " . gettype($stringType) . "<br/>";
 	echo "Type of third variable: " . gettype($booelanType) . "<br/>";
	echo "Type of fourth variable: " . gettype($floatType) . "<br/>";
	echo "Type of fifth variable: " . gettype($nullValue) . "<br/>";
	echo "Type of sixth variable: " . gettype($arrayType) . "<br/>";
	
?>