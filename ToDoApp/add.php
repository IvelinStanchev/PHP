<?php
	include_once 'views/header.html';
	include_once 'views/add-todo.html';
	include_once 'functions/database.php';
	include_once 'functions/general.php';
	
	if (!empty($_POST)) {
		if (empty($_POST['text'])){
			echo "<span class='error'>You must enter some text</span>";
		}
		else{
			//add todo
			insertToDo($_POST['text']);
			header("Location: index.php");
		}
	}
	
	include_once 'views/footer.html';
?>