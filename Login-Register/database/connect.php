<?php
	$connection_error = "Sorry, we are experiencing connection problems";

	$dblink = mysql_connect("localhost", "root", "");
	
	$isConnected = mysql_select_db("lr", $dblink);
	
	if (!$isConnected) {
		echo $connection_error;
	}

?>