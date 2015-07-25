<!-- Try to print html tags as text. Use build in functions in PHP.
       Input	                         Output
<h1>Hello World</h1>	            <h1>Hello World</h1>
<p>I love Software University<p>	<p>I love Software University<p> -->


<?php

	$text = "<h1>Hello World</h1>";
//  $text = "<p>I love Software University<p>";

	echo htmlspecialchars($text);

?>