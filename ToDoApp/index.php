<?php
	include_once 'views/header.html';
	include_once 'views/todo-header.html';
	include_once 'functions/database.php';
	include_once 'functions/general.php';

	if(isset($_GET['id']) && !empty($_GET['id'])){
		deleteToDo($_GET['id']);
	}
	
	$sql = "SELECT * FROM `todos`";
	$result = $db->query($sql);
	
	if(!$result){
		die('There was an error running the query [' . $db->error . ']');
	}
	
	echo "<ul>";
	
	while($row = $result->fetch_assoc()){
		echo 
		"<li>" . 
		$row['text'] . 
		"<a href=\"?action=delete&id=" . $row['id'] . "\">(x)</a>" . 
		"</li>";
	}
	
	echo "</ul>";
	
	include_once 'views/footer.html';
?>
