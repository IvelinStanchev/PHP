<?php
	function deleteToDo($id){
		global $db;
		$id = (int) $id;
		$sql = "DELETE FROM `todos` WHERE `id` = '$id'";
		$db->query($sql);
	}

	function insertToDo($text){
 		$text = htmlentities($text);
 		mysql_real_escape_string($text);
		
		global $db;
		
		$sql = "INSERT INTO `todos` (`text`) VALUES ('$text')";
		$db->query($sql);
	}
?>