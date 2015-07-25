<!-- Declare two string variables and assign them with following value:
	 I asked a girl out and she said – “I don't know”. Does she mean yes or no?
	 Do the above in two different ways: with and without using quoted strings. Print the variables to ensure that their value was correctly defined. -->

<?php

	$withQuotedString = "I asked a girl out and she said – “I don't know”. Does she mean yes or no?";
	$withoutQuotedString = 'I asked a girl out and she said – “I don\'t know”. Does she mean yes or no?';

	echo $withQuotedString . "<br />";
	echo $withoutQuotedString;
	
?>